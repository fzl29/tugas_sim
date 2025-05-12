<header class="fixed top-2 left-[273px] right-2 h-16 flex items-center justify-between px-6 z-30 rounded-md bg-light7 dark:bg-dark7 border border-light5 dark:border-dark5">
    <h1 class="text-lg font-raleway font-semibold text-light3 dark:text-dark3">
         Selamat Datang, <span>name admin</span>
     </h1>
     <div class="flex items-center gap-3">
 
         <!-- NOTIFIKASI -->
         <div class="relative">
             <button id="notifBtn" class="cursor-pointer hover:text-light1 dark:hover:text-dark1 mt-[5px]">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="21" height="21"><rect width="256" height="256" fill="none"/><path d="M96,192a32,32,0,0,0,64,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M56,104a72,72,0,0,1,144,0c0,35.82,8.3,64.6,14.9,76A8,8,0,0,1,208,192H48a8,8,0,0,1-6.88-12C47.71,168.6,56,139.81,56,104Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
             </button>
             <div id="notifMenu" class="hidden p-3 absolute -right-3 mt-2 w-80 bg-light7 dark:bg-dark7 border border-light5 dark:border-dark5 rounded-md shadow-lg z-50 text-sm">
                 <p class="pb-2 mb-3 font-raleway text-[16px] text-center font-semibold text-light1 dark:text-dark1 border-b border-light5 dark:border-dark5">Notifikasi</p>
                 <ul class="space-y-3 max-h-60 overflow-y-auto">
                     <!-- Dummy Notifikasi -->
                     <li class="border-b border-light5 dark:border-dark5 pb-2">
                         <p class="text-light3 dark:text-dark3 font-medium">Antrian Disetujui</p>
                         <p class="text-xs text-light4 mt-0.5 dark:text-dark4">Buku "Laravel 12" siap diambil di perpustakaan.</p>
                         <p class="text-[11px] text-gray-600 dark:text-gray-400 mt-1">2 jam lalu</p>
                     </li>
                     <li class="border-b border-light5 dark:border-dark5 pb-2">
                         <p class="text-light3 dark:text-dark3 font-medium">Waktu Pengembalian Hampir Habis</p>
                         <p class="text-xs text-light4 mt-0.5 dark:text-dark4">Buku "Filsafat Ilmu" harus dikembalikan besok.</p>
                         <p class="text-[11px] text-gray-600 dark:text-gray-400 mt-1">10 jam lalu</p>
                     </li>
                     <li class="border-b border-light5 dark:border-dark5 pb-2">
                         <p class="text-light3 dark:text-dark3 font-medium">Pengajuan Ditolak</p>
                         <p class="text-xs text-light4 mt-0.5 dark:text-dark4">Buku "Algoritma Dasar" tidak tersedia saat ini.</p>
                         <p class="text-[11px] text-gray-600 dark:text-gray-400 mt-1">1 hari lalu</p>
                     </li>
                 </ul>
                 <div class="mt-3 text-center">
                     <a href="#" class="text-[13px] text-light1 dark:text-dark1 hover:underline">Lihat Semua Notifikasi</a>
                 </div>
             </div>
         </div>
 
         {{-- @php
             $profilePhoto = auth()->user()->profile_photo;
             $photoPath = $profilePhoto && $profilePhoto !== 'avatar.png'
                 ? asset('storage/profile/' . $profilePhoto)
                 : asset('assets/images/avatar.png');
         @endphp --}}
 
         <div class="relative">
             <button id="dropdownBtn" class="flex items-center cursor-pointer hover:text-light1 dark:hover:text-dark1">
                 <img src="#" 
                     alt="Profile" 
                     class="w-8 h-8 rounded-full me-[2px]">
                 <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" viewBox="0 0 16 16">
                     <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                 </svg>
             </button>
             <div id="dropdownMenu" class="hidden absolute right-0 text-[14px] p-2 mt-2 w-44 space-y-1 rounded-md border border-light5 dark:border-dark5 shadow-lg z-50 bg-light7 dark:bg-dark7">
                 <div class="flex items-center px-2 py-2 gap-3">
                     <label class="relative inline-flex items-center cursor-pointer">
                         <input type="checkbox" value="" class="sr-only peer" id="themeSwitcher">
                         <div class="w-11 h-6 bg-light1 dark:bg-gray-600 rounded-full peer peer-checked:bg-dark1 transition-all duration-300"></div>
                         <div class="absolute left-0.5 top-0.5 bg-light6 dark:bg-dark6 w-5 h-5 rounded-full shadow-md peer-checked:translate-x-full transition-transform duration-300"></div>
                     </label>
                     <span id="themeLabel">Light Mode</span>
                 </div>
                 <a href="#" class="flex items-center gap-3 px-3 py-2 hover:bg-light8 hover:text-light1 dark:hover:bg-dark8 dark:hover:text-dark1 rounded transition-all duration-200 {{ request()->routeIs('') ? 'bg-light8 text-light1 dark:bg-dark8 dark:text-dark1' : '' }}">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="19" height="19"><rect width="256" height="256" fill="none"/><circle cx="128" cy="96" r="64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M32,216c19.37-33.47,54.55-56,96-56s76.63,22.53,96,56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                     Profile
                 </a>
                 <form method="POST" action="#">
                     @csrf
                     <button type="submit" class="w-full cursor-pointer flex items-center gap-3 px-3 py-2 hover:bg-light8 hover:text-light1 dark:hover:bg-dark8 dark:hover:text-dark1 rounded transition-all duration-200">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="19" height="19"><rect width="256" height="256" fill="none"/><polyline points="112 40 48 40 48 216 112 216" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="112" y1="128" x2="224" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="184 88 224 128 184 168" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                         Logout
                     </button>
                 </form>
             </div>
         </div>
     </div>
 </header>