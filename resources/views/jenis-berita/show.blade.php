@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Halaman Jenis Berita') }}</div>

                <div class="card-body">
                   
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Nama Jenis Berita</label>
    <div class="col-sm-6 pt-2">
        {{ $jenisBerita->nama_jenis_berita }}
    </div>
</div>
<a href="{{ route('jenis-berita.index') }}" class="btn btn-secondary ms-2">Kembali</a>
                   
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
