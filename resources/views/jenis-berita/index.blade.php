@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Halaman Jenis Berita') }}</div>

                <div class="card-body">
                    <a href="{{ route('jenis-berita.create') }}" class="btn btn-primary">Tambah Jenis Berita</a>
                    <hr>
                   <table class="table">
                       <thead>
                           <tr>
                               <th>No</th>
                               <th>Nama Jenis Berita</th>
                               <th>Aksi</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach ($jenisBerita as $jenisBerita)
                               <tr>
                                   <td>{{ $loop->iteration }}</td>
                                   <td>{{ $jenisBerita->nama_jenis_berita }}</td>
                                   <td>
                                       <a href="{{ route('jenis-berita.show', $jenisBerita->id) }}" class="btn btn-info">Show</a>
                                       <a href="{{ route('jenis-berita.edit', $jenisBerita->id) }}" class="btn btn-primary">Edit</a>
                                       <form action="{{ route('jenis-berita.destroy', $jenisBerita->id) }}" method="POST" style="display: inline;">
                                           @csrf
                                           @method('DELETE')
                                           <button type="submit" class="btn btn-danger">Hapus</button>
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
