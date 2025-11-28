@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Halaman Berita') }}</div>

                <div class="card-body">
                    <a href="{{ route('berita.create') }}" class="btn btn-primary">Tambah Berita</a>
                    <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Jenis Berita</th>
                                <th>Isi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dataBerita as $berita)
                            <tr>
                                <td>{{ $berita->judul_berita }}</td>
                                <td>{{ $berita->jenisBerita->nama_jenis_berita ?? 'Tidak ada' }}</td>
                                <td>{{ Str::limit($berita->isi_berita, 100) }}</td>
                                <td>
                                    <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection