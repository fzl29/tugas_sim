<aside id="sidebar" class="flex flex-col fixed left-2 h-[98%] bottom-2 w-64 z-40 p-4 bg-light7 rounded-md dark:bg-dark7 border border-light5 dark:border-dark5">
    <div class="text-2xl font-raleway text-center font-bold mb-7 text-light1 dark:text-dark1">SiPus Digital.</div>
    <nav class="flex flex-col justify-between flex-1 font-raleway font-semibold">
        <div class="space-y-2">
            <a href="#" class="flex items-center gap-2 py-2.5 px-3.5 rounded transition-all duration-200 hover:bg-light8 hover:text-light1 dark:hover:bg-dark8 dark:hover:text-dark1 {{ request()->routeIs('admin.dashboard') ? 'bg-light8 text-light1 dark:bg-dark8 dark:text-dark1' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="23" height="23"><rect width="256" height="256" fill="none"/><rect x="48" y="48" width="64" height="64" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="144" y="48" width="64" height="64" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="48" y="144" width="64" height="64" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="144" y="144" width="64" height="64" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                Dashboard
            </a>
            <a href="#" class="flex items-center gap-2 py-2.5 px-3.5 rounded transition-all duration-200 hover:bg-light8 hover:text-light1 dark:hover:bg-dark8 dark:hover:text-dark1 {{ request()->routeIs('admin.books.manage') ? 'bg-light8 text-light1 dark:bg-dark8 dark:text-dark1' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="20" height="20"><rect width="256" height="256" fill="none"/><path d="M128,88a32,32,0,0,1,32-32h72V200H160a32,32,0,0,0-32,32" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M24,200H96a32,32,0,0,1,32,32V88A32,32,0,0,0,96,56H24Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="160" y1="96" x2="200" y2="96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="160" y1="128" x2="200" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="160" y1="160" x2="200" y2="160" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                Manage Buku
            </a>
            <a href="#" class="flex items-center gap-2 py-2.5 px-3.5 rounded transition-all duration-200 hover:bg-light8 hover:text-light1 dark:hover:bg-dark8 dark:hover:text-dark1 {{ request()->routeIs('admin.queues.manage') ? 'bg-light8 text-light1 dark:bg-dark8 dark:text-dark1' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="21" height="21"><rect width="256" height="256" fill="none"/><line x1="40" y1="64" x2="216" y2="64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="40" y1="128" x2="136" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="40" y1="192" x2="136" y2="192" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polygon points="240 160 176 200 176 120 240 160" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                Manage Antrian
            </a>
            <a href="#" class="flex items-center gap-2 py-2.5 px-3.5 rounded transition-all duration-200 hover:bg-light8 hover:text-light1 dark:hover:bg-dark8 dark:hover:text-dark1 {{ request()->routeIs('admin.loans.manage') ? 'bg-light8 text-light1 dark:bg-dark8 dark:text-dark1' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="22" height="22"><rect width="256" height="256" fill="none"/><polyline points="128 80 128 128 168 152" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="72 104 32 104 32 64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M67.6,192A88,88,0,1,0,65.77,65.77C54,77.69,44.28,88.93,32,104" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                Manage Riwayat
            </a>
        </div>
        <div class="space-y-2">
            <a href="#" class="flex items-center gap-2 py-2.5 px-3.5 rounded transition-all duration-200 hover:bg-light8 hover:text-light1 dark:hover:bg-dark8 dark:hover:text-dark1 {{ request()->routeIs('admin.profile') ? 'bg-light8 text-light1 dark:bg-dark8 dark:text-dark1' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="22" height="22"><rect width="256" height="256" fill="none"/><circle cx="128" cy="96" r="64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M32,216c19.37-33.47,54.55-56,96-56s76.63,22.53,96,56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                Profile
            </a>
            <form method="POST" action="#">
                @csrf
                <button type="submit" class="w-full cursor-pointer flex items-center gap-2 py-2.5 px-3.5 rounded transition-all duration-200 hover:bg-light8 hover:text-light1 dark:hover:bg-dark8 dark:hover:text-dark1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="22" height="22"><rect width="256" height="256" fill="none"/><polyline points="112 40 48 40 48 216 112 216" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="112" y1="128" x2="224" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="184 88 224 128 184 168" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                    Logout
                </button>
            </form>
        </div>
    </nav>
</aside>