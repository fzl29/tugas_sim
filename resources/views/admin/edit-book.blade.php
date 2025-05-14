@extends('layouts.master-admin')

@section('title', 'SiPus Digital - Edit Buku')

@section('content')
<x-title title="Edit Buku" subtitle="Perbarui Data Buku" />

<section class="px-6 pt-1.5 pb-6 rounded-md bg-light7 dark:bg-dark7 text-light4 dark:text-dark4 border border-light5 dark:border-dark5">
    
    @include('components.alert')
    
    <div class="flex justify-between mb-3">
        <h2 class="text-xl font-semibold font-raleway">Edit Buku: {{ $book->title }}</h2>
        <a href="{{ route('admin.manage-books') }}" class="transition-all duration-200 cursor-pointer bg-red-500 hover:bg-red-600 text-light7 px-5 py-2 rounded-md text-[15px]">
            Cancel
        </a>
    </div>
    
    <div>
        <form method="POST" action="{{ route('admin.books.update', $book->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="grid grid-cols-2 gap-y-4 gap-x-5 text-[15px] mb-6">
                <x-form.input-field name="title" label="Judul Buku" place="Masukkan judul buku" :value="old('title', $book->title)" required />
                
                <x-form.input-field name="author" label="Penulis Buku" place="Masukkan penulis buku" :value="old('author', $book->author)" required />
                
                <x-form.input-select name="is_available" place="Pilih Status" label="Status Buku" :selected="old('is_available', $book->is_available)" :options="[1 => 'Tersedia', 0 => 'Tidak Tersedia']" required />
                
                <x-form.input-select name="category_id" place="Pilih Kategori" label="Kategori Buku" :selected="old('category_id', $book->category_id)" :options="$categories->pluck('name', 'id')->toArray()" required />
                
                <x-form.input-file name="cover" label="Cover Buku" />
                    
                @if($book->cover)
                <div>
                    <p class="mb-1 font-semibold">Cover Saat Ini:</p>
                    <img src="{{ asset('storage/' . $book->cover) }}" alt="{{ $book->title }}" class="w-30 h-44 border border-gray-200 rounded">
                </div>
                @endif
            </div>

            <x-form.button-submit name="Perbarui Buku" />
        </form>
    </div>
</section>
@endsection