@extends('layouts.master-user')

@section('title', 'SiPus Digital - Antrian')

@section('content')

@include('components.title', ['title' => 'Antrian', 'subtitle' => 'Antrian Pinjaman'])

<section class="px-6 pb-6 pt-1 rounded-md bg-light7 dark:bg-dark7 text-light4 dark:text-dark4 border border-light5 dark:border-dark5">
    @include('components.alert')
    <div id="content-default" class="w-full overflow-x-auto mt-5">
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
                        <th class="px-4 py-2.5 text-left">Aksi</th>
                        <th class="px-4 py-2.5 text-left">Cetak Antrian</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($queues as $i => $queue)
                    <tr class="border-b border-light5 dark:border-dark5">
                        <td class="px-4 py-2.5">{{ $i+1 }}</td>
                        <td class="px-4 py-2.5">{{ $queue->queue_number }}</td>
                        <td class="px-4 py-2.5">{{ $queue->book->title }}</td>
                        <td class="px-4 py-2.5">{{ \Carbon\Carbon::parse($queue->loan_date)->format('d M Y') }}</td>
                        <td class="px-4 py-2.5">{{ \Carbon\Carbon::parse($queue->return_date)->format('d M Y') }}</td>
                        <td class="px-4 py-2.5">
                            @if($queue->status == 'menunggu')
                                <span class="text-[13px] rounded-md py-1 px-3 bg-yellow-100 text-yellow-700 dark:bg-yellow-900 dark:text-yellow-100">Menunggu</span>
                            @elseif($queue->status == 'disetujui')
                                <span class="text-[13px] rounded-md py-1 px-3 bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-100">Disetujui</span>
                            @else
                                <span class="text-[13px] rounded-md py-1 px-3 bg-red-100 text-red-700 dark:bg-red-900 dark:text-red-100">Ditolak</span>
                            @endif
                        </td>
                        <td class="px-4 py-2.5">
                        @if($queue->status == 'menunggu')
                            <form action="{{ route('user.queue.cancel', $queue->id) }}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" class="transition-all duration-200 cursor-pointer bg-red-500 hover:bg-red-600 text-light7 px-3 py-1 rounded-md text-[13px]">Batalkan</button>
                            </form>
                        @endif
                        </td>
                        <td class="px-4 py-2.5">
                        @if($queue->status == 'disetujui')
                            <a href="{{ route('user.queue.print', $queue->id) }}" class="transition-all duration-200 cursor-pointer bg-green-600 hover:bg-green-700 text-light7 px-3 py-1 rounded-md text-[13px]">Cetak PDF</a>
                        @endif
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="8">Tidak ada antrian</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection