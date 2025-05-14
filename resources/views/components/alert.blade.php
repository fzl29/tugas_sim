<div class="mt-4 mb-1">
    @if (session('success'))
        <div class="alert bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative transition-opacity duration-500 ease-in-out" role="alert">
            <strong class="font-bold">Sukses!</strong>
            <span class="block sm:inline">{!! session('success') !!}</span>
        </div>
    @endif

    @if (session('error'))
        <div class="alert bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative transition-opacity duration-500 ease-in-out" role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative transition-opacity duration-500 ease-in-out" role="alert">
            <strong class="font-bold">Validation Error!</strong>
            <ul class="mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>