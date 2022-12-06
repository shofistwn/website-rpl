@extends('layouts.dashboard')

@section('title', 'Artikel')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
            <a href="{{ route('artikel.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Buat Artikel</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar @yield('title')</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Kontributor</th>
                                <th>Kategori</th>
                                <th>Tanggal Publikasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Judul</th>
                                <th>Kontributor</th>
                                <th>Kategori</th>
                                <th>Tanggal Publikasi</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @forelse ($dataArtikel as $artikel)
                                <tr>
                                    <td>{{ $artikel->judul }}</td>
                                    <td>{{ $artikel->user->name }}</td>
                                    <td>{{ $artikel->kategori }}</td>
                                    <td>{{ $artikel->created_at }}</td>
                                    <td>
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('artikel.destroy', $artikel) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a class="btn btn-primary"
                                                href="{{ route('artikel.edit', $artikel->id) }}">Edit</a>

                                            <button class="btn btn-danger" type="submit">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Tidak ada data!</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
