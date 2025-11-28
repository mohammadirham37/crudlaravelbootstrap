@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>{{ $jenisForm == 'create' ? 'Tambah Berita' : 'Edit Berita' }}</h2>
    <form action="{{ $jenisForm == 'create' ? route('berita.store') : route('berita.update', $berita->id) }}" method="POST">
        @csrf
        @if($jenisForm == 'edit')
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="judul_berita">Judul Berita</label>
            <input type="text" class="form-control" id="judul_berita" name="judul_berita" value="{{ old('judul_berita', $berita->judul_berita ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="jenis_berita_id">Jenis Berita</label>
            <select class="form-control" id="jenis_berita_id" name="jenis_berita_id" required>
                <option value="">Pilih Jenis Berita</option>
                @foreach($jenisBeritaData as $jenis)
                    <option value="{{ $jenis->id }}" {{ old('jenis_berita_id', ($berita->jenis_berita_id ?? '')) == $jenis->id ? 'selected' : '' }}>{{ $jenis->nama_jenis_berita }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="isi_berita">Isi Berita</label>
            <textarea class="form-control" id="isi_berita" name="isi_berita" rows="5" required>{{ old('isi_berita', $berita->isi_berita ?? '') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('berita.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
