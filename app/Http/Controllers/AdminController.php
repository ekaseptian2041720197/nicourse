<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AdminController extends Controller
{
    // Show Admin
    public function showadmin()
    {
        return view('admin.index', [
            'title' => 'Admin',
            'user' => DB::table('users')->where('role', 'admin')->get()
        ]);
    }

    // Add Admin
    public function addadmin()
    {
        return view('admin.addindex', [
            'title' => 'Add Admin'
        ]);
    }

    public function storeadmin(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8'
        ]);

        $request['password'] = bcrypt($request['password']);
        $request['role'] = 'admin';
        $request['verify'] = 1;

        //fungsi eloquent untuk menambah data
        User::create($request->all());
        return redirect('/showadmin')->with(['success' => 'Data Admin Berhasil Ditambah']);
    }

    // Edit Admin
    public function edit($id)
    {
        return view("admin.editindex", [
            'title' => 'Edit Admin',
            'user' => User::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5',
            'email' => 'required|email:dns',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->save();

        return redirect('/showadmin')->with(['success' => 'Data Admin Berhasil Diperbarui']);
    }

    // Delete Admin
    public function delete(Request $request)
    {
        User::destroy($request->id);
        return redirect()->back()
            ->with(['success' => 'Data Admin Berhasil Dihapus']);
    }
}
