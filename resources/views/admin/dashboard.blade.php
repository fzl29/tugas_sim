@extends('layouts.master-admin')

@section('title', 'SiPus Digital - Dashboard')

@section('content')

@include('components.title', ['title' => 'Beranda', 'subtitle' => 'Halaman Utama'])

<section class="grid grid-cols-4 gap-4 mb-4">
    <div class="flex items-center gap-4 bg-light7 dark:bg-dark7 text-light1 dark:text-dark1 rounded-md border border-light5 dark:border-dark5 py-4 px-5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="50" height="50"><rect width="256" height="256" fill="none"/><circle cx="84" cy="108" r="52" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M10.23,200a88,88,0,0,1,147.54,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M172,160a87.93,87.93,0,0,1,73.77,40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M152.69,59.7A52,52,0,1,1,172,160" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
        <div class="flex flex-col">
            <p class="text-light3 dark:text-dark3 text-[17px] font-semibold font-raleway">Total Pengguna</p>
            <h2 class="text-3xl font-semibold">130</h2>
        </div> 
    </div>
    <div class="flex items-center gap-4 bg-light7 dark:bg-dark7 text-green-500 rounded-md border border-light5 dark:border-dark5 py-4 px-5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="50" height="50"><rect width="256" height="256" fill="none"/><rect x="48" y="40" width="64" height="176" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M217.67,205.77l-46.81,10a8,8,0,0,1-9.5-6.21L128.18,51.8a8.07,8.07,0,0,1,6.15-9.57l46.81-10a8,8,0,0,1,9.5,6.21L223.82,196.2A8.07,8.07,0,0,1,217.67,205.77Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="48" y1="72" x2="112" y2="72" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="48" y1="184" x2="112" y2="184" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="133.16" y1="75.48" x2="195.61" y2="62.06" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="139.79" y1="107.04" x2="202.25" y2="93.62" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="156.39" y1="185.94" x2="218.84" y2="172.52" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
        <div class="flex flex-col">
            <p class="text-light3 dark:text-dark3 text-[17px] font-semibold font-raleway">Total Buku</p>
            <h2 class="text-3xl font-semibold">330</h2>
        </div> 
    </div>
    <div class="flex items-center gap-4 bg-light7 dark:bg-dark7 text-red-500 rounded-md border border-light5 dark:border-dark5 py-4 px-5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="50" height="50"><rect width="256" height="256" fill="none"/><polyline points="128 80 128 128 168 152" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="184 104 224 104 224 64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M188.4,192a88,88,0,1,1,1.83-126.23C202,77.69,211.72,88.93,224,104" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
        <div class="flex flex-col">
            <p class="text-light3 dark:text-dark3 text-[17px] font-semibold font-raleway">Dipinjam Saat Ini</p>
            <h2 class="text-3xl font-semibold">45</h2>
        </div> 
    </div>
    <div class="flex items-center gap-4 bg-light7 dark:bg-dark7 text-orange-500 rounded-md border border-light5 dark:border-dark5 py-4 px-5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="50" height="50"><rect width="256" height="256" fill="none"/><line x1="40" y1="64" x2="216" y2="64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="40" y1="128" x2="136" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="40" y1="192" x2="136" y2="192" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polygon points="240 160 176 200 176 120 240 160" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
        <div class="flex flex-col">
            <p class="text-light3 dark:text-dark3 text-[17px] font-semibold font-raleway">Antrian Aktif</p>
            <h2 class="text-3xl font-semibold">10</h2>
        </div> 
    </div>
</section>

<section class="bg-light7 dark:bg-dark7 rounded-md border border-light5 dark:border-dark5 p-6 mb-4">
    <h3 class="text-lg font-semibold text-light3 dark:text-dark3 font-raleway mb-4">Statistik Peminjaman</h3>
    <!-- Grafik dapat menggunakan chart.js atau Apexchart.js library lain -->
    <div class="h-[300px] bg-light6 dark:bg-dark6 flex justify-center items-center">
        <p class="text-light4 dark:text-dark4">Grafik Peminjaman per Minggu/Bulan (Gunakan Chart.js) dan ada tombol untuk rekapannya berupa PDF</p>
    </div>
</section>

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
                    <tr class="border-b border-light5 dark:border-dark5">
                        <td class="px-4 py-2.5">1</td>
                        <td class="px-4 py-2.5">Algoritma & Struktur Data</td>
                        <td class="px-4 py-2.5">Agus Saputra</td>
                        <td class="px-4 py-2.5">04 Mei 2025</td>
                        <td class="px-4 py-2.5">06 Mei 2025</td>
                        <td class="px-4 py-2.5"><span class="text-yellow-500">Dipinjam</span></td>
                    </tr>
                    <tr class="border-b border-light5 dark:border-dark5">
                        <td class="px-4 py-2.5">2</td>
                        <td class="px-4 py-2.5">Algoritma & Struktur Data</td>
                        <td class="px-4 py-2.5">Agus Saputra</td>
                        <td class="px-4 py-2.5">04 Mei 2025</td>
                        <td class="px-4 py-2.5">06 Mei 2025</td>
                        <td class="px-4 py-2.5"><span class="text-red-500">Terlambat</span></td>
                    </tr>
                    <tr class="border-b border-light5 dark:border-dark5">
                        <td class="px-4 py-2.5">3</td>
                        <td class="px-4 py-2.5">Algoritma & Struktur Data</td>
                        <td class="px-4 py-2.5">Agus Saputra</td>
                        <td class="px-4 py-2.5">04 Mei 2025</td>
                        <td class="px-4 py-2.5">06 Mei 2025</td>
                        <td class="px-4 py-2.5"><span class="text-green-500">Dikembalikan</span></td>
                    </tr>
                    <tr class="border-b border-light5 dark:border-dark5">
                        <td class="px-4 py-2.5">4</td>
                        <td class="px-4 py-2.5">Algoritma & Struktur Data</td>
                        <td class="px-4 py-2.5">Agus Saputra</td>
                        <td class="px-4 py-2.5">04 Mei 2025</td>
                        <td class="px-4 py-2.5">06 Mei 2025</td>
                        <td class="px-4 py-2.5"><span class="text-yellow-500">Dipinjam</span></td>
                    </tr>
                    <tr class="border-b border-light5 dark:border-dark5">
                        <td class="px-4 py-2.5">5</td>
                        <td class="px-4 py-2.5">Algoritma & Struktur Data</td>
                        <td class="px-4 py-2.5">Agus Saputra</td>
                        <td class="px-4 py-2.5">04 Mei 2025</td>
                        <td class="px-4 py-2.5">06 Mei 2025</td>
                        <td class="px-4 py-2.5"><span class="text-yellow-500">Dipinjam</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection
