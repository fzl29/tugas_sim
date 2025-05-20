@extends('layouts.master-admin')

@section('title', 'SiPus Digital - Dashboard')

@section('content')

@include('components.title', ['title' => 'Beranda', 'subtitle' => 'Halaman Utama'])

<section class="grid grid-cols-4 gap-4 mb-4">
    <div class="flex items-center gap-4 bg-light7 dark:bg-dark7 text-light1 dark:text-dark1 rounded-md border border-light5 dark:border-dark5 py-4 px-5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="50" height="50"><rect width="256" height="256" fill="none"/><circle cx="84" cy="108" r="52" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M10.23,200a88,88,0,0,1,147.54,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M172,160a87.93,87.93,0,0,1,73.77,40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M152.69,59.7A52,52,0,1,1,172,160" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
        <div class="flex flex-col">
            <p class="text-light3 dark:text-dark3 text-[17px] font-semibold font-raleway">Total Pengguna</p>
            <h2 class="text-3xl font-semibold">{{ $userCount }}</h2>
        </div> 
    </div>
    <div class="flex items-center gap-4 bg-light7 dark:bg-dark7 text-green-500 rounded-md border border-light5 dark:border-dark5 py-4 px-5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="50" height="50"><rect width="256" height="256" fill="none"/><rect x="48" y="40" width="64" height="176" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M217.67,205.77l-46.81,10a8,8,0,0,1-9.5-6.21L128.18,51.8a8.07,8.07,0,0,1,6.15-9.57l46.81-10a8,8,0,0,1,9.5,6.21L223.82,196.2A8.07,8.07,0,0,1,217.67,205.77Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="48" y1="72" x2="112" y2="72" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="48" y1="184" x2="112" y2="184" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="133.16" y1="75.48" x2="195.61" y2="62.06" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="139.79" y1="107.04" x2="202.25" y2="93.62" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="156.39" y1="185.94" x2="218.84" y2="172.52" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
        <div class="flex flex-col">
            <p class="text-light3 dark:text-dark3 text-[17px] font-semibold font-raleway">Total Buku</p>
            <h2 class="text-3xl font-semibold">{{ $bookCount }}</h2>
        </div> 
    </div>
    <div class="flex items-center gap-4 bg-light7 dark:bg-dark7 text-red-500 rounded-md border border-light5 dark:border-dark5 py-4 px-5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="50" height="50"><rect width="256" height="256" fill="none"/><polyline points="128 80 128 128 168 152" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="184 104 224 104 224 64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M188.4,192a88,88,0,1,1,1.83-126.23C202,77.69,211.72,88.93,224,104" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
        <div class="flex flex-col">
            <p class="text-light3 dark:text-dark3 text-[17px] font-semibold font-raleway">Dipinjam Saat Ini</p>
            <h2 class="text-3xl font-semibold">{{ $approvedLoans }}</h2>
        </div> 
    </div>
    <div class="flex items-center gap-4 bg-light7 dark:bg-dark7 text-orange-500 rounded-md border border-light5 dark:border-dark5 py-4 px-5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="50" height="50"><rect width="256" height="256" fill="none"/><line x1="40" y1="64" x2="216" y2="64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="40" y1="128" x2="136" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="40" y1="192" x2="136" y2="192" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polygon points="240 160 176 200 176 120 240 160" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
        <div class="flex flex-col">
            <p class="text-light3 dark:text-dark3 text-[17px] font-semibold font-raleway">Antrian Aktif</p>
            <h2 class="text-3xl font-semibold">{{ $pendingLoans }}</h2>
        </div> 
    </div>
</section>

<section class="bg-light7 dark:bg-dark7 rounded-md border border-light5 dark:border-dark5 p-6 mb-4">
    <div class="flex justify-between">
        <h3 class="text-lg font-semibold text-light3 dark:text-dark3 font-raleway mb-4">Statistik Peminjaman</h3>
        <a href="{{ route('admin.dashboard.export-pdf') }}" class="h-fit cursor-pointer px-6 py-2 bg-green-500 text-light7 rounded-md hover:bg-green-600 transition-all duration-200 font-raleway font-semibold">Download Rekap PDF</a>
    </div>
    <div class="h-[300px] bg-light6 dark:bg-dark6 flex justify-center items-center mt-6 relative">
        <canvas id="loanChart" class="w-full h-full"></canvas>
    </div>
</section>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('loanChart').getContext('2d');

// Gradient seperti grafik trading
const gradient = ctx.createLinearGradient(0, 0, 0, 300);
gradient.addColorStop(0, 'rgba(54, 162, 235, 0.4)');
gradient.addColorStop(1, 'rgba(54, 162, 235, 0.05)');

const loanChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: {!! json_encode($loansPerMonth->pluck('month')) !!},
        datasets: [{
            label: 'Peminjaman per Bulan',
            data: {!! json_encode($loansPerMonth->pluck('total')) !!},
            fill: true,
            backgroundColor: gradient,
            borderColor: 'rgba(54, 162, 235, 1)',
            pointBackgroundColor: '#1d4ed8',
            pointBorderColor: '#1d4ed8',
            pointRadius: 5,
            pointHoverRadius: 7,
            tension: 0.45
        }]
    },
    options: {
        responsive: true,
        interaction: {
            mode: 'index',
            intersect: false,
        },
        plugins: {
            legend: {
                labels: {
                    color: '#000000', // Warna hitam untuk label
                    font: {
                        family: 'Raleway',
                        size: 14
                    },
                    usePointStyle: true, // Gunakan bentuk bulat
                    pointStyle: 'circle', // Bentuk lingkaran
                    boxWidth: 10, // Lebar lingkaran
                    boxHeight: 10, // Tinggi lingkaran
                    borderRadius: 50 // Pastikan bentuknya bulat sempurna
                }
            },
            tooltip: {
                backgroundColor: '#1e293b',
                titleColor: '#f8fafc',
                bodyColor: '#e2e8f0',
                padding: 12,
                borderColor: '#334155',
                borderWidth: 1,
                cornerRadius: 6
            }
        },
        scales: {
            x: {
                ticks: {
                    color: '#94a3b8',
                    font: {
                        family: 'Raleway'
                    }
                },
                grid: {
                    color: 'rgba(148, 163, 184, 0.2)'
                }
            },
            y: {
                beginAtZero: true,
                ticks: {
                    stepSize: 1,
                    color: '#94a3b8',
                    font: {
                        family: 'Raleway'
                    }
                },
                grid: {
                    color: 'rgba(148, 163, 184, 0.2)'
                }
            }
        }
    }
});
</script>
@endpush

<!-- Peminjaman Terbaru -->
<section class="bg-light7 dark:bg-dark7 rounded-md border border-light5 dark:border-dark5 p-6">
    <h3 class="text-lg font-semibold text-light3 dark:text-dark3 font-raleway mb-4">Peminjaman Terbaru</h3>
    <div class="w-full overflow-x-auto">
        <div class="min-w-[1000px]">
            <table class="w-full table-auto text-[15px] whitespace-nowrap overflow-hidden">
                <thead>
                    <tr class="bg-light8 text-light1 dark:bg-dark8 dark:text-dark1">
                        <th class="px-4 py-2.5 text-left">No</th>
                        <th class="px-4 py-2.5 text-left">Judul Buku</th>
                        <th class="px-4 py-2.5 text-left">Nama Mahasiswa</th>
                        <th class="px-4 py-2.5 text-left">Tgl Pinjam</th>
                        <th class="px-4 py-2.5 text-left">Tgl Kembali</th>
                        <th class="px-4 py-2.5 text-left">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($latestLoans as $i => $loan)
                    <tr class="border-b border-light5 dark:border-dark5">
                        <td class="px-4 py-2.5">{{ $i+1 }}</td>
                        <td class="px-4 py-2.5">{{ $loan->book->title ?? '-' }}</td>
                        <td class="px-4 py-2.5">{{ $loan->user->name ?? '-' }}</td>
                        <td class="px-4 py-2.5">{{ \Carbon\Carbon::parse($loan->tanggal_pinjam)->translatedFormat('d M Y') }}</td>
                        <td class="px-4 py-2.5">{{ \Carbon\Carbon::parse($loan->tanggal_kembali)->translatedFormat('d M Y') }}</td>
                        @php
                            $status = strtolower($loan->status);
                        @endphp
                        <td class="px-4 py-2.5">
                            @if($status === 'dipinjam')
                                <span class="text-[13px] rounded-md py-1 px-3 bg-yellow-100 text-yellow-700 dark:bg-yellow-900 dark:text-yellow-100">
                                    Dipinjam
                                </span>
                            @elseif($status === 'dikembalikan' || $status === 'kembali')
                                <span class="text-[13px] rounded-md py-1 px-3 bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-100">
                                    Dikembalikan
                                </span>
                            @elseif($status === 'terlambat')
                                <span class="text-[13px] rounded-md py-1 px-3 bg-red-100 text-red-700 dark:bg-red-900 dark:text-red-100">
                                    Terlambat
                                </span>
                            @elseif($status === 'ditolak')
                                <span class="text-[13px] rounded-md py-1 px-3 bg-red-100 text-red-700 dark:bg-red-900 dark:text-red-100">
                                    Ditolak
                                </span>
                            @else
                                <span class="text-[13px] rounded-md py-1 px-3 bg-gray-100 text-gray-700 dark:bg-gray-900 dark:text-gray-100">
                                    {{ ucfirst($loan->status) }}
                                </span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection
