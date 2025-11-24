<?php

namespace App\Http\Controllers;

use App\Models\JenisBerita;
use Illuminate\Http\Request;

class JenisBeritaController extends Controller
{
    

    public function index()
    {
        $jenisBerita = JenisBerita::all();
        return view('jenis-berita.index', compact('jenisBerita'));
        
    }

    public function show(JenisBerita $jenisBerita) {
        return view('jenis-berita.show', compact('jenisBerita'));
    }

    public function create() {
        $jenisForm = 'create';
        return view('jenis-berita.form', compact('jenisForm'));
    }

    public function store(Request $request) {
        
        $request->validate([
            'nama_jenis_berita' => 'required',
        ]);
        
        JenisBerita::create([
            'nama_jenis_berita' => $request->nama_jenis_berita,
        ]);

        return redirect()->route('jenis-berita.index');
    }

    public function edit(JenisBerita $jenisBerita) {
        $jenisForm = 'edit';
        return view('jenis-berita.form', compact('jenisBerita', 'jenisForm'));
    }

    public function update(Request $request, JenisBerita $jenisBerita) {
        $request->validate([
            'nama_jenis_berita' => 'required',
        ]);
        
        $jenisBerita->update([
            'nama_jenis_berita' => $request->nama_jenis_berita,
        ]);

        return redirect()->route('jenis-berita.index');
    }

    public function destroy(JenisBerita $jenisBerita) {
        $jenisBerita->delete();
        return redirect()->route('jenis-berita.index');
    }
}
