@extends('layouts.master-admin')

@section('title', 'SiPus Digital - Manage Riwayat')

@section('content')

@include('components.title', ['title' => 'Manage Riwayat', 'subtitle' => 'Riwayat Pinjaman'])

<section class="px-6 pb-6 pt-1 rounded-md bg-light7 dark:bg-dark7 text-light4 dark:text-dark4 border border-light5 dark:border-dark5">
    @include('components.alert')
    <div class="mb-5 flex justify-between items-center text-[15px] mt-4">
        <div class="relative w-[300px]">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-light5 dark:text-dark5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="w-5 h-5"><circle cx="112" cy="112" r="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="168.57" y1="168.57" x2="224" y2="224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
            </span>
            <input type="text" placeholder="Cari nama atau judul buku..." class="w-full pl-10 pr-4 py-2 bg-transparent border-0 border-b border-light5 dark:border-dark5 focus:border-light1 dark:focus:border-dark1 focus:outline-none placeholder-light5 dark:placeholder-dark5">
        </div>

        <div class="relative">
            <select id="is_available" name="is_available" class="w-full py-2.5 px-4 pr-10 rounded-md border border-light5 dark:border-dark5 text-light3 dark:text-dark3 bg-light7 dark:bg-dark7 appearance-none focus:outline-none focus:border-light1 dark:focus:border-dark1 hover:border-light1 dark:hover:border-dark1 transition-all duration-200">
                <option value="0">Semua Status</option>
                <option value="1">Dikembalikan</option>
                <option value="2">Dipinjam</option>
                <option value="3">Terlambat</option>
            </select>
            <div class="pointer-events-none absolute right-3 top-[23px] transform -translate-y-1/2 hover:text-light1 dark:hover:text-dark1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </div>
        </div>
    </div>

    <div class="w-full overflow-x-auto">
        <div class="min-w-[1000px]">
            <table class="w-full table-auto text-[15px] whitespace-nowrap overflow-hidden">
                <thead class="bg-light8 dark:bg-dark8 text-light1 dark:text-dark1">
                    <tr>
                        <th class="px-4 py-2.5 text-left">No</th>
                        <th class="px-4 py-2.5 text-left">No Antrian</th>
                        <th class="px-4 py-2.5 text-left">Nama Mahasiswa</th>
                        <th class="px-4 py-2.5 text-left">Judul Buku</th>
                        <th class="px-4 py-2.5 text-left">Tgl Pinjam</th>
                        <th class="px-4 py-2.5 text-left">Tgl Kembali</th>
                        <th class="px-4 py-2.5 text-left">Status</th>
                        <th class="px-4 py-2.5 text-left">Denda</th>
                        <th class="px-4 py-2.5 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($loans as $i => $loan)
                        <tr class="border-b border-light5 dark:border-dark5">
                            <td class="px-4 py-2.5">{{ $i+1 }}</td>
                            <td class="px-4 py-2.5">{{ $loan->queue->queue_number ?? '-' }}</td>
                            <td class="px-4 py-2.5">{{ $loan->user->name ?? '-' }}</td>
                            <td class="px-4 py-2.5">{{ $loan->book->title ?? '-' }}</td>
                            <td class="px-4 py-2.5">{{ \Carbon\Carbon::parse($loan->loan_date)->format('d M Y') }}</td>
                            <td class="px-4 py-2.5">{{ \Carbon\Carbon::parse($loan->return_date)->format('d M Y') }}</td>
                            <td class="px-4 py-2.5">
                                @php
                                    $status = $loan->status == 'Dipinjam' || $loan->status == 'disetujui' ? 'Dipinjam' : (
                                        $loan->status == 'Dikembalikan' ? 'Dikembalikan' : (
                                        $loan->status == 'Terlambat' ? 'Terlambat' : $loan->status
                                    ));
                                @endphp
                                @if($status == 'Dipinjam')
                                    <span class="text-[13px] rounded-md py-1 px-3 bg-yellow-100 text-yellow-700 dark:bg-yellow-900 dark:text-yellow-100">Dipinjam</span>
                                @elseif($status == 'Dikembalikan')
                                    <span class="text-[13px] rounded-md py-1 px-3 bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-100">Dikembalikan</span>
                                @elseif($status == 'Terlambat')
                                    <span class="text-[13px] rounded-md py-1 px-3 bg-red-100 text-red-700 dark:bg-red-900 dark:text-red-100">Terlambat</span>
                                @elseif(strtolower($status) == 'menunggu')
                                    <span class="text-[13px] rounded-md py-1 px-3 bg-yellow-100 text-yellow-700 dark:bg-yellow-900 dark:text-yellow-100">
                                        {{ ucfirst($status) }}
                                    </span>
                                @else
                                    <span class="text-[13px] rounded-md py-1 px-3 bg-red-100 text-red-700 dark:bg-red-900 dark:text-red-100">
                                        {{ ucfirst($status) }}
                                    </span>
                                @endif
                            </td>
                            <td class="px-4 py-2.5">Rp {{ number_format($loan->fine ?? 0, 0, ',', '.') }}</td>
                            <td class="px-4 py-2.5">
                                @if(!in_array($status, ['Dikembalikan', 'ditolak', 'Ditolak']))
                                    <form action="{{ route('admin.confirm-return', $loan->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        <button name="action" value="sudah" class="transition-all duration-200 cursor-pointer bg-green-600 hover:bg-green-700 text-light7 px-3 py-1 rounded-md text-[13px] mr-1">Sudah</button>
                                    </form>
                                    <form action="{{ route('admin.confirm-return', $loan->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        <button name="action" value="belum" class="transition-all duration-200 cursor-pointer bg-red-600 hover:bg-red-700 text-light7 px-3 py-1 rounded-md text-[13px]">Belum</button>
                                    </form>
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
