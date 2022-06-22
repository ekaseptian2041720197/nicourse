<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('formregister', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|min:8'
        ]);

        $ValidatedData['password'] = bcrypt($ValidatedData['password']);

        User::create($ValidatedData);

        return redirect('/notif')->with('success');
    }
}
