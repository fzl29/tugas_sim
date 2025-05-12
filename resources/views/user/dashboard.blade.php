@extends('layouts.master-user')

@section('title', 'SiPus Digital - Dashboard')

@section('content')

@include('components.title', ['title' => 'Dashboard', 'subtitle' => 'Halaman Utama'])

<section class="grid grid-cols-3 gap-4 mb-4">
    <div class="flex items-center gap-4 bg-light7 dark:bg-dark7 text-light1 dark:text-dark1 rounded-md border border-light5 dark:border-dark5 py-4 px-5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="50" height="50"><rect width="256" height="256" fill="none"/><rect x="48" y="40" width="64" height="176" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M217.67,205.77l-46.81,10a8,8,0,0,1-9.5-6.21L128.18,51.8a8.07,8.07,0,0,1,6.15-9.57l46.81-10a8,8,0,0,1,9.5,6.21L223.82,196.2A8.07,8.07,0,0,1,217.67,205.77Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="48" y1="72" x2="112" y2="72" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="48" y1="184" x2="112" y2="184" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="133.16" y1="75.48" x2="195.61" y2="62.06" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="139.79" y1="107.04" x2="202.25" y2="93.62" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="156.39" y1="185.94" x2="218.84" y2="172.52" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
        <div class="flex flex-col">
            <p class="text-light3 dark:text-dark3 text-[17px] font-semibold font-raleway">Buku Dipinjam</p>
            <h2 class="text-3xl font-semibold">3</h2>
        </div> 
    </div>
    <div class="flex items-center gap-4 bg-light7 dark:bg-dark7 text-red-500 fill-red-500 rounded-md border border-light5 dark:border-dark5 py-4 px-5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="50" height="50"><rect width="256" height="256" fill="none"/><path d="M224,136c-4.07,49.28-45.67,88-96,88a96,96,0,0,1-96-96c0-50.33,38.72-91.93,88-96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="128 72 128 128 184 128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="160" cy="36" r="12"/><circle cx="196" cy="60" r="12"/><circle cx="220" cy="96" r="12"/></svg>
        <div class="flex flex-col">
            <p class="text-light3 dark:text-dark3 text-[17px] font-semibold font-raleway">Antrian Aktif</p>
            <h2 class="text-3xl font-semibold">5</h2>
        </div> 
    </div>
    <div class="flex items-center gap-4 bg-light7 dark:bg-dark7 text-orange-500 rounded-md border border-light5 dark:border-dark5 py-4 px-5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="50" height="50"><rect width="256" height="256" fill="none"/><path d="M96,192a32,32,0,0,0,64,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M184,24a102.71,102.71,0,0,1,36.29,40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M35.71,64A102.71,102.71,0,0,1,72,24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M56,112a72,72,0,0,1,144,0c0,35.82,8.3,56.6,14.9,68A8,8,0,0,1,208,192H48a8,8,0,0,1-6.88-12C47.71,168.6,56,147.81,56,112Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
        <div class="flex flex-col">
            <p class="text-light3 dark:text-dark3 text-[17px] font-semibold font-raleway">Notifikasi Baru</p>
            <h2 class="text-3xl font-semibold">1</h2>
        </div> 
    </div>
</section>

<section class="grid grid-cols-[2.05fr_1fr] gap-4 mb-4">
    <div class="flex flex-col gap-4">
        <div class="bg-light7 dark:bg-dark7 rounded-md border border-light5 dark:border-dark5 p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-light3 dark:text-dark3 font-raleway">Daftar Buku</h3>
                <a href="{{ route('user.books') }}" class="flex items-center gap-1 text-[14px] hover:underline text-light1 hover:text-light2 dark:text-dark1 dark:hover:text-dark2">
                    Lihat Semua
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="15" height="15"><rect width="256" height="256" fill="none"/><polyline points="56 48 136 128 56 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="136 48 216 128 136 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                </a>
            </div>
            <div class="grid gap-4">
                <div class="w-full flex overflow-x-auto">
                    <div class="flex gap-5 w-max">
                        <div class="flex w-48 flex-col gap-3 p-3 rounded-md border border-light5 dark:border-dark5">
                            <img src="{{ asset('assets/images/book-1.jpg') }}" class="w-48 h-60 object-cover rounded-md" loading="lazy" />
                            <div>
                                <h4 class="font-semibold font-raleway text-[16px] leading-5 text-light3 dark:text-dark3 mb-1">Star Wars - The Clone Wars</h4>
                                <p class="text-[15px] text-light4 dark:text-dark4">Budi Seriawan</p>
                                <span class="text-green-600 text-[14px]">Tersedia</span>
                            </div>
                        </div>
                        <div class="flex w-48 flex-col gap-3 p-3 rounded-md border border-light5 dark:border-dark5">
                            <img src="{{ asset('assets/images/book-2.jpg') }}" class="w-48 rounded-md h-60 object-cover" loading="lazy" />
                            <div>
                                <h4 class="font-semibold font-raleway text-[16px] leading-5 text-light3 dark:text-dark3 mb-1">Star Wars - The Clone Wars</h4>
                                <p class="text-[15px] text-light4 dark:text-dark4">Budi Seriawan</p>
                                <span class="text-green-600 text-[14px]">Tersedia</span>
                            </div>
                        </div>
                        <div class="flex w-48 flex-col gap-3 p-3 rounded-md border border-light5 dark:border-dark5">
                            <img src="{{ asset('assets/images/book-3.jpg') }}" class="w-48 rounded-md h-60 object-cover" loading="lazy" />
                            <div>
                                <h4 class="font-semibold font-raleway text-[16px] leading-5 text-light3 dark:text-dark3 mb-1">Star Wars - The Clone Wars</h4>
                                <p class="text-[15px] text-light4 dark:text-dark4">Budi Seriawan</p>
                                <span class="text-green-600 text-[14px]">Tersedia</span>
                            </div>
                        </div>
                        <div class="flex w-48 flex-col gap-3 p-3 rounded-md border border-light5 dark:border-dark5">
                            <img src="{{ asset('assets/images/book-4.jpg') }}" class="w-48 rounded-md h-60 object-cover" loading="lazy" />
                            <div>
                                <h4 class="font-semibold font-raleway text-[16px] leading-5 text-light3 dark:text-dark3 mb-1">Star Wars - The Clone Wars</h4>
                                <p class="text-[15px] text-light4 dark:text-dark4">Budi Seriawan</p>
                                <span class="text-green-600 text-[14px]">Tersedia</span>
                            </div>
                        </div>
                        <div class="flex w-48 flex-col gap-3 p-3 rounded-md border border-light5 dark:border-dark5">
                            <img src="{{ asset('assets/images/book-1.jpg') }}" class="w-48 rounded-md h-60 object-cover" loading="lazy" />
                            <div>
                                <h4 class="font-semibold font-raleway text-[16px] leading-5 text-light3 dark:text-dark3 mb-1">Star Wars - The Clone Wars</h4>
                                <p class="text-[15px] text-light4 dark:text-dark4">Budi Seriawan</p>
                                <span class="text-green-600 text-[14px]">Tersedia</span>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>

        <div class="bg-light7 dark:bg-dark7 rounded-md border border-light5 dark:border-dark5 p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-light3 dark:text-dark3 font-raleway">Antrian Anda</h3>
                <a href="{{ route('user.queue') }}" class="flex items-center gap-1 text-[14px] hover:underline text-light1 hover:text-light2 dark:text-dark1 dark:hover:text-dark2">
                    Lihat Semua
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="15" height="15"><rect width="256" height="256" fill="none"/><polyline points="56 48 136 128 56 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="136 48 216 128 136 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                </a>
            </div>
            <div>
                <p class="text-light3 dark:text-dark3">Nomor Anda</p>
                <h2 class="text-3xl font-bold text-orange-500">05</h2>
                <p class="text-[13px] text-orange-500">Menunggu</p>
            </div>
        </div>
        
        <div class="bg-light7 dark:bg-dark7 rounded-md border border-light5 dark:border-dark5 p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-light3 dark:text-dark3 font-raleway">Riwayat Anda</h3>
                <a href="{{ route('user.history') }}" class="flex items-center gap-1 text-[14px] hover:underline text-light1 hover:text-light2 dark:text-dark1 dark:hover:text-dark2">
                    Lihat Semua
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="15" height="15"><rect width="256" height="256" fill="none"/><polyline points="56 48 136 128 56 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="136 48 216 128 136 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                </a>
            </div>
            <div>
                <ul class="text-[15px] space-y-1">
                    <li>25 April 2025, Buku "Stars Wars" dipinjam</li>
                    <li>28 April 2025, Buku "Stars Wars" dikembalikan</li>
                    <li>29 April 2025, Buku "Algoritma Data" dipinjam</li>
                    <li>30 April 2025, Buku "Algoritma Data" dikembalikan</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="flex flex-col gap-4">
        <div class="p-6 h-fit rounded-md border bg-light7 dark:bg-dark7 border-light5 dark:border-dark5">
            <h3 class="text-[19px] text-center font-semibold text-light3 dark:text-dark3 mb-6 font-raleway">Informasi Perpustakaan</h3>
            <ul class="space-y-4 text-[15px]">
                <li class="flex flex-col"><strong>Jam Operasional:</strong> Senin - Jumat, 08.00 - 16.00 WIB</li>
                <li class="flex flex-col"><strong>Lokasi:</strong> Gedung Perpustakaan Lt. 2, Kampus SIFEST</li>
                <li class="flex flex-col"><strong>Kontak:</strong> perpustakaan@sifest.ac.id | (021) 1234-5678</li>
                <li class="flex flex-col"><strong>Catatan:</strong> Peminjaman buku hanya untuk antrian dan pengambilan secara offline tukar dengan nomor antrian anda.
                    <br> <br> <span class="text-red-500">*Jika telat mengembalikan Denda Rp 5.000</span>
                </li>
            </ul>
        </div>

        <div class="p-6 h-fit rounded-md border bg-light7 dark:bg-dark7 border-light5 dark:border-dark5">
            <h3 class="text-[19px] text-center font-semibold text-light3 dark:text-dark3 mb-6 font-raleway">Notifikasi</h3>
            <ul class="space-y-4 text-[15px]">
                <li>Buku "Algoritma dan Struktur Data" siap diambil. [Hari ini, 25 April 2025]</li>
            </ul>
        </div>
    </div>
</section>



@endsection