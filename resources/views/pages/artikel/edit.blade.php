@extends('layouts.dashboard')

@section('title', 'Edit ' . $artikel->judul)
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('artikel.update', $artikel) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="foto">Thumbnail</label>
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
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"
                            name="judul" value="{{ old('judul', $artikel->judul) }}">

                        @error('judul')
                            <div class="alert alert-danger alert-dismissible fade show mt-2 mb-0" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" class="form-control @error('kategori') is-invalid @enderror" id="kategori"
                            name="kategori" value="{{ old('kategori', $artikel->kategori) }}">

                        @error('kategori')
                            <div class="alert alert-danger alert-dismissible fade show mt-2 mb-0" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="isi">Konten</label>
                        <textarea class="form-control @error('isi') is-invalid @enderror" name="isi" id="isi">{{ old('isi', $artikel->isi) }}</textarea>

                        @error('isi')
                            <div class="alert alert-danger alert-dismissible fade show mt-2 mb-0" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-center mt-5">
                        <a href="{{ route('admin.artikel') }}" class="btn btn-secondary mr-3">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection

@push('styles')
@endpush

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#isi'), {
                toolbar: ["undo", "redo", "heading", "bold", "italic", "blockQuote", "link", "numberedList",
                    "bulletedList"
                ],
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
