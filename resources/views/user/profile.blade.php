@extends('layouts.master-user')

@section('title', 'SiPus Digital - Profile')

@section('content')

@include('components.title', ['title' => 'Profile', 'subtitle' => 'Data Pribadi'])

<section class="px-6 pt-4 pb-6 rounded-md bg-light7 dark:bg-dark7 text-light4 dark:text-dark4 border border-light5 dark:border-dark5">
    <div class="flex font-raleway font-semibold">
        <button id="tab-default" class="tab-button cursor-pointer py-2 px-3 border-b-2 hover:text-light1 hover:border-b-light1 dark:hover:text-dark1 dark:hover:border-b-dark1 border-transparent transition-all duration-200" onclick="showTab('default')">Info Account</button>
        <button id="tab-change" class="tab-button cursor-pointer py-2 px-3 border-b-2 hover:text-light1 hover:border-b-light1 dark:hover:text-dark1 dark:hover:border-b-dark1 border-transparent transition-all duration-200" onclick="showTab('change')">Password Settings</button>
    </div>

    <div id="content-default" class="px-1">
        <div class="flex justify-end space-x-3 text-[15px]">
            <button type="button" id="edit-btn" class="cursor-pointer px-6 py-2 bg-orange-500 text-light7 rounded-md hover:bg-orange-600 transition-all duration-200">Edit</button>
            <button type="button" id="cancel-btn" class="cursor-pointer px-6 py-2 bg-red-500 text-light7 rounded-md hover:bg-red-600 transition-all duration-200 hidden">Cancel</button>
        </div>
        <form id="profile-form" action="#" method="POST" enctype="multipart/form-data" onsubmit="return confirm('Yakin ingin mengupdate profile?')">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-[1fr_3.5fr] gap-5 items-center text-[15px]">
                <div class="flex flex-col items-center gap-3">
                    <img id="preview-avatar" src="{{ asset('assets/images/avatar.png') }}" alt="Foto Profil" class="w-[250px] h-[250px] rounded-full object-cover">
                    <input type="file" id="avatar" name="avatar" class="hidden" accept="image/*" onchange="previewAvatar(event)">
                    <button type="button" id="upload-button" class="cursor-pointer text-[13px] px-3 py-1.5 rounded-md bg-light5 text-light7 hover:bg-light1 dark:bg-dark5 dark:text-dark7 dark:hover:bg-dark1 transition-all duration-200 hidden">Pilih Foto</button>
                </div>
                <div>
                    <div class="grid grid-cols-2 gap-y-4 gap-x-5 text-[15px] mb-6">
                        @include('components.input-readonly', ['label' => 'Nama Lengkap', 'value' => ''])
                        @include('components.input-readonly', ['label' => 'Username', 'value' => ''])
                        @include('components.input-readonly', ['label' => 'NIM', 'value' => ''])
                        @include('components.input-editable', ['label' => 'Email', 'name' => 'email', 'value' => ''])
                        @include('components.input-editable', ['label' => 'No. HP', 'name' => 'phone', 'value' => ''])
                    </div>
                    <button type="submit" id="update-btn" class="hidden px-4 py-2.5 w-full rounded-md cursor-pointer text-[16px] font-raleway font-semibold text-light7 bg-light1 hover:bg-light2 dark:text-dark7 dark:bg-dark1 dark:hover:bg-dark2 transition duration-200">Update Profile</button>
                </div>
            </div>
        </form>
    </div>

    <div id="content-change" class="hidden mt-6 px-1">
        <form action="" method="">
            <div class="grid grid-cols-2 gap-y-4 gap-x-5 text-[15px] mb-6">
                @include('components.input-password', [ 'label' => 'Current Password', 'name' => 'current-password', 'place' => 'Masukkan password lama'])
                <span></span>
                @include('components.input-password', [ 'label' => 'New Password', 'name' => 'password-new', 'place' => 'Masukkan password baru'])
                @include('components.input-password', [ 'label' => 'Confirm New Password', 'name' => 'password-new-confirm', 'place' => 'Masukkan password baru kembali'])
            </div>
            <button type="submit" class="px-4 py-2.5 w-full rounded-md cursor-pointer text-[16px] font-raleway font-semibold text-light7 bg-light1 hover:bg-light2 dark:text-dark7 dark:bg-dark1 dark:hover:bg-dark2 transition duration-200"> Update Password </button>
        </form>
    </div>
</section>

@endsection
