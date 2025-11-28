<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisBerita extends Model
{
    protected $table = 'jenis_berita';
    protected $fillable = [
        'nama_jenis_berita',
    ];


    public function berita()
    {
        return $this->hasMany(Berita::class, 'jenis_berita_id');
    }
}
