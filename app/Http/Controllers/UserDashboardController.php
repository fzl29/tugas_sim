<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Book;
use App\Models\Queue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        // 1. Statistik peminjaman
        $bukuDipinjam = Loan::where('user_id', $userId)->where('status', 'dipinjam')->count();
        $antrianAktif = Loan::where('user_id', $userId)->where('status', 'menunggu')->count();

        // 2. Buku terbaru
        $bukuTerbaru = Book::orderBy('created_at', 'desc')->take(7)->get();

        // 3. Data antrian (untuk nomor urut antrian user)
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

        // 4. Riwayat peminjaman (10 terbaru)
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
