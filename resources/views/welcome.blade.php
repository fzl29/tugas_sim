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
        <a href="#" class="card">
            <img src="{{ asset('assets/images/book-1.jpg') }}" alt="Book 1" loading="lazy">
            <h3>Lorem Ipsum</h3>
            <div class="item">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z"></path>
                </svg>
                <p>100 view</p>
                <div class="star">
                    <svg width="18" height="17" viewBox="0 0 18 17" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#F59E0B"/></svg>
                    <svg width="18" height="17" viewBox="0 0 18 17" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#F59E0B"/></svg>
                    <svg width="18" height="17" viewBox="0 0 18 17" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#F59E0B"/></svg>
                    <svg width="18" height="17" viewBox="0 0 18 17" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#F59E0B"/></svg>
                    <svg width="18" height="17" viewBox="0 0 18 17" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#F59E0B"/></svg>
                </div>
            </div>
        </a>
        <a href="#" class="card">
            <img src="{{ asset('assets/images/book-2.jpg') }}" alt="Book 1" loading="lazy">
            <h3>Lorem Ipsum</h3>
            <div class="item">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z"></path>
                </svg>
                <p>100 view</p>
                <div class="star">
                    <svg width="18" height="17" viewBox="0 0 18 17" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#F59E0B"/></svg>
                    <svg width="18" height="17" viewBox="0 0 18 17" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#F59E0B"/></svg>
                    <svg width="18" height="17" viewBox="0 0 18 17" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#F59E0B"/></svg>
                    <svg width="18" height="17" viewBox="0 0 18 17" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#F59E0B"/></svg>
                    <svg width="18" height="17" viewBox="0 0 18 17" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#F59E0B"/></svg>
                </div>
            </div>
        </a>
        <a href="#" class="card">
            <img src="{{ asset('assets/images/book-3.jpg') }}" alt="Book 1" loading="lazy">
            <h3>Lorem Ipsum</h3>
            <div class="item">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z"></path>
                </svg>
                <p>100 view</p>
                <div class="star">
                    <svg width="18" height="17" viewBox="0 0 18 17" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#F59E0B"/></svg>
                    <svg width="18" height="17" viewBox="0 0 18 17" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#F59E0B"/></svg>
                    <svg width="18" height="17" viewBox="0 0 18 17" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#F59E0B"/></svg>
                    <svg width="18" height="17" viewBox="0 0 18 17" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#F59E0B"/></svg>
                    <svg width="18" height="17" viewBox="0 0 18 17" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z" fill="#F59E0B"/></svg>
                </div>
            </div>
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
