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
     * Display a listing of the books.
     */
    public function index()
    {
        $books = Book::with('category')->latest()->get();
        $categories = Category::orderBy('created_at', 'asc')->get(); 

        return view('admin.manage-books', compact('books', 'categories'));
    }

    /**
     * Store a newly created book in storage.
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
     * Show the form for editing the specified book.
     */
    public function edit(Book $book)
    {
        $categories = Category::orderBy('name')->get();
        return view('admin.edit-book', compact('book', 'categories'));
    }

    /**
     * Update the specified book in storage.
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
     * Remove the specified book from storage.
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
}
