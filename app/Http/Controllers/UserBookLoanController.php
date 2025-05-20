<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use App\Models\Queue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class UserBookLoanController extends Controller
{
    /**
     * Menampilkan form peminjaman buku, termasuk buku yang dipilih dan tersedia.
     */
    public function form(Request $request)
    {
        $bookIds = (array) $request->input('book_id', []);
        $bookIds = array_slice($bookIds, 0, 3);

        $selectedBooks = Book::with('category')->whereIn('id', $bookIds)->get();
        $availableBooks = Book::with('category')
            ->whereNotIn('id', $bookIds)
            ->where('is_available', true)
            ->get();

        return view('user.book-loans', [
            'selectedBooks' => $selectedBooks,
            'availableBooks' => $availableBooks,
            'today' => now(),
            'maxLoanDays' => 7,
            'minLoanDays' => 1,
            'loanDefaultDays' => 3,
        ]);
    }

    /**
     * Menyimpan data peminjaman dan antrian buku yang diajukan user.
     */
    public function submit(Request $request)
    {
        $request->validate([
            'book_id'   => 'required|array|min:1|max:3',
            'duration'  => 'required|integer|min:1|max:7',
        ]);
        $user = Auth::user();
        $bookIds = $request->book_id;
        $duration = (int) $request->duration; // <-- tambahkan casting ke integer!

        foreach ($bookIds as $bookId) {
            $queue = \App\Models\Queue::create([
                'user_id' => $user->id,
                'queue_number' => \App\Models\Queue::generateCode(),
                'book_id' => $bookId,
                'loan_date' => now(),
                'return_date' => now()->addDays($duration),
                'status' => 'menunggu',
            ]);

            \App\Models\Loan::create([
                'queue_id' => $queue->id,
                'book_id' => $bookId,
                'user_id' => $user->id,
                'loan_date' => now(),
                'return_date' => now()->addDays($duration),
                'status' => 'menunggu',
            ]);

            \App\Models\Book::where('id', $bookId)->update(['is_available' => false]);
        }

        return redirect()->route('user.queue')->with('success', 'Pengajuan pinjaman buku berhasil!');
    }

    /**
     * Menampilkan daftar antrian peminjaman buku milik user.
     */
    public function userQueue()
    {
        $queues = \App\Models\Queue::with(['book'])
            ->where('user_id', Auth::id())
            ->orderBy('loan_date', 'desc')
            ->get();
        return view('user.queue', compact('queues'));
    }

    /**
     * Mengunduh bukti antrian peminjaman dalam bentuk PDF.
     */
    public function printQueue($id)
    {
        $queue = \App\Models\Queue::with('book')->where('user_id', Auth::id())->findOrFail($id);
        $pdf = Pdf::loadView('user.queue-pdf', compact('queue'));
        return $pdf->download('bukti_antrian_' . $queue->queue_number . '.pdf');
    }

    /**
     * Membatalkan antrian peminjaman buku dan mengubah status buku jadi tersedia kembali.
     */
    public function cancelQueue($id)
    {
        $queue = \App\Models\Queue::where('user_id', Auth::id())->findOrFail($id);
        $queue->status = 'ditolak';
        $queue->save();

        \App\Models\Loan::where('queue_id', $queue->id)->update(['status' => 'ditolak']);
        \App\Models\Book::where('id', $queue->book_id)->update(['is_available' => true]);
        return back()->with('success', 'Antrian dibatalkan!');
    }
}
