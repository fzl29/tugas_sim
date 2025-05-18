@extends('layouts.master-admin')

@section('title', 'SiPus Digital - Manage Antrian')

@section('content')

@include('components.title', ['title' => 'Manage Antrian', 'subtitle' => 'Kelola Antrian'])

<section class="p-6 rounded-md bg-light7 dark:bg-dark7 text-light4 dark:text-dark4 border border-light5 dark:border-dark5">
    <div class="w-full overflow-x-auto">
        <div class="min-w-[1000px]">
            <table class="w-full table-auto text-[15px] whitespace-nowrap overflow-hidden">
                <thead class="bg-light8 dark:bg-dark8 text-light1 dark:text-dark1 ">
                    <tr>
                        <th class="px-4 py-2.5 text-left">No</th>
                        <th class="px-4 py-2.5 text-left">No Antrian</th>
                        <th class="px-4 py-2.5 text-left">Nama Mahasiswa</th>
                        <th class="px-4 py-2.5 text-left">Judul Buku</th>
                        <th class="px-4 py-2.5 text-left">Antrian</th>
                        <th class="px-4 py-2.5 text-left">Pengembalian</th>
                        <th class="px-4 py-2.5 text-left">Status</th>
                        <th class="px-4 py-2.5 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-light5 dark:border-dark5">
                        <td class="px-4 py-2.5">1</td>
                        <td class="px-4 py-2.5">BK-0001</td>
                        <td class="px-4 py-2.5">Ahmad Fauzi</td>
                        <td class="px-4 py-2.5">Pengantar Teknologi Informasi</td>
                        <td class="px-4 py-2.5">25 April 2025</td>
                        <td class="px-4 py-2.5">27 April 2025</td>
                        <td class="px-4 py-2.5"><span class="text-[13px] rounded-md py-1 px-3 bg-yellow-100 text-yellow-700 dark:bg-yellow-900 dark:text-yellow-100">Menunggu</span></td>
                        <td class="px-4 py-2.5">
                            <button class="transition-all duration-200 cursor-pointer bg-light1 hover:bg-light2 text-light7 px-3 py-1 rounded-md text-[13px] mr-1">Setujui</button>
                            <button class="transition-all duration-200 cursor-pointer bg-red-500 hover:bg-red-600 text-light7 px-3 py-1 rounded-md text-[13px]">Tolak</button> 
                        </td>
                    </tr>
                    <tr class="border-b border-light5 dark:border-dark5">
                        <td class="px-4 py-2.5">2</td>
                        <td class="px-4 py-2.5">BK-0002</td>
                        <td class="px-4 py-2.5">Ahmad Fauzi</td>
                        <td class="px-4 py-2.5">Pengantar Teknologi Informasi</td>
                        <td class="px-4 py-2.5">25 April 2025</td>
                        <td class="px-4 py-2.5">27 April 2025</td>
                        <td class="px-4 py-2.5"><span class="text-[13px] rounded-md py-1 px-3 bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-100">Disetujui</span></td>
                        <td class="px-4 py-2.5">
                            <button class="transition-all duration-200 cursor-pointer bg-light1 hover:bg-light2 text-light7 px-3 py-1 rounded-md text-[13px] mr-1 hidden">Setujui</button>
                            <button class="transition-all duration-200 cursor-pointer bg-red-500 hover:bg-red-600 text-light7 px-3 py-1 rounded-md text-[13px] hidden">Tolak</button> 
                        </td>
                    </tr>
                    <tr class="border-b border-light5 dark:border-dark5">
                        <td class="px-4 py-2.5">3</td>
                        <td class="px-4 py-2.5">BK-0003</td>
                        <td class="px-4 py-2.5">Ahmad Fauzi</td>
                        <td class="px-4 py-2.5">Pengantar Teknologi Informasi</td>
                        <td class="px-4 py-2.5">25 April 2025</td>
                        <td class="px-4 py-2.5">27 April 2025</td>
                        <td class="px-4 py-2.5"><span class="text-[13px] rounded-md py-1 px-3 bg-red-100 text-red-700 dark:bg-red-900 dark:text-red-100">Ditolak</span></td>
                        <td class="px-4 py-2.5">
                            <button class="transition-all duration-200 cursor-pointer bg-light1 hover:bg-light2 text-light7 px-3 py-1 rounded-md text-[13px] mr-1 hidden">Setujui</button>
                            <button class="transition-all duration-200 cursor-pointer bg-red-500 hover:bg-red-600 text-light7 px-3 py-1 rounded-md text-[13px] hidden">Tolak</button> 
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection