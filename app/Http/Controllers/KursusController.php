<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Kursus;
use App\Models\Kategori;
use App\Models\Level;

class KursusController extends Controller
{
    public function index()
    {
        $kategori = DB::table('kategori')->get();

        $level = DB::table('level')->get();
        return view('course.index', [
            'title' => 'Index',
            'kategori' => $kategori,
            'level' => $level,
        ]);
    }
    
    // Show Course Basic
    public function basic()
    {
        $kategori = DB::table('kategori')->get();

        $level = DB::table('level')->get();

        // $kategori;
        return view('course.indexbasic', [
            'title' => 'Basic',
            'kategori' => $kategori,
            'level' => $level,
        ]);
    }

    // Store Basic
    public function storebasic(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'judul' => 'required',
            'subjudul' => 'required',
            'deskripsi' => 'required',
            'kategori_id' => 'required',
            'level' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        DB::table('kursus')->insert([
            "judul" =>  $request->judul,
            "subjudul" =>  $request->subjudul,
            "deskripsi" =>  $request->deskripsi,
            "kategori_id" =>  $request->kategori_id,
            "level" =>  $request->level,
        ]);
        return redirect()->back()
            ->with(['success' => 'Data Basic Berhasil Ditambahkan']);
    }

    // Show Course Requirements
    public function requirements()
    {
        $kursus = DB::table('kursus')->get();
        return view('course.indexrequirements', [
            'title' => 'Requirements',
            'kursus' => $kursus
        ]);
    }

    // Store Basic
    public function storerequirements(Request $request, $id)
    {
        $kursus = Kursus::find($id);
        //melakukan validasi data
        $request->validate([
            'requirements' => 'required',
        ]);

        Kursus::create($request->all());

        return redirect()->back()
            ->with(['success' => 'Data Requirements Berhasil Ditambahkan']);
    }

    // Show Course Outcomes
    public function outcomes()
    {
        return view('course.indexoutcomes', [
            'title' => 'Outcomes',
        ]);
    }

    // Show Course Pricing
    public function pricing()
    {
        return view('course.indexpricing', [
            'title' => 'Pricing',
        ]);
    }

    // Show Course Media
    public function media()
    {
        return view('course.indexmedia', [
            'title' => 'Media',
        ]);
    }
}
