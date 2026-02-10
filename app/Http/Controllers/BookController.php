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
}
