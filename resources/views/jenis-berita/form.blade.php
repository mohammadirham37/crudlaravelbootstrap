@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Halaman Jenis Berita') }}</div>

                <div class="card-body">
                   
                   @if ($jenisForm == 'create')
    <form action="{{ route('jenis-berita.store') }}" method="POST" class="mt-4">
@else
    <form action="{{ route('jenis-berita.update', $jenisBerita->id) }}" method="POST" class="mt-4">
@endif
    @csrf
    @if ($jenisForm == 'edit')
        @method('PUT')
    @endif
    <div class="mb-3 row">
        <label for="nama_jenis_berita" class="col-sm-2 col-form-label">Nama Jenis Berita</label>
        <div class="col-sm-6">
            <input type="text" class="form-control @error('nama_jenis_berita') is-invalid @enderror" id="nama_jenis_berita" name="nama_jenis_berita" value="{{ old('nama_jenis_berita', $jenisForm == 'edit' ? $jenisBerita->nama_jenis_berita : '') }}" placeholder="Masukkan nama jenis berita">
            @error('nama_jenis_berita')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-6 offset-sm-2">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('jenis-berita.index') }}" class="btn btn-secondary ms-2">Batal</a>
        </div>
    </div>
</form>
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
