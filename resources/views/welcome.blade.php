@extends('layouts.app')

@section('title', 'SiPus Digital')

@section('content')

{{-- ======= Section Hero ======= --}}
<section id="home" class="home">
    <img src="{{ asset('assets/images/illustrasi-light.svg') }}" alt="Illustrasi Vector" loading="lazy" class="block dark:hidden">
    <img src="{{ asset('assets/images/illustrasi-dark.svg') }}" alt="Illustrasi Vector" loading="lazy" class="hidden dark:block">
    <div>
        <h1>Selamat Datang di SiPus Digital!</h1>
        <h2>Temukan, baca, dan pinjam buku favoritmu secara online.</h2>
        <a href="#buku">
            Lihat Buku 
            <svg width="17" height="15" viewBox="0 0 17 15" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                <path d="M0.0566406 7.7257C0.0566406 7.346 0.338794 7.03221 0.70487 6.98255L0.806641 6.9757L15.8066 6.9757C16.2209 6.9757 16.5566 7.31149 16.5566 7.7257C16.5566 8.1054 16.2745 8.41919 15.9084 8.46885L15.8066 8.4757L0.806641 8.4757C0.392427 8.4757 0.0566406 8.13991 0.0566406 7.7257Z"/>
                <path d="M9.22765 2.23277C8.93413 1.94051 8.9331 1.46563 9.22537 1.17211C9.49106 0.905272 9.90767 0.880169 10.2017 1.09739L10.286 1.16983L16.336 7.19383C16.6037 7.46031 16.628 7.87843 16.4091 8.1725L16.3361 8.25672L10.2861 14.2817C9.99257 14.574 9.5177 14.573 9.22541 14.2795C8.95969 14.0127 8.93635 13.596 9.15481 13.3028L9.2276 13.2189L14.7436 7.725L9.22765 2.23277Z"/>
            </svg>
        </a>
    </div>
</section> {{-- ======= End Section Hero ======= --}}

{{-- ======= Section Buku ======= --}}
<section id="buku" class="book">
    <div class="container-book">
        <a href="{{ route('login') }}" class="card">
            <img src="{{ asset('assets/images/book-1.jpg') }}" alt="Book 1" loading="lazy">
            <h3>Pokemon The Johto Journeys</h3>
            <p>Shoila Swoony</p>
        </a>
        <a href="{{ route('login') }}" class="card">
            <img src="{{ asset('assets/images/book-2.jpg') }}" alt="Book 1" loading="lazy">
            <h3>Star Wars The Clone Wars</h3>
            <p>Scholastic</p>
        </a>
        <a href="{{ route('login') }}" class="card">
            <img src="{{ asset('assets/images/book-3.jpg') }}" alt="Book 1" loading="lazy">
            <h3>The Lost Hero</h3>
            <p>Rick Riordan</p>
        </a>
    </div>
    <div class="variasi"></div>
</section> 
{{-- ======= End Section Buku ======= --}}

{{-- ======= Section About ======= --}}
<section id="about" class="about">
    <div class="item">
        <h3>About</h3>
        <p>SiPus Digital (Sistem Informasi Perpustakaan Digital) adalah sebuah aplikasi perpustakaan berbasis web yang dikembangkan untuk memudahkan akses terhadap koleksi buku secara daring. Melalui platform ini, pengguna dapat menjelajahi daftar buku, melihat detail koleksi, serta melakukan proses peminjaman secara online dengan antarmuka yang sederhana dan informatif.</p>
        <p>Aplikasi ini dibangun dalam rangka Sistem Informasi Festival (SIFEST) sebagai bentuk kontribusi terhadap pengembangan teknologi informasi di bidang literasi dan edukasi. SiPus Digital memanfaatkan teknologi modern seperti Laravel dan Tailwind CSS, serta menerapkan konsep antarmuka yang user-friendly, guna menciptakan pengalaman pengguna yang nyaman dan efisien.</p>
    </div>
    <div class="images-wrapper">
        <div class="images-track">
            <div class="scroll-content">
            <img src="{{ asset('assets/images/logo-1.png') }}" alt="Logo 1">
            <img src="{{ asset('assets/images/logo-2.png') }}" alt="Logo 2">
            <img src="{{ asset('assets/images/logo-3.png') }}" alt="Logo 3">
            <img src="{{ asset('assets/images/logo-4.png') }}" alt="Logo 4">
            <img src="{{ asset('assets/images/logo-5.png') }}" alt="Logo 5">
            <!-- duplikat untuk loop -->
            <img src="{{ asset('assets/images/logo-1.png') }}" alt="Logo 1">
            <img src="{{ asset('assets/images/logo-2.png') }}" alt="Logo 2">
            <img src="{{ asset('assets/images/logo-3.png') }}" alt="Logo 3">
            <img src="{{ asset('assets/images/logo-4.png') }}" alt="Logo 4">
            <img src="{{ asset('assets/images/logo-5.png') }}" alt="Logo 5">
            </div>
        </div>
    </div>
</section> {{-- ======= End Section About ======= --}}

{{-- ======= Section Contact ======= --}}
<section id="contact" class="contact">
    <h3>Contact</h3>
    <form action="" method="">
        <div class="container-form">
            <div class="group">
                <input type="text" name="name" id="name" class="peer" placeholder=" " required/>
                <label for="name">Name</label>
            </div>
            <div class="group">
                <input type="email" name="email" id="email" class="peer" placeholder=" " required/>
                <label for="email">Email</label>
            </div>
            <div class="group">
                <input type="text" name="subject" id="subject" class="peer" placeholder=" " required/>
                <label for="subject">Subject</label>
            </div>
        </div>
        <div class="group">
            <textarea name="message" id="message" cols="30" rows="10" class="peer" placeholder=" " required></textarea>
            <label for="subject">Message</label>
        </div>
        <button type="submit" class="btn-submit">SEND MESSAGE</button>
    </form>
</section> {{-- ======= End Section Contact ======= --}}

{{-- ======= Footer ======= --}}
<footer class="footer-index">
    <p>©2024 Creavine Studio | All Rights Reserved.</p>
</footer> {{-- ======= End Footer ======= --}}

@endsection
