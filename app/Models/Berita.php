<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    protected $fillable = [
        'judul_berita',
        'jenis_berita_id',
        'isi_berita',
    ];

    public function jenisBerita()
    {
        return $this->belongsTo(JenisBerita::class, 'jenis_berita_id');
    }
}
