<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use App\Models\Queue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserBookLoanController extends Controller
{
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

    public function submit(Request $request)
    {
        $request->validate([
            'book_id'   => 'required|array|min:1|max:3',
            'duration'  => 'required|integer|min:1|max:7',
        ]);
        $user = Auth::user();
        $bookIds = $request->book_id;
        $duration = $request->duration;

        // Buat satu Queue record untuk user, set status=menunggu
        $queue = Queue::create([
            'user_id' => $user->id,
            'queue_code' => Queue::generateCode(), // Buat kode antrian unik
            'loan_duration' => $duration,
            'loan_date' => now(),
            'return_date' => now()->addDays($duration),
            'status' => 'menunggu',
        ]);

        // Simpan detail pinjaman buku
        foreach ($bookIds as $bookId) {
            Loan::create([
                'queue_id' => $queue->id,
                'book_id' => $bookId,
                'user_id' => $user->id,
                'loan_date' => now(),
                'return_date' => now()->addDays($duration),
                'status' => 'menunggu',
            ]);
            // Update status buku
            Book::where('id', $bookId)->update(['is_available' => false]);
        }

        return redirect()->route('user.queue')->with('success', 'Pengajuan pinjaman buku berhasil!');
    }

    public function queue()
    {
        $user = Auth::user();
        $queues = Queue::with('loans.book')->where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        return view('user.queue', compact('queues'));
    }
}
