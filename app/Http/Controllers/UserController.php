<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    // Menampilkan halaman profile
    public function showProfile()
    {
        $user = Auth::user(); // Ambil data user yang sedang login
        return view('user.profile', compact('user'));
    }

    // Update profile (email, phone, avatar)
    public function updateProfile(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'phone' => 'nullable|digits_between:10,15',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user = Auth::user();

        // Update avatar jika ada
        if ($request->hasFile('avatar')) {
            // Hapus avatar lama jika ada
            if ($user->avatar && !str_contains($user->avatar, 'assets/images/avatar.png')) {
                Storage::disk('public')->delete(str_replace('storage/', '', $user->avatar));
            }

            // Simpan avatar baru
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = 'storage/' . $avatarPath;
        }

        // Update email dan phone
        /** @var \App\Models\User $user */
        $user = Auth::user();

        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        return back()->with('success', 'Profile berhasil diperbarui.');
    }

    // Update password
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current-password' => 'required',
            'password-new' => 'required|min:8|confirmed',
        ], [
            'current-password.required' => 'Password lama wajib diisi.',
            'password-new.required' => 'Password baru wajib diisi.',
            'password-new.min' => 'Password baru harus minimal 8 karakter.',
            'password-new.confirmed' => 'Konfirmasi password baru tidak cocok.',
        ]);

        $user = Auth::user();

        // Cek password lama
        if (!Hash::check($request->input('current-password'), $user->password)) {
            return back()->withErrors(['current-password' => 'Password lama tidak sesuai.']);
        }

        // Update password baru
        /** @var \App\Models\User $user */
        $user = Auth::user();
        
        $user->password = Hash::make($request->input('password-new'));
        $user->save(); // Simpan perubahan

        return back()->with('success', 'Password berhasil diperbarui.');
    }
}
