<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf; 

class AdminDashboardController extends Controller
{
    /**
     * Tampilkan data ringkasan dashboard admin.
     */
    public function index()
    {
        $userCount = User::count();
        $bookCount = Book::count();
        $approvedLoans = Loan::where('status', 'dipinjam')->count();
        $pendingLoans = Loan::where('status', 'menunggu')->count();

        $loansPerMonth = DB::table('loans')
            ->select(DB::raw('DATE_FORMAT(created_at, "%Y-%m") as month'), DB::raw('count(*) as total'))
            ->where('status', 'dipinjam')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $loansPerWeek = DB::table('loans')
            ->select(DB::raw('YEARWEEK(created_at) as week'), DB::raw('count(*) as total'))
            ->where('status', 'dipinjam')
            ->groupBy('week')
            ->orderBy('week')
            ->get();

        // Ambil 5 (atau 10) peminjaman terbaru
        $latestLoans = Loan::with(['book', 'user'])
            ->orderBy('created_at', 'desc')
            ->take(5) 
            ->get();

        return view('admin.dashboard', compact(
            'userCount',
            'bookCount',
            'approvedLoans',
            'pendingLoans',
            'loansPerMonth',
            'loansPerWeek',
            'latestLoans' 
        ));
    }

    /**
     * Ekspor data statistik peminjaman ke dalam file PDF.
     */
    public function exportPdf()
    {
        $userCount = User::count();
        $bookCount = Book::count();
        $approvedLoans = Loan::where('status', 'dipinjam')->count();
        $pendingLoans = Loan::where('status', 'menunggu')->count();

        $loansPerMonth = DB::table('loans')
            ->select(DB::raw('DATE_FORMAT(created_at, "%Y-%m") as month'), DB::raw('count(*) as total'))
            ->where('status', 'dipinjam')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $pdf = Pdf::loadView('admin.dashboard_pdf', compact(
            'userCount',
            'bookCount',
            'approvedLoans',
            'pendingLoans',
            'loansPerMonth'
        ));
        return $pdf->download('rekap_peminjaman.pdf');
    }
}
