@extends('layouts.master-admin')

@section('title', 'SiPus Digital - Manage Antrian')

@section('content')

@include('components.title', ['title' => 'Manage Antrian', 'subtitle' => 'Kelola Antrian'])

<section class="px-6 pb-6 pt-1 rounded-md bg-light7 dark:bg-dark7 text-light4 dark:text-dark4 border border-light5 dark:border-dark5">
    @include('components.alert')
    <div class="w-full overflow-x-auto mt-5">
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
                    @forelse($queues as $i => $queue)
                    <tr class="border-b border-light5 dark:border-dark5">
                        <td class="px-4 py-2.5">{{ $i+1 }}</td>
                        <td class="px-4 py-2.5">{{ $queue->queue_number }}</td>
                        <td class="px-4 py-2.5">{{ $queue->user->name }}</td>
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
                            <form action="{{ route('admin.queue.approve', $queue->id) }}" method="POST" style="display:inline-block;">
                                @csrf @method('PUT')
                                <button type="submit" name="action" value="approve" class="transition-all duration-200 cursor-pointer bg-light1 hover:bg-light2 text-light7 px-3 py-1 rounded-md text-[13px] mr-1">Setujui</button>
                            </form>
                            <form action="{{ route('admin.queue.reject', $queue->id) }}" method="POST" style="display:inline-block;">
                                @csrf @method('PUT')
                                <button type="submit" name="action" value="reject" class="transition-all duration-200 cursor-pointer bg-red-500 hover:bg-red-600 text-light7 px-3 py-1 rounded-md text-[13px]">Tolak</button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr class="border-b border-light5 dark:border-dark5">
                        <td colspan="8" class="px-4 py-4 text-center">Tidak ada antrian pinjaman</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection