@extends('layouts.master-user')

@section('title', 'SiPus Digital - Pinjaman Buku')

@section('content')

@include('components.title', ['title' => 'Pinjaman Buku', 'subtitle' => 'Form Pinjaman Buku'])

<section class="p-6 mb-4 rounded-md bg-light7 dark:bg-dark7 text-light4 dark:text-dark4 border border-light5 dark:border-dark5">
    <div class="mb-8 relative flex items-center justify-center">
        <h3 class="font-semibold font-raleway text-[19px] text-light3 dark:text-dark3">Buku yang Anda Pilih</h3> 
        <a href="{{ route('user.books') }}" class="absolute right-0 px-6 py-2 bg-red-500 text-light7 rounded-md hover:bg-red-600 transition-all duration-200">Cancel</a>
    </div>
    
    <div id="selected-books-list" class="grid grid-cols-3 gap-5">
        @forelse($selectedBooks as $book)
            <div class="flex gap-3 p-3 mb-3 rounded-md border border-light5 dark:border-dark5">
                <img src="{{ $book->cover ? asset('storage/'.$book->cover) : asset('assets/images/default-book.jpg') }}" class="w-28 h-40 object-cover rounded-md" loading="lazy" />
                <div class="flex flex-col space-y-1">
                    <h4 class="font-semibold font-raleway text-[16px] leading-5 mb-3 text-light3 dark:text-dark3">{{ $book->title }}</h4>
                    <p class="text-[15px] text-light4 dark:text-dark4">Penulis: {{ $book->author }}</p>
                    <p class="text-[15px] text-light4 dark:text-dark4">Kategori: {{ $book->category->name ?? '-' }}</p>
                    <span class="text-green-600 text-[14px] mt-auto">{{ $book->is_available ? '✅Tersedia' : '❌Tidak Tersedia' }}</span>
                </div>
            </div>
        @empty
            <p>Belum ada buku yang dipilih.</p>
        @endforelse
    </div>

    <hr class="my-8 text-light5 dark:text-dark5">

    <form method="POST" action="{{ route('user.book-loans.submit') }}" id="loan-form">
        @csrf
        @foreach($selectedBooks as $book)
            <input type="hidden" name="book_id[]" value="{{ $book->id }}">
        @endforeach
        <div class="grid grid-cols-2 gap-5">
            <div>
                <label for="duration" class="block mb-1.5 font-semibold">Lama Peminjaman (hari)</label>
                <input type="number" id="duration" name="duration" min="{{ $minLoanDays }}" max="{{ $maxLoanDays }}" value="{{ $loanDefaultDays }}" class="w-full py-2.5 px-4 rounded-md border border-light5 dark:border-dark5 text-light3 dark:text-dark3 focus:outline-none focus:border-light1 dark:focus:border-dark1 hover:border-light1 dark:hover:border-dark1 transition-all duration-200" required>
                <p class="text-sm mt-2">Maksimal {{ $maxLoanDays }} hari dari tanggal hari ini ({{ $today->format('d M Y') }})</p>
            </div>
            <div>
                <label class="block mb-1.5 font-semibold">Tambahkan Buku Baru</label>
                <div class="w-full cursor-pointer border-2 border-dashed px-4 rounded-md border-light5 dark:border-dark5 text-light3 dark:text-dark3 focus:outline-none focus:border-light1 dark:focus:border-dark1 hover:border-light1 dark:hover:border-dark1 transition-all duration-200 group" id="openBookSelector">
                    <div class="flex items-center gap-3">
                        <div class="w-20 h-[43px] rounded-md -ms-[17px] flex items-center justify-center bg-light5 text-light7 text-3xl transition-all duration-200 group-hover:bg-light1 group-hover:text-light7 dark:bg-dark5 dark:text-dark7 dark:group-hover:bg-dark1 dark:group-hover:text-dark7">+</div>
                        <p class="text-light5 dark:text-dark5 text-[15px] group-hover:text-light3 dark:group-hover:text-dark3">Tambahkan pinjaman buku baru</p>
                    </div>
                </div>
                <p class="text-sm mt-2">Batas Pinjaman buku Maksimal 3</p>
            </div>
        </div>
        <hr class="my-8 text-light5 dark:text-dark5">

        <div class="mb-5">
            <h3 class="font-semibold">Keterangan Detail Pinjaman:</h3>
            <div class="grid grid-cols-[1fr_7fr] text-[15px] mt-2">
                <li>Nama Buku</li> <span>: <span id="detailTitles">{{ $selectedBooks->pluck('title')->implode(', ') }}</span></span>
                <li>Total Buku</li> <span>: <span id="detailTotal">{{ $selectedBooks->count() }}</span> Buku</span>
                <li>Lama Pinjam</li> <span>: <span id="durasiPinjam">{{ $loanDefaultDays }}</span> Hari</span>
                <li>Tanggal Pinjam</li> <span>: {{ $today->format('d F Y') }}</span>
                <li>Tanggal Kembali</li> <span>: <span id="tanggalKembali">{{ $today->copy()->addDays($loanDefaultDays)->format('d F Y') }}</span></span>
            </div>
        </div>

        <div class="border-l-4 bg-yellow-100 border-yellow-500 text-yellow-700 dark:bg-orange-100 dark:border-orange-500 dark:text-orange-700 p-4 text-sm">
            ⚠️ Jika Anda terlambat mengembalikan buku, maka akan dikenakan denda sebesar <strong>Rp10.000/Buku/Hari</strong>.
        </div>

        <button type="submit" class="px-4 mt-6 py-2.5 w-full rounded-md cursor-pointer text-[16px] font-raleway font-semibold text-light7 bg-light1 hover:bg-light2 dark:text-dark7 dark:bg-dark1 dark:hover:bg-dark2 transition duration-200">Ajukan Pinjaman Buku</button>
    </form>
</section>

{{-- Modal Pilih Buku --}}
<div id="bookSelectorModal" style="display:none; position:fixed; z-index:9999; left:0; top:0; width:100vw; height:100vh; background:rgba(0,0,0,0.3);">
    <div class="bg-light7 dark:bg-dark7 border border-light5 dark:border-dark5 rounded-md px-6 pb-6 pt-4 m-auto mt-16 w-[90vw] max-w-xl shadow-xl relative">
        <button type="button" onclick="closeBookSelector()" class="absolute right-6 top-2.5 text-3xl cursor-pointer">&times;</button>
        <h3 class="mb-2 font-semibold text-lg">Pilih Buku</h3>
        <div class="relative mb-4">
            <span class="absolute inset-y-0 left-0 top-2 pl-3 text-light5 dark:text-dark5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="w-5 h-5"><circle cx="112" cy="112" r="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="168.57" y1="168.57" x2="224" y2="224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
            </span>
            <input type="text" id="searchBookInput" placeholder="Cari judul buku..." class="w-full pl-10 pr-4 py-1 bg-transparent border-0 border-b border-light5 dark:border-dark5 focus:border-light1 dark:focus:border-dark1 focus:outline-none placeholder-light5 dark:placeholder-dark5">
        </div>
        <div id="bookList" style="max-height:300px;overflow-y:auto;">
            @foreach($availableBooks as $book) 
                <div class="flex items-center gap-3 mb-2 border-b pb-2 border-light5 dark:border-dark5" data-title="{{ strtolower($book->title) }}">
                    <img src="{{ $book->cover ? asset('storage/'.$book->cover) : asset('assets/images/default-book.jpg') }}" class="w-12 h-16 object-cover rounded" />
                    <div class="flex-1">
                        <div class="font-semibold">{{ $book->title }}</div>
                        <div class="text-sm text-gray-500">{{ $book->author }}</div>
                    </div>
                    <button type="button" onclick="addBookToLoan('{{ $book->id }}')" class="text-sm cursor-pointer rounded px-4 py-1 bg-light1 text-light7 hover:bg-light2 dark:bg-dark1 dark:text-dark7 dark:hover:bg-dark2"> Pilih </button>
                </div>
            @endforeach
            @if($availableBooks->isEmpty())
                <div class="text-center text-light5 py-4">Tidak ada buku lain yang tersedia untuk dipinjam.</div>
            @endif
        </div>
    </div>
</div>
@endsection

<script>
    window.SIPUS_DATA = {
        selectedBooks: @json($selectedBooks->toArray()),
        availableBooks: @json($availableBooks->toArray()),
        maxBooks: {{ $maxLoanDays }},
        minLoanDays: {{ $minLoanDays }},
        maxLoanDays: {{ $maxLoanDays }},
        loanDefaultDays: {{ $loanDefaultDays }},
        todayStr: "{{ $today->format('Y-m-d') }}"
    };
    window.SIPUS_ASSET = {
        storage: "{{ asset('storage') }}",
        defaultBook: "{{ asset('assets/images/default-book.jpg') }}"
    };
    </script>

{{-- @extends('layouts.master-user')

@section('title', 'SiPus Digital - Pinjaman Buku')

@section('content')

@include('components.title', ['title' => 'Pinjaman Buku', 'subtitle' => 'Form Pinjaman Buku'])

<section class="p-6 mb-4 rounded-md bg-light7 dark:bg-dark7 text-light4 dark:text-dark4 border border-light5 dark:border-dark5">
    <div class="mb-6 relative flex items-center justify-center">
        <h3 class="font-semibold font-raleway text-[19px] text-light3 dark:text-dark3">Buku yang Anda Pilih</h3> 
        <a href="{{ route('user.books') }}" class="absolute right-0 px-6 py-2 bg-red-500 text-light7 rounded-md hover:bg-red-600 transition-all duration-200">Cancel</a>
    </div>

    <div>
        <div class="flex w-80 gap-3 p-3 rounded-md border border-light5 dark:border-dark5">
            <img src="{{ asset('assets/images/book-1.jpg') }}" class="w-28 h-40 object-cover rounded-md" loading="lazy" />
            <div class="flex flex-col space-y-1">
                <h4 class="font-semibold font-raleway text-[16px] leading-5 text-light3 dark:text-dark3 mb-3">Star Wars - The Clone Wars</h4>
                <p class="text-[15px] text-light4 dark:text-dark4">Penulis: Budi Seriawan</p>
                <p class="text-[15px] text-light4 dark:text-dark4">Kategori: Fiksi</p>
                <span class="text-green-600 text-[14px] mt-auto">✅Tersedia</span>
            </div>
        </div>
    </div>
    
    <hr class="my-10 text-light5 dark:text-dark5">

    <div class="grid grid-cols-2 gap-5">
        <div>
            <label for="duration" class="block mb-1.5 font-semibold">Lama Peminjaman (hari)</label>
            <input type="number" id="duration" name="duration" min="1" max="7" value="7" class="w-full py-2.5 px-4 rounded-md border border-light5 dark:border-dark5 text-light3 dark:text-dark3 focus:outline-none focus:border-light1 dark:focus:border-dark1 hover:border-light1 dark:hover:border-dark1 transition-all duration-200">
            <p class="text-sm mt-2">Maksimal 7 hari dari tanggal hari ini ({{ now()->format('d M Y') }})</p>
        </div>
        <div>
            <label class="block mb-1.5 font-semibold">Tambahkan Buku Baru</label>
            <div class="w-full cursor-pointer border-2 border-dashed px-4 rounded-md border-light5 dark:border-dark5 text-light3 dark:text-dark3 focus:outline-none focus:border-light1 dark:focus:border-dark1 hover:border-light1 dark:hover:border-dark1 transition-all duration-200 group" onclick="openBookSelector()">
                <div class="flex items-center gap-3">
                    <div class="w-20 h-[43px] rounded-md -ms-[17px] flex items-center justify-center bg-light5 text-light7 text-3xl transition-all duration-200 group-hover:bg-light1 group-hover:text-light7 dark:bg-dark5 dark:text-dark7 dark:group-hover:bg-dark1 dark:group-hover:text-dark7">
                        +
                    </div>
                    <p class="text-light5 dark:text-dark5 text-[15px] group-hover:text-light3 dark:group-hover:text-dark3">Tambahkan pinjaman buku baru</p>
                </div>
            </div>
            <p class="text-sm mt-2">Batas Pinjaman buku Maksimal 3</p>
        </div>
    </div>

    <hr class="my-10 text-light5 dark:text-dark5">

    <div class="mb-5">
        <h3 class="font-semibold">Keterangan Detail Pinjaman:</h3>
        <div class="grid grid-cols-[1fr_7fr] text-[15px] mt-2">
            <li>Name Buku</li> <span>: [Name buku yang dipinjam 1], [Name buku yang dipinjam 2], dst</span>
            <li>Total Buku</li> <span>: 2 Buku</span>
            <li>Lama Pinjam</li> <span>: 5 Hari</span>
            <li>Tanggal Pinjam</li> <span>: 15 April 2025</span>
            <li>Tanggal Kembali</li> <span>: 20 April 2025</span>
        </div>
    </div>

    <div class=" border-l-4 bg-yellow-100 border-yellow-500 text-yellow-700 dark:bg-orange-100 dark:border-orange-500 dark:text-orange-700 p-4 text-sm">
        ⚠️ Jika Anda terlambat mengembalikan buku, maka akan dikenakan denda sebesar <strong>Rp10.000/Buku/Hari</strong>.
    </div>

    <button type="submit" class="px-4 mt-6 py-2.5 w-full rounded-md cursor-pointer text-[16px] font-raleway font-semibold text-light7 bg-light1 hover:bg-light2 dark:text-dark7 dark:bg-dark1 dark:hover:bg-dark2 transition duration-200"> Ajukan Pinjaman Buku </button>
</section>

<script>
    function openBookSelector() {
        alert('Nanti di sini muncul modal / buka halaman daftar buku untuk pilih buku');
    }
</script>

@endsection --}}
