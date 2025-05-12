@extends('layouts.master-admin')

@section('title', 'SiPus Digital - Manage Buku')

@section('content')

@include('components.title', ['title' => 'Manage Buku', 'subtitle' => 'Kelola Buku'])

    <section
        class="px-6 pt-4 pb-6 rounded-md bg-light7 dark:bg-dark7 text-light4 dark:text-dark4 border border-light5 dark:border-dark5">
        <div class="flex font-raleway font-semibold">
            <button id="tab-default"
                class="tab-button cursor-pointer py-2 px-3 border-b-2 hover:text-light1 hover:border-b-light1 dark:hover:text-dark1 dark:hover:border-b-dark1 border-transparent transition-all duration-200"
                onclick="showTab('default')">Data Buku</button>
            <button id="tab-change"
                class="tab-button cursor-pointer py-2 px-3 border-b-2 hover:text-light1 hover:border-b-light1 dark:hover:text-dark1 dark:hover:border-b-dark1 border-transparent transition-all duration-200"
                onclick="showTab('change')">Create Buku</button>
        </div>

        <div id="content-default" class="w-full overflow-x-auto mt-6">
            <div class="min-w-[1000px]">
                <table class="w-full table-auto text-[15px]">
                    <thead class="bg-light8 dark:bg-dark8 text-light1 dark:text-dark1 ">
                        <tr>
                            <th class="px-4 py-2.5 text-left">No</th>
                            <th class="px-4 py-2.5 text-left">Judul Buku</th>
                            <th class="px-4 py-2.5 text-left">Penulis</th>
                            <th class="px-4 py-2.5 text-left">Kategori</th>
                            <th class="px-4 py-2.5 text-left">Status</th>
                            <th class="px-4 py-2.5 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Data dummy sementara --}}
                        <tr class="border-b border-light5 dark:border-dark5">
                            <td class="px-4 py-2.5">1</td>
                            <td class="px-4 py-2.5">Pemrograman Laravel</td>
                            <td class="px-4 py-2.5">Ahmad Fauzi</td>
                            <td class="px-4 py-2.5">Fiksi</td>
                            <td class="px-4 py-2.5"><span class="text-green-500">Tersedia</span></td>
                            <td class="px-4 py-2.5">
                                <button
                                    class="transition-all duration-200 cursor-pointer bg-orange-500 hover:bg-orange-600 text-light7 px-3 py-1 rounded-md text-[13px] mr-1">Edit</button>
                                <button
                                    class="transition-all duration-200 cursor-pointer bg-red-500 hover:bg-red-600 text-light7 px-3 py-1 rounded-md text-[13px]">Delete</button>
                            </td>
                        </tr>
                        <tr class="border-b border-light5 dark:border-dark5">
                            <td class="px-4 py-2.5">2</td>
                            <td class="px-4 py-2.5">Pemrograman Laravel</td>
                            <td class="px-4 py-2.5">Ahmad Fauzi</td>
                            <td class="px-4 py-2.5">Kartun</td>
                            <td class="px-4 py-2.5"><span class="text-green-500">Tersedia</span></td>
                            <td class="px-4 py-2.5">
                                <button
                                    class="transition-all duration-200 cursor-pointer bg-orange-500 hover:bg-orange-600 text-light7 px-3 py-1 rounded-md text-[13px] mr-1">Edit</button>
                                <button
                                    class="transition-all duration-200 cursor-pointer bg-red-500 hover:bg-red-600 text-light7 px-3 py-1 rounded-md text-[13px]">Delete</button>
                            </td>
                        </tr>
                        <tr class="border-b border-light5 dark:border-dark5">
                            <td class="px-4 py-2.5">3</td>
                            <td class="px-4 py-2.5">Pemrograman Laravel</td>
                            <td class="px-4 py-2.5">Ahmad Fauzi</td>
                            <td class="px-4 py-2.5">Romance</td>
                            <td class="px-4 py-2.5"><span class="text-green-500">Tersedia</span></td>
                            <td class="px-4 py-2.5">
                                <button
                                    class="transition-all duration-200 cursor-pointer bg-orange-500 hover:bg-orange-600 text-light7 px-3 py-1 rounded-md text-[13px] mr-1">Edit</button>
                                <button
                                    class="transition-all duration-200 cursor-pointer bg-red-500 hover:bg-red-600 text-light7 px-3 py-1 rounded-md text-[13px]">Delete</button>
                            </td>
                        </tr>
                        <tr class="border-b border-light5 dark:border-dark5">
                            <td class="px-4 py-2.5">4</td>
                            <td class="px-4 py-2.5">Pemrograman Laravel</td>
                            <td class="px-4 py-2.5">Ahmad Fauzi</td>
                            <td class="px-4 py-2.5">Fiksi</td>
                            <td class="px-4 py-2.5"><span class="text-green-500">Tersedia</span></td>
                            <td class="px-4 py-2.5">
                                <button
                                    class="transition-all duration-200 cursor-pointer bg-orange-500 hover:bg-orange-600 text-light7 px-3 py-1 rounded-md text-[13px] mr-1">Edit</button>
                                <button
                                    class="transition-all duration-200 cursor-pointer bg-red-500 hover:bg-red-600 text-light7 px-3 py-1 rounded-md text-[13px]">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="content-change" class="hidden mt-6 px-1">
            <form method="POST" action="#" enctype="#">
                @csrf
                <div class="grid grid-cols-2 gap-y-4 gap-x-5 text-[15px] mb-6">
                    <div>
                        <label for="title" class="block mb-1.5 font-semibold">Judul Buku</label>
                        <input type="text" id="title" name="title"
                            class="w-full py-2.5 px-4 rounded-md border border-light5 dark:border-dark5 text-light3 dark:text-dark3 focus:outline-none focus:border-light1 dark:focus:border-dark1 hover:border-light1 dark:hover:border-dark1 transition-all duration-200"
                            placeholder="Masukkan judul buku" required />
                    </div>
                    <div>
                        <label for="author" class="block mb-1.5 font-semibold">Penulis</label>
                        <input type="text" id="author" name="author"
                            class="w-full py-2.5 px-4 rounded-md border border-light5 dark:border-dark5 text-light3 dark:text-dark3 focus:outline-none focus:border-light1 dark:focus:border-dark1 hover:border-light1 dark:hover:border-dark1 transition-all duration-200"
                            placeholder="Masukkan penulis buku" required />
                    </div>
                    <div class="relative">
                        <label for="is_available" class="block mb-1.5 font-semibold">Status</label>
                        <select id="is_available" name="is_available"
                            class="w-full py-2.5 px-4 pr-10 rounded-md border border-light5 dark:border-dark5 text-light3 dark:text-dark3 bg-light7 dark:bg-dark7 appearance-none focus:outline-none focus:border-light1 dark:focus:border-dark1 hover:border-light1 dark:hover:border-dark1 transition-all duration-200">
                            <option value="1">Tersedia</option>
                            <option value="0">Tidak Tersedia</option>
                        </select>
                        <div
                            class="pointer-events-none absolute right-3 top-[50px] transform -translate-y-1/2 hover:text-light1 dark:hover:text-dark1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </div>
                    <div class="relative">
                        <label for="is_available" class="block mb-1.5 font-semibold">Kategori</label>
                        <select id="is_available" name="is_available"
                            class="w-full py-2.5 px-4 pr-10 rounded-md border border-light5 dark:border-dark5 text-light3 dark:text-dark3 bg-light7 dark:bg-dark7 appearance-none focus:outline-none focus:border-light1 dark:focus:border-dark1 hover:border-light1 dark:hover:border-dark1 transition-all duration-200">
                            <option value="0">Pilih Kategori</option>
                            <option value="1">Fiksi</option>
                            <option value="2">Kartun</option>
                            <option value="3">Romance</option>
                        </select>
                        <div
                            class="pointer-events-none absolute right-3 top-[50px] transform -translate-y-1/2 hover:text-light1 dark:hover:text-dark1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </div>
                    <div>
                        <label for="cover_image" class="block mb-1.5 font-semibold">Cover Buku</label>
                        <input type="file" id="cover_image" name="cover_image" accept="image/*"
                            class="w-full rounded-md border border-light5 dark:border-dark5 text-light3 dark:text-dark3 focus:outline-none focus:border-light1 dark:focus:border-dark1 hover:border-light1 dark:hover:border-dark1 file:mr-4 file:py-2.5 file:px-6 file:rounded-sm file:cursor-pointer file:border-0 file:bg-light5 file:text-light7 hover:file:bg-light1 dark:file:bg-dark5 dark:file:text-dark7 dark:hover:file:bg-dark1 cursor-pointer file:transition-all file:duration-200 transition-all duration-200"
                            required />
                    </div>
                </div>

                <button type="submit"
                    class="px-4 py-2.5 w-full rounded-md cursor-pointer text-[16px] font-raleway font-semibold text-light7 bg-light1 hover:bg-light2 dark:text-dark7 dark:bg-dark1 dark:hover:bg-dark2 transition duration-200">
                    Tambahkan Buku Baru </button>
            </form>
        </div>
    </section>

@endsection
