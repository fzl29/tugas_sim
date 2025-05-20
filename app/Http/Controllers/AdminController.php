<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    // Menampilkan halaman profile
    public function showProfile()
    {
        $admin = Auth::user(); // Ambil data admin yang sedang login
        return view('admin.profile', compact('admin'));
    }

    // Update profile (email, phone, avatar)
    public function updateProfile(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'phone' => 'nullable|digits_between:10,15',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $admin = Auth::user();

        // Update avatar jika ada
        if ($request->hasFile('avatar')) {
            // Hapus avatar lama jika ada
            if ($admin->avatar && !str_contains($admin->avatar, 'assets/images/avatar.png')) {
                Storage::disk('public')->delete(str_replace('storage/', '', $admin->avatar));
            }

            // Simpan avatar baru
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $admin->avatar = 'storage/' . $avatarPath;
        }

        // Update email dan phone
        /** @var \App\Models\User $admin */
        $admin = Auth::user();

        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->save(); // Simpan perubahan

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

        $admin = Auth::user();

        // Cek password lama
        if (!Hash::check($request->input('current-password'), $admin->password)) {
            return back()->withErrors(['current-password' => 'Password lama tidak sesuai.']);
        }

        // Update password baru
        /** @var \App\Models\User $admin */
        $admin = Auth::user();
        
        $admin->password = Hash::make($request->input('password-new'));
        $admin->save(); // Simpan perubahan

        return back()->with('success', 'Password berhasil diperbarui.');
    }

    public function manageQueues()
    {
        $queues = \App\Models\Queue::with(['user', 'book'])
            ->orderBy('loan_date', 'desc')
            ->get();
        return view('admin.manage-queues', compact('queues'));
    }

    public function rejectQueue($id)
    {
        $queue = \App\Models\Queue::findOrFail($id);
        $queue->status = 'ditolak';
        $queue->save();

        \App\Models\Loan::where('queue_id', $queue->id)->update(['status' => 'ditolak']);
        \App\Models\Book::where('id', $queue->book_id)->update(['is_available' => true]);

        return back()->with('success', 'Antrian ditolak!');
    }

    public function approveQueue($id)
    {
        $queue = \App\Models\Queue::findOrFail($id);
        $queue->status = 'disetujui';
        $queue->save();

        // Ubah status loan jadi Dipinjam
        \App\Models\Loan::where('queue_id', $queue->id)->update(['status' => 'Dipinjam']);

        return back()->with('success', 'Antrian disetujui!');
    }
}