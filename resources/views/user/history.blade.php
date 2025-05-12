@extends('layouts.master-user')

@section('title', 'SiPus Digital - Riwayat')

@section('content')

@include('components.title', ['title' => 'Riwayat', 'subtitle' => 'Riwayat Pinjaman'])

<section class="p-6 rounded-md bg-light7 dark:bg-dark7 text-light4 dark:text-dark4 border border-light5 dark:border-dark5">
    <div id="content-default" class="w-full overflow-x-auto mt-6">
        <div class="min-w-[1000px]">
            <table class="w-full table-auto text-[15px]">
                <thead class="bg-light8 dark:bg-dark8 text-light1 dark:text-dark1 ">
                    <tr>
                        <th class="px-4 py-2.5 text-left">No</th>
                        <th class="px-4 py-2.5 text-left">No Antrian</th>
                        <th class="px-4 py-2.5 text-left">Judul Buku</th>
                        <th class="px-4 py-2.5 text-left">Tanggal Pinjam</th>
                        <th class="px-4 py-2.5 text-left">Tanggal Kembali</th>
                        <th class="px-4 py-2.5 text-left">Status</th>
                        <th class="px-4 py-2.5 text-left">Denda</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Data dummy sementara --}}
                    <tr class="border-b border-light5 dark:border-dark5">
                        <td class="px-4 py-2.5">1</td>
                        <td class="px-4 py-2.5">BK-0001</td>
                        <td class="px-4 py-2.5">Star Wars the Of Legends</td>
                        <td class="px-4 py-2.5">25 April 2025</td>
                        <td class="px-4 py-2.5">27 April 2025</td>
                        <td class="px-4 py-2.5"><span class="text-[13px] rounded-md py-1 px-3 bg-red-100 text-red-700 dark:bg-red-900 dark:text-red-100">Terlambat</span></td>
                        <td class="px-4 py-2.5">Rp 10.000</td>
                    </tr>
                    <tr class="border-b border-light5 dark:border-dark5">
                        <td class="px-4 py-2.5">2</td>
                        <td class="px-4 py-2.5">BK-0001</td>
                        <td class="px-4 py-2.5">Star Wars the Of Legends</td>
                        <td class="px-4 py-2.5">25 April 2025</td>
                        <td class="px-4 py-2.5">27 April 2025</td>
                        <td class="px-4 py-2.5"><span class="text-[13px] rounded-md py-1 px-3 bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-100">Dikembalikan</span></td>
                        <td class="px-4 py-2.5">Rp 0</td>
                    </tr>
                    <tr class="border-b border-light5 dark:border-dark5">
                        <td class="px-4 py-2.5">3</td>
                        <td class="px-4 py-2.5">BK-0001</td>
                        <td class="px-4 py-2.5">Star Wars the Of Legends</td>
                        <td class="px-4 py-2.5">25 April 2025</td>
                        <td class="px-4 py-2.5">27 April 2025</td>
                        <td class="px-4 py-2.5"><span class="text-[13px] rounded-md py-1 px-3 bg-yellow-100 text-yellow-700 dark:bg-yellow-900 dark:text-yellow-100">Dipinjam</span></td>
                        <td class="px-4 py-2.5">Rp 0</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection