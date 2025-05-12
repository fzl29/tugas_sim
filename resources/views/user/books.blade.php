@extends('layouts.master-user')

@section('title', 'SiPus Digital - Daftar Buku')

@section('content')

@include('components.title', ['title' => 'Daftar Buku', 'subtitle' => 'Halaman Semua Buku'])

<section class="p-6 mb-4 rounded-md bg-light7 dark:bg-dark7 text-light4 dark:text-dark4 border border-light5 dark:border-dark5">
    <div class="mb-6 flex justify-between items-center text-[15px]">
        <div class="relative w-[300px]">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-light5 dark:text-dark5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="w-5 h-5"><circle cx="112" cy="112" r="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="168.57" y1="168.57" x2="224" y2="224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
            </span>
            <input type="text" placeholder="Cari nama judul buku..." class="w-full pl-10 pr-4 py-2 bg-transparent border-0 border-b border-light5 dark:border-dark5 focus:border-light1 dark:focus:border-dark1 focus:outline-none placeholder-light5 dark:placeholder-dark5">
        </div>

        <div class="relative">
            <select id="is_available" name="is_available" class="w-full py-2.5 px-4 pr-10 rounded-md border border-light5 dark:border-dark5 text-light3 dark:text-dark3 bg-light7 dark:bg-dark7 appearance-none focus:outline-none focus:border-light1 dark:focus:border-dark1 hover:border-light1 dark:hover:border-dark1 transition-all duration-200">
                <option value="0">Semua Kategori</option>
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

    <h3 class="text-lg mb-4 font-semibold text-light3 dark:text-dark3 font-raleway">Buku Populer</h3>
    <div class="w-full flex overflow-x-auto">
        <div class="flex gap-5 w-max">
            <div class="flex w-56 flex-col gap-3 p-3 rounded-md border border-light5 dark:border-dark5">
                <img src="{{ asset('assets/images/book-1.jpg') }}" class="w-56 h-72 object-cover rounded-md" loading="lazy" />
                <div>
                    <h4 class="font-semibold font-raleway text-[16px] leading-5 text-light3 dark:text-dark3 mb-1">Star Wars - The Clone Wars</h4>
                    <p class="text-[15px] text-light4 dark:text-dark4">Budi Seriawan</p>
                    <span class="text-green-600 text-[14px]">Tersedia</span>
                </div>
                <div class="flex items-center gap-5">
                    <a href="{{ route('user.book-loans') }}" class="cursor-pointer text-[14px] px-5 py-1.5 rounded-md bg-light1 text-light7 hover:bg-light2 dark:bg-dark1 dark:text-dark7 dark:hover:bg-dark2 transition-all duration-200">Pinjam Sekarang</a>
                    <button class="cursor-pointer hover:text-light1 dark:hover:text-dark1 transition-all"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="22" height="22"><rect width="256" height="256" fill="none"/><line x1="128" y1="120" x2="128" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="184 88 128 24 72 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="180.8" y1="120" x2="175.2" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="75.2" y1="120" x2="80.8" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M24,88H232L216.93,201.06A8,8,0,0,1,209,208H47a8,8,0,0,1-7.93-6.94Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg></button>
                </div>
            </div>
            <div class="flex w-56 flex-col gap-3 p-3 rounded-md border border-light5 dark:border-dark5">
                <img src="{{ asset('assets/images/book-2.jpg') }}" class="w-56 rounded-md h-72 object-cover" loading="lazy" />
                <div>
                    <h4 class="font-semibold font-raleway text-[16px] leading-5 text-light3 dark:text-dark3 mb-1">Star Wars - The Clone Wars</h4>
                    <p class="text-[15px] text-light4 dark:text-dark4">Budi Seriawan</p>
                    <span class="text-green-600 text-[14px]">Tersedia</span>
                </div>
                <div class="flex items-center gap-5">
                    <a href="{{ route('user.book-loans') }}" class="cursor-pointer text-[14px] px-5 py-1.5 rounded-md bg-light1 text-light7 hover:bg-light2 dark:bg-dark1 dark:text-dark7 dark:hover:bg-dark2 transition-all duration-200">Pinjam Sekarang</a>
                    <button class="cursor-pointer hover:text-light1 dark:hover:text-dark1 transition-all"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="22" height="22"><rect width="256" height="256" fill="none"/><line x1="128" y1="120" x2="128" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="184 88 128 24 72 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="180.8" y1="120" x2="175.2" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="75.2" y1="120" x2="80.8" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M24,88H232L216.93,201.06A8,8,0,0,1,209,208H47a8,8,0,0,1-7.93-6.94Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg></button>
                </div>
            </div>
            <div class="flex w-56 flex-col gap-3 p-3 rounded-md border border-light5 dark:border-dark5">
                <img src="{{ asset('assets/images/book-3.jpg') }}" class="w-56 rounded-md h-72 object-cover" loading="lazy" />
                <div>
                    <h4 class="font-semibold font-raleway text-[16px] leading-5 text-light3 dark:text-dark3 mb-1">Star Wars - The Clone Wars</h4>
                    <p class="text-[15px] text-light4 dark:text-dark4">Budi Seriawan</p>
                    <span class="text-green-600 text-[14px]">Tersedia</span>
                </div>
                <div class="flex items-center gap-5">
                    <a href="{{ route('user.book-loans') }}" class="cursor-pointer text-[14px] px-5 py-1.5 rounded-md bg-light1 text-light7 hover:bg-light2 dark:bg-dark1 dark:text-dark7 dark:hover:bg-dark2 transition-all duration-200">Pinjam Sekarang</a>
                    <button class="cursor-pointer hover:text-light1 dark:hover:text-dark1 transition-all"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="22" height="22"><rect width="256" height="256" fill="none"/><line x1="128" y1="120" x2="128" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="184 88 128 24 72 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="180.8" y1="120" x2="175.2" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="75.2" y1="120" x2="80.8" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M24,88H232L216.93,201.06A8,8,0,0,1,209,208H47a8,8,0,0,1-7.93-6.94Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg></button>
                </div>
            </div>
            <div class="flex w-56 flex-col gap-3 p-3 rounded-md border border-light5 dark:border-dark5">
                <img src="{{ asset('assets/images/book-4.jpg') }}" class="w-56 rounded-md h-72 object-cover" loading="lazy" />
                <div>
                    <h4 class="font-semibold font-raleway text-[16px] leading-5 text-light3 dark:text-dark3 mb-1">Star Wars - The Clone Wars</h4>
                    <p class="text-[15px] text-light4 dark:text-dark4">Budi Seriawan</p>
                    <span class="text-green-600 text-[14px]">Tersedia</span>
                </div>
                <div class="flex items-center gap-5">
                    <a href="{{ route('user.book-loans') }}" class="cursor-pointer text-[14px] px-5 py-1.5 rounded-md bg-light1 text-light7 hover:bg-light2 dark:bg-dark1 dark:text-dark7 dark:hover:bg-dark2 transition-all duration-200">Pinjam Sekarang</a>
                    <button class="cursor-pointer hover:text-light1 dark:hover:text-dark1 transition-all"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="22" height="22"><rect width="256" height="256" fill="none"/><line x1="128" y1="120" x2="128" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="184 88 128 24 72 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="180.8" y1="120" x2="175.2" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="75.2" y1="120" x2="80.8" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M24,88H232L216.93,201.06A8,8,0,0,1,209,208H47a8,8,0,0,1-7.93-6.94Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg></button>
                </div>
            </div>
            <div class="flex w-56 flex-col gap-3 p-3 rounded-md border border-light5 dark:border-dark5">
                <img src="{{ asset('assets/images/book-1.jpg') }}" class="w-56 rounded-md h-72 object-cover" loading="lazy" />
                <div>
                    <h4 class="font-semibold font-raleway text-[16px] leading-5 text-light3 dark:text-dark3 mb-1">Star Wars - The Clone Wars</h4>
                    <p class="text-[15px] text-light4 dark:text-dark4">Budi Seriawan</p>
                    <span class="text-green-600 text-[14px]">Tersedia</span>
                </div>
                <div class="flex items-center gap-5">
                    <a href="{{ route('user.book-loans') }}" class="cursor-pointer text-[14px] px-5 py-1.5 rounded-md bg-light1 text-light7 hover:bg-light2 dark:bg-dark1 dark:text-dark7 dark:hover:bg-dark2 transition-all duration-200">Pinjam Sekarang</a>
                    <button class="cursor-pointer hover:text-light1 dark:hover:text-dark1 transition-all"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="22" height="22"><rect width="256" height="256" fill="none"/><line x1="128" y1="120" x2="128" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="184 88 128 24 72 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="180.8" y1="120" x2="175.2" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="75.2" y1="120" x2="80.8" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M24,88H232L216.93,201.06A8,8,0,0,1,209,208H47a8,8,0,0,1-7.93-6.94Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg></button>
                </div>
            </div>
        </div> 
    </div>
</section>

<section class="p-6 rounded-md bg-light7 dark:bg-dark7 text-light4 dark:text-dark4 border border-light5 dark:border-dark5">
    <h3 class="text-lg mb-4 font-semibold text-light3 dark:text-dark3 font-raleway">Buku Fiksi</h3>
    <div class="w-full flex overflow-x-auto">
        <div class="flex gap-5 w-max">
            <div class="flex w-56 flex-col gap-3 p-3 rounded-md border border-light5 dark:border-dark5">
                <img src="{{ asset('assets/images/book-1.jpg') }}" class="w-56 h-72 object-cover rounded-md" loading="lazy" />
                <div>
                    <h4 class="font-semibold font-raleway text-[16px] leading-5 text-light3 dark:text-dark3 mb-1">Star Wars - The Clone Wars</h4>
                    <p class="text-[15px] text-light4 dark:text-dark4">Budi Seriawan</p>
                    <span class="text-green-600 text-[14px]">Tersedia</span>
                </div>
                <div class="flex items-center gap-5">
                    <a href="{{ route('user.book-loans') }}" class="cursor-pointer text-[14px] px-5 py-1.5 rounded-md bg-light1 text-light7 hover:bg-light2 dark:bg-dark1 dark:text-dark7 dark:hover:bg-dark2 transition-all duration-200">Pinjam Sekarang</a>
                    <button class="cursor-pointer hover:text-light1 dark:hover:text-dark1 transition-all"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="22" height="22"><rect width="256" height="256" fill="none"/><line x1="128" y1="120" x2="128" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="184 88 128 24 72 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="180.8" y1="120" x2="175.2" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="75.2" y1="120" x2="80.8" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M24,88H232L216.93,201.06A8,8,0,0,1,209,208H47a8,8,0,0,1-7.93-6.94Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg></button>
                </div>
            </div>
            <div class="flex w-56 flex-col gap-3 p-3 rounded-md border border-light5 dark:border-dark5">
                <img src="{{ asset('assets/images/book-2.jpg') }}" class="w-56 rounded-md h-72 object-cover" loading="lazy" />
                <div>
                    <h4 class="font-semibold font-raleway text-[16px] leading-5 text-light3 dark:text-dark3 mb-1">Star Wars - The Clone Wars</h4>
                    <p class="text-[15px] text-light4 dark:text-dark4">Budi Seriawan</p>
                    <span class="text-green-600 text-[14px]">Tersedia</span>
                </div>
                <div class="flex items-center gap-5">
                    <a href="{{ route('user.book-loans') }}" class="cursor-pointer text-[14px] px-5 py-1.5 rounded-md bg-light1 text-light7 hover:bg-light2 dark:bg-dark1 dark:text-dark7 dark:hover:bg-dark2 transition-all duration-200">Pinjam Sekarang</a>
                    <button class="cursor-pointer hover:text-light1 dark:hover:text-dark1 transition-all"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="22" height="22"><rect width="256" height="256" fill="none"/><line x1="128" y1="120" x2="128" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="184 88 128 24 72 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="180.8" y1="120" x2="175.2" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="75.2" y1="120" x2="80.8" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M24,88H232L216.93,201.06A8,8,0,0,1,209,208H47a8,8,0,0,1-7.93-6.94Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg></button>
                </div>
            </div>
            <div class="flex w-56 flex-col gap-3 p-3 rounded-md border border-light5 dark:border-dark5">
                <img src="{{ asset('assets/images/book-3.jpg') }}" class="w-56 rounded-md h-72 object-cover" loading="lazy" />
                <div>
                    <h4 class="font-semibold font-raleway text-[16px] leading-5 text-light3 dark:text-dark3 mb-1">Star Wars - The Clone Wars</h4>
                    <p class="text-[15px] text-light4 dark:text-dark4">Budi Seriawan</p>
                    <span class="text-green-600 text-[14px]">Tersedia</span>
                </div>
                <div class="flex items-center gap-5">
                    <a href="{{ route('user.book-loans') }}" class="cursor-pointer text-[14px] px-5 py-1.5 rounded-md bg-light1 text-light7 hover:bg-light2 dark:bg-dark1 dark:text-dark7 dark:hover:bg-dark2 transition-all duration-200">Pinjam Sekarang</a>
                    <button class="cursor-pointer hover:text-light1 dark:hover:text-dark1 transition-all"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="22" height="22"><rect width="256" height="256" fill="none"/><line x1="128" y1="120" x2="128" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="184 88 128 24 72 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="180.8" y1="120" x2="175.2" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="75.2" y1="120" x2="80.8" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M24,88H232L216.93,201.06A8,8,0,0,1,209,208H47a8,8,0,0,1-7.93-6.94Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg></button>
                </div>
            </div>
            <div class="flex w-56 flex-col gap-3 p-3 rounded-md border border-light5 dark:border-dark5">
                <img src="{{ asset('assets/images/book-4.jpg') }}" class="w-56 rounded-md h-72 object-cover" loading="lazy" />
                <div>
                    <h4 class="font-semibold font-raleway text-[16px] leading-5 text-light3 dark:text-dark3 mb-1">Star Wars - The Clone Wars</h4>
                    <p class="text-[15px] text-light4 dark:text-dark4">Budi Seriawan</p>
                    <span class="text-green-600 text-[14px]">Tersedia</span>
                </div>
                <div class="flex items-center gap-5">
                    <a href="{{ route('user.book-loans') }}" class="cursor-pointer text-[14px] px-5 py-1.5 rounded-md bg-light1 text-light7 hover:bg-light2 dark:bg-dark1 dark:text-dark7 dark:hover:bg-dark2 transition-all duration-200">Pinjam Sekarang</a>
                    <button class="cursor-pointer hover:text-light1 dark:hover:text-dark1 transition-all"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="22" height="22"><rect width="256" height="256" fill="none"/><line x1="128" y1="120" x2="128" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="184 88 128 24 72 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="180.8" y1="120" x2="175.2" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="75.2" y1="120" x2="80.8" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M24,88H232L216.93,201.06A8,8,0,0,1,209,208H47a8,8,0,0,1-7.93-6.94Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg></button>
                </div>
            </div>
            <div class="flex w-56 flex-col gap-3 p-3 rounded-md border border-light5 dark:border-dark5">
                <img src="{{ asset('assets/images/book-1.jpg') }}" class="w-56 rounded-md h-72 object-cover" loading="lazy" />
                <div>
                    <h4 class="font-semibold font-raleway text-[16px] leading-5 text-light3 dark:text-dark3 mb-1">Star Wars - The Clone Wars</h4>
                    <p class="text-[15px] text-light4 dark:text-dark4">Budi Seriawan</p>
                    <span class="text-green-600 text-[14px]">Tersedia</span>
                </div>
                <div class="flex items-center gap-5">
                    <a href="{{ route('user.book-loans') }}" class="cursor-pointer text-[14px] px-5 py-1.5 rounded-md bg-light1 text-light7 hover:bg-light2 dark:bg-dark1 dark:text-dark7 dark:hover:bg-dark2 transition-all duration-200">Pinjam Sekarang</a>
                    <button class="cursor-pointer hover:text-light1 dark:hover:text-dark1 transition-all"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="22" height="22"><rect width="256" height="256" fill="none"/><line x1="128" y1="120" x2="128" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="184 88 128 24 72 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="180.8" y1="120" x2="175.2" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="75.2" y1="120" x2="80.8" y2="176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M24,88H232L216.93,201.06A8,8,0,0,1,209,208H47a8,8,0,0,1-7.93-6.94Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg></button>
                </div>
            </div>
        </div> 
    </div>
</section>

@endsection
