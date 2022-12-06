@extends('layouts.dashboard')

@section('title', 'Edit Data ' . $guru->nama)
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('guru.update', $guru) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" id="foto">

                        @error('foto')
                            <div class="alert alert-danger alert-dismissible fade show mt-2 mb-0" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                            id="nama" name="nama" value="{{ old('nama', $guru->nama) }}">

                        @error('nama')
                            <div class="alert alert-danger alert-dismissible fade show mt-2 mb-0" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="komli">Kompetensi Keahlian</label>
                        <input type="text" class="form-control @error('komli') is-invalid @enderror" id="komli" name="komli" value="{{ old('komli', $guru->komli) }}">

                        @error('komli')
                            <div class="alert alert-danger alert-dismissible fade show mt-2 mb-0" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="text" class="form-control @error('telepon') is-invalid @enderror" id="telepon" name="telepon" value="{{ old('telepon', $guru->telepon) }}">

                        @error('telepon')
                            <div class="alert alert-danger alert-dismissible fade show mt-2 mb-0" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" rows="3" name="alamat">{{ old('alamat', $guru->alamat) }}</textarea>

                        @error('alamat')
                            <div class="alert alert-danger alert-dismissible fade show mt-2 mb-0" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-center mt-5">
                        <a href="{{ route('admin.guru') }}" class="btn btn-secondary mr-3">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
