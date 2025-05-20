<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Menampilkan halaman manajemen buku (admin).
     */
    public function index()
    {
        $books = Book::with('category')->latest()->get();
        $categories = Category::orderBy('created_at', 'asc')->get(); 

        return view('admin.manage-books', compact('books', 'categories'));
    }

    /**
     * Menyimpan buku baru ke database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'is_available' => 'required|boolean',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('cover')) {
            $coverPath = $request->file('cover')->store('books', 'public');
            $validated['cover'] = $coverPath;
        }

        // Create the book
        $book = Book::create($validated);

        return redirect()->route('admin.manage-books')
            ->with('success', 'Buku <strong>' . e($book->title) . '</strong> berhasil ditambahkan!');
    }

    /**
     * Menampilkan form edit buku (admin).
     */
    public function edit(Book $book)
    {
        $categories = Category::orderBy('name')->get();
        return view('admin.edit-book', compact('book', 'categories'));
    }

    /**
     * Memperbarui data buku yang ada.
     */
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'is_available' => 'required|boolean',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('cover')) {
            // Delete old image if exists
            if ($book->cover) {
                Storage::disk('public')->delete($book->cover);
            }

            $coverPath = $request->file('cover')->store('books', 'public');
            $validated['cover'] = $coverPath;
        }

        $book->update($validated);

        return redirect()->route('admin.manage-books')
            ->with('success', 'Buku <strong>' . e($book->title) . '</strong> berhasil diperbarui!');
    }

    /**
     * Menghapus buku secara permanen.
     */
    public function destroy(Book $book)
    {
        if ($book->cover) {
            Storage::disk('public')->delete($book->cover);
        }

        $book->forceDelete(); // ini akan menghapus data dari DB secara permanen

        return redirect()->route('admin.manage-books')
            ->with('success', 'Buku <strong>' . e($book->title) . '</strong> berhasil dihapus!');
    }

    /**
     * Menampilkan daftar buku untuk user (dengan filter kategori).
     */
    public function listForUser(Request $request)
    {
        $categories = Category::orderBy('created_at', 'asc')->get();
        $categoryId = $request->query('category_id');

        // Buku sesuai filter kategori (atau semua jika kosong)
        $booksQuery = Book::with('category')->latest();
        if ($categoryId) {
            $booksQuery->where('category_id', $categoryId);
        }
        $books = $booksQuery->get();

        // Buku-buku per kategori (untuk section per kategori)
        $booksByCategory = [];
        foreach ($categories as $cat) {
            $booksByCategory[$cat->name] = Book::with('category')->where('category_id', $cat->id)->latest()->get();
        }

        // Urutkan kategori yang ada bukunya di atas
        $categories = $categories->sortByDesc(function ($cat) use ($booksByCategory) {
            return $booksByCategory[$cat->name]->count() > 0 ? 1 : 0;
        })->values();

        return view('user.books', compact('books', 'categories', 'booksByCategory', 'categoryId'));
    }
}
