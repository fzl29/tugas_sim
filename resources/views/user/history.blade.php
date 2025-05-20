@extends('layouts.master-user')

@section('title', 'SiPus Digital - Riwayat')

@section('content')

@include('components.title', ['title' => 'Riwayat', 'subtitle' => 'Riwayat Pinjaman'])

<section class="p-6 rounded-md bg-light7 dark:bg-dark7 text-light4 dark:text-dark4 border border-light5 dark:border-dark5">
    <div id="content-default" class="w-full overflow-x-auto">
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
                    @forelse($loans as $i => $loan)
                        <tr class="border-b border-light5 dark:border-dark5">
                            <td class="px-4 py-2.5">{{ $i+1 }}</td>
                            <td class="px-4 py-2.5">{{ $loan->queue->queue_number ?? '-' }}</td>
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
                        </tr>
                        @empty
                        <tr class="border-b border-light5 dark:border-dark5">
                            <td colspan="8" class="px-4 py-4 text-center">Tidak ada riwayat peminjaman</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection