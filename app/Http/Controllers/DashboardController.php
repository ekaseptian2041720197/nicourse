<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Halaman Dashboard
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard'    
        ]);
    }
}
