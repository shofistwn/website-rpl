@extends('layouts.dashboard')

@section('title', 'Posting Loker')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('loker.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="nama">Nama Perusahaan</label>
                        <input type="text" class="form-control @error('nama_perusahaan') is-invalid @enderror"
                            id="nama" name="nama_perusahaan" value="{{ old('nama_perusahaan') }}">

                        @error('nama_perusahaan')
                            <div class="alert alert-danger alert-dismissible fade show mt-2 mb-0" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="loker">Loker</label>
                        <input type="text" class="form-control @error('loker') is-invalid @enderror" id="loker" name="loker" value="{{ old('loker') }}">

                        @error('loker')
                            <div class="alert alert-danger alert-dismissible fade show mt-2 mb-0" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">

                        @error('email')
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
                        <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" rows="3" name="alamat">{{ old('alamat') }}</textarea>

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
                        <a href="{{ route('admin.loker') }}" class="btn btn-secondary mr-3">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
