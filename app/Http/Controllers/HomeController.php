<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{
    /**
     * Menampilkan Welcome dan menarik data buku.
     */
    public function index()
    {
        $books = Book::latest()->take(10)->get(); 
        return view('welcome', compact('books'));
    }
}
