<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index() {
        return view('home'); // Hanya menampilkan home.blade.php
    }
}
