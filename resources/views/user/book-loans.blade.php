@extends('layouts.master-user')

@section('title', 'SiPus Digital - Pinjaman Buku')

@section('content')

@include('components.title', ['title' => 'Pinjaman Buku', 'subtitle' => 'Form Pinjaman Buku'])

<section class="p-6 mb-4 rounded-md bg-light7 dark:bg-dark7 text-light4 dark:text-dark4 border border-light5 dark:border-dark5">
    <h3 class="font-semibold font-raleway text-center text-[19px] text-light3 dark:text-dark3 mb-6">Buku yang Anda Dipilih</h3>

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




@endsection
