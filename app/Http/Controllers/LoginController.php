<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('formlogin', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->verify === 0) {
                Auth::logout();
                return redirect('/notif')->with('loginError');
            }
            if (auth()->user()->role == 'admin')
                return redirect()->intended('/dashboard');
            else
                return redirect()->intended('/lms');
        }

        return back()->with('loginError', 'Login Gagal! Anda Belum Registrasi');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/login');
    }

    public function verify(Request $request, User $user)
    {

        $user = User::find($request)->first();
        if ($user) {
            $user->verify = '1';
            $user->save();
        }

        return redirect('/showuser')->with(['success' => 'User Berhasil Diverifikasi']);
    }

    public function block(Request $request)
    {

        $user = User::find($request)->first();
        if ($user) {
            $user->verify = '0';
            $user->save();
        }

        return redirect('/showuser')->with(['success' => 'User Berhasil Diblock']);
    }
}
