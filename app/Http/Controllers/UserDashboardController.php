<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Book;
use App\Models\Queue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    /**
     * Menampilkan dashboard user dengan data:
     * - Jumlah buku yang sedang dipinjam
     * - Jumlah antrian aktif
     * - 7 buku terbaru
     * - Posisi antrian saat ini (jika ada)
     * - Status antrian saat ini (jika ada)
     * - 10 riwayat peminjaman terakhir
     */
    public function index()
    {
        $userId = Auth::id();

        $bukuDipinjam = Loan::where('user_id', $userId)->where('status', 'dipinjam')->count();
        $antrianAktif = Loan::where('user_id', $userId)->where('status', 'menunggu')->count();

        $bukuTerbaru = Book::orderBy('created_at', 'desc')->take(7)->get();

        $allActiveQueues = Queue::whereIn('status', ['menunggu', 'aktif'])
            ->orderBy('created_at')
            ->get();

        $userQueue = $allActiveQueues->firstWhere('user_id', $userId);

        $queuePosition = null;
        $queueStatus = null;
        if ($userQueue) {
            $queuePosition = $allActiveQueues->search(fn($q) => $q->id === $userQueue->id) + 1;
            $queueStatus = $userQueue->status;
        }

        $riwayatPeminjaman = Loan::with('book')
            ->where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        return view('user.dashboard', compact(
            'bukuDipinjam',
            'antrianAktif',
            'bukuTerbaru',
            'queuePosition',
            'queueStatus',
            'riwayatPeminjaman'
        ));
    }
}
