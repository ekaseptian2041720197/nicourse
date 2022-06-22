<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kategori;

class KategoriController extends Controller
{
    // Show Kategori
    public function showkategori()
    {
        return view('category.index', [
            'title' => 'Kategori',
            'kategori' => DB::table('kategori')->get()
        ]);
    }

    // Store Add
    public function storekategori(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'name' => 'required',
        ]);
        //fungsi eloquent untuk menambah data
        kategori::create($request->all());
        return redirect('/showkategori')->with(['success' => 'Data Kategori Berhasil Ditambah']);
    }

    // Store Update
    public function updatekategori(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'name' => 'required'
        ]);

        $kategori = kategori::find($id);
        $kategori->update($request->all());
        $kategori->save();

        return redirect('/showkategori')->with(['success' => 'Data Kategori Berhasil Diperbarui']);
    }

    // Delete Admin
    public function delete(Request $request)
    {
        kategori::destroy($request->id);
        return redirect()->back()
            ->with(['success' => 'Data Kategori Berhasil Dihapus']);
    }
}
