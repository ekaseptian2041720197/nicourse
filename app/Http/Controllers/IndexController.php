<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //Menampilkan Halaman Utama 
    public function index()
    {
        return view('home.index', [
            'title' => 'Home',    
        ]);
    }
}
