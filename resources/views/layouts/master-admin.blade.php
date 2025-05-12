<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
    @stack('styles')
</head>

<body class="font-manrope bg-light6 dark:bg-dark6 text-light4 dark:text-dark4">
    @include('components.sidebar-admin')
    @include('components.header-admin')

    <div class="pt-20 pl-[282px] p-5 transition-all duration-300">
        <main>
            @yield('content')
        </main>
    </div>

    <div class="backToTop" id="backToTop">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256"><path d="M213.66,165.66a8,8,0,0,1-11.32,0L128,91.31,53.66,165.66a8,8,0,0,1-11.32-11.32l80-80a8,8,0,0,1,11.32,0l80,80A8,8,0,0,1,213.66,165.66Z"></path></svg>
    </div>
    
    @vite('resources/js/app.js')
    @stack('scripts')
</body>

</html>

