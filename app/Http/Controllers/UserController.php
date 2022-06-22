<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    // Tampil user
    public function showuser()
    {
        return view('admin.user.index', [
            'title' => 'User',
            'user' => DB::table('users')->where('role', 'user')->get()
        ]);
    }

    // Tambah user
    public function adduser()
    {
        return view('admin.user.addindex', [
            'title' => 'Tambah User'
        ]);
    }

    // Store User
    public function storeuser(Request $request)
    {
        $ValidatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|min:8'
        ]);

        $ValidatedData['password'] = bcrypt($ValidatedData['password']);
        $ValidatedData['role'] = 'user';
        $ValidatedData['verify'] = 1;

        User::create($ValidatedData);

        return redirect('/showuser')->with(['success' => 'Data User Berhasil Ditambah']);
    }

    // Edit Admin
    public function edituser($id)
    {
        return view("admin.user.editindex", [
            'title' => 'Edit User',
            'user' => User::find($id)
        ]);
    }

    // Store Update User
    public function updateuser(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|unique:users',
            'email' => 'required|email:dns|unique:users',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->save();

        return redirect('/showuser')->with(['success' => 'Data User Berhasil Diperbarui']);
    }

    // Store Delete User
    public function delete(Request $request)
    {
        User::destroy($request->id);
        return redirect()->back()
            ->with(['success' => 'Data User Berhasil Dihapus']);
    }
}
