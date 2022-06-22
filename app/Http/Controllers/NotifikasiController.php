<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    //Notifikasi
    public function index()
    {
        return view('notif',[
            'title' => 'Notifikasi'
        ]);
    }

    //Notifikasi Edit
    public function indexedit()
    {
        return view('notifedit',[
            'title' => 'Notifikasi'
        ]);
    }
}
