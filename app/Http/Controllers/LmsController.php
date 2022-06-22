<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class LmsController extends Controller
{
    //Halaman LMS
    public function index()
    {
        return view('lms.index', [
            'title' => 'index',
            'user' => DB::table('users')->where('role', 'user')->get(),
            'kategori' => DB::table('kategori')->limit(5)->latest()->get()
        ]);
    }

    // Halaman Course
    public function course()
    {
        return view('lms.course', [
            'title' => 'course',
        ]);
    }
}
