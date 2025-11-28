<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\JenisBerita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index() {
        
        $dataBerita = Berita::with('jenisBerita')->get();
        return view('berita.index', compact('dataBerita'));
    }

    public function create() {
        $jenisBeritaData = JenisBerita::get();
        $jenisForm = 'create';
        return view('berita.form', compact('jenisBeritaData', 'jenisForm'));
    }
    
    public function store(Request $request) {
        // Validation rules can be added here
        $request->validate([
            'judul_berita' => 'required|string|max:255',
            'jenis_berita_id' => 'required|exists:jenis_berita,id',
            'isi_berita' => 'required|string',
        ]);

        Berita::create($request->all());

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }


    public function edit($id) {
        $berita = Berita::findOrFail($id);
        $jenisBeritaData = JenisBerita::get();
        $jenisForm = 'edit';
        return view('berita.form', compact('berita', 'jenisBeritaData', 'jenisForm'));
    }
    
    public function update(Request $request, $id) {
        $request->validate([
            'judul_berita' => 'required|string|max:255',
            'jenis_berita_id' => 'required|exists:jenis_berita,id',
            'isi_berita' => 'required|string',
        ]);

        $berita = Berita::findOrFail($id);
        $berita->update($request->all());

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui.');
    }
    
    public function destroy($id) {
        $berita = Berita::findOrFail($id);
        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}
