<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;


class BookController extends Controller
{
    public function index(){
    $allBook = Book::all();
        return view('book_view', ['data' => $allBook]);
    }

        public function create()
    {
        return view('books.create');
    }

    // Simpan buku ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required|numeric',
            'stock' => 'required|numeric'
        ]);

        // Simpan ke database
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
            'stock' => $request->stock
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Buku berhasil ditambahkan!');
    }
}
