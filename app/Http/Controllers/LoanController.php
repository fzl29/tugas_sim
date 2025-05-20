<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoanController extends Controller
{
    public function manageLoans()
    {
        $loans = \App\Models\Loan::with(['user', 'book', 'queue'])->orderBy('loan_date', 'desc')->get();
        return view('admin.manage-loans', compact('loans'));
    }

    public function confirmReturn(Request $request, $id)
    {
        $loan = \App\Models\Loan::findOrFail($id);

        if (!$loan->return_date) {
            return redirect()->back()->with('error', 'Tanggal kembali belum diatur!');
        }

        if ($request->action == 'sudah') {
            $now = now();
            $daysLate = $now->gt($loan->return_date) ? $now->diffInDays($loan->return_date) : 0;
            $fine = $daysLate * 10000;
            $loan->status = 'Dikembalikan';
            $loan->fine = $fine;
            $loan->save();

            // **Tambahkan ini agar buku tersedia kembali**
            $loan->book->is_available = true;
            $loan->book->save();
        } elseif ($request->action == 'belum') {
            $now = now();
            $daysLate = $now->gt($loan->return_date) ? $now->diffInDays($loan->return_date) : 0;
            $fine = $daysLate * 10000;
            $loan->status = 'Terlambat';
            $loan->fine = $fine;
            $loan->save();
            // Tidak mengubah status buku
        }

        return redirect()->back()->with('success', 'Status pinjaman diperbarui!');
    }

    public function userHistory()
    {
        $userId = Auth::id(); 
        $loans = \App\Models\Loan::with(['book', 'queue'])
            ->where('user_id', $userId)
            ->orderBy('loan_date', 'desc')
            ->get();

        return view('user.history', compact('loans'));
    }
}
