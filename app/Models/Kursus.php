<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    protected $table = "kursus";
    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->belongsTo('App\Kategori');
    }

    use HasFactory;

    protected $fillable = [
        'judul',
        'subjudul',
        'deskripsi',
        'kategori_id',
        'level_id',
    ];
}
