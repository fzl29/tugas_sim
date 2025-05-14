@extends('layouts.master-admin')

@section('title', 'SiPus Digital - Manage Buku')

@section('content')
<x-title title="Manage Buku" subtitle="Kelola Buku" />

<section class="px-6 pb-6 rounded-md bg-light7 dark:bg-dark7 text-light4 dark:text-dark4 border border-light5 dark:border-dark5">
    
    @include('components.alert')
    
    <x-tab-switcher default="Data Buku" change="Tambah Buku" />
    
    <div id="content-default" class="w-full overflow-x-auto mt-6">
        <div class="min-w-[1000px]">
            <table class="w-full table-auto text-[15px]">
                <thead class="bg-light8 dark:bg-dark8 text-light1 dark:text-dark1 ">
                    <tr>
                        <th class="px-4 py-2.5 text-left">No</th>
                        <th class="px-4 py-2.5 text-left">Judul Buku</th>
                        <th class="px-4 py-2.5 text-left">Penulis</th>
                        <th class="px-4 py-2.5 text-left">Kategori</th>
                        <th class="px-4 py-2.5 text-left">Status</th>
                        <th class="px-4 py-2.5 text-left">Cover</th>
                        <th class="px-4 py-2.5 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($books as $index => $book)
                    <tr class="border-b border-light5 dark:border-dark5">
                        <td class="px-4 py-2.5">{{ $index + 1 }}</td>
                        <td class="px-4 py-2.5">{{ $book->title }}</td>
                        <td class="px-4 py-2.5">{{ $book->author }}</td>
                        <td class="px-4 py-2.5">{{ $book->category->name }}</td>
                        <td class="px-4 py-2.5">
                            @if($book->is_available)
                                <span class="text-green-500">Tersedia</span>
                            @else
                                <span class="text-red-500">Tidak Tersedia</span>
                            @endif
                        </td>
                        <td class="px-4 py-2.5">
                            @if($book->cover)
                                <img src="{{ asset('storage/' . $book->cover) }}" alt="{{ $book->title }}" class="w-10 h-15">
                            @else
                                <span class="text-light4 dark:text-dark4">No Cover</span>
                            @endif
                        </td>
                        <td class="px-4 py-2.5">
                            <a href="{{ route('admin.books.edit', $book->id) }}" class="transition-all duration-200 cursor-pointer bg-orange-500 hover:bg-orange-600 text-light7 px-3 py-[5px] rounded-md text-[13px] mr-1">
                                Edit
                            </a>
                            <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')" class="transition-all duration-200 cursor-pointer bg-red-500 hover:bg-red-600 text-light7 px-3 py-1 rounded-md text-[13px]">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr class="border-b border-light5 dark:border-dark5">
                        <td colspan="7" class="px-4 py-4 text-center">Tidak ada data buku tersedia</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div id="content-change" class="hidden mt-6 px-1">
        <form method="POST" action="{{ route('admin.books.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-2 gap-y-4 gap-x-5 text-[15px] mb-6">
                <x-form.input-field name="title" label="Judul Buku" place="Masukkan judul buku" :value="old('title')" />
                
                <x-form.input-field name="author" label="Penulis Buku" place="Masukkan penulis buku" :value="old('author')" />
                
                <x-form.input-select name="is_available" place="Pilih Status" label="Status Buku" :selected="old('is_available', 1)" :options="[1 => 'Tersedia', 0 => 'Tidak Tersedia']"/>
                
                <x-form.input-select name="category_id" place="Pilih Kategori" label="Kategori Buku" :selected="old('category_id')" :options="$categories->pluck('name', 'id')->toArray()"/>
                
                <x-form.input-file name="cover" label="Cover Buku" />
            </div>

            <x-form.button-submit name="Tambahkan Buku Baru" />
        </form>
    </div>
</section>

@endsection