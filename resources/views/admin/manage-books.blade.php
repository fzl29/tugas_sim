@extends('layouts.master-admin')

@section('title', 'SiPus Digital - Manage Buku')

@section('content')

<x-title title="Manage Buku" subtitle="Kelola Buku" />

<section class="px-6 pt-4 pb-6 rounded-md bg-light7 dark:bg-dark7 text-light4 dark:text-dark4 border border-light5 dark:border-dark5">
    
    <x-tab-switcher default="Data Buku" change="Create Buku" />

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
                        <td class="px-4 py-2.5"><span class="text-red-500">Tidak Tersedia</span></td>
                        <td class="px-4 py-2.5">
                            <button class="transition-all duration-200 cursor-pointer bg-orange-500 hover:bg-orange-600 text-light7 px-3 py-1 rounded-md text-[13px] mr-1">Edit</button>
                            <button class="transition-all duration-200 cursor-pointer bg-red-500 hover:bg-red-600 text-light7 px-3 py-1 rounded-md text-[13px]">Delete</button>
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
                <x-form.input-field name="title" label="Judul Buku" place="Masukkan judul buku" />
                <x-form.input-field name="author" label="Penulis Buku" place="Masukkan penulis buku" />
                <x-form.input-select name="status" label="Status Buku" name="Tersedia" :options="[1 => 'Tidak Tersedia']" :required="false"/>
                <x-form.input-select name="category" label="Kategori Buku" name="Pilih Kategori" :options="[1 => 'Fiksi', 2 => 'Kartun', 3 => 'Romance']" :required="true"/>
                <x-form.input-file name="cover_image" label="Cover Buku" />
            </div>
            <x-form.button-submit name="Tambahkan Buku Baru" />
        </form>
    </div>
</section>

@endsection
