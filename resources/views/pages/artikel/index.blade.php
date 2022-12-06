@extends('layouts.main')

@section('title', 'Artikel')

@section('content')

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row g-5">

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                    <div class="row gy-5 posts-list">

                        @forelse ($dataArtikel as $artikel)
                            <div class="col-lg-6">
                                <article class="d-flex flex-column">

                                    <div class="post-img">
                                        <img style="width: 100%" src="{{ Storage::url('public/artikel/') . $artikel->foto }}" alt=""
                                            class="img-fluid">
                                    </div>

                                    <h2 class="title">
                                        <a href="{{ route('artikel.show', $artikel->slug) }}">{{ $artikel->judul }}</a>
                                    </h2>

                                    <div class="meta-top">
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                    href="{{ route('artikel.author', $artikel->user_id) }}">{{ $artikel->user->name }}</a></li>
                                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time
                                                        datetime="{{ date('Y-m-d', strtotime($artikel->created_at)) }}">{{ date('M d, Y', strtotime($artikel->created_at)) }}</time></li>
                                        </ul>
                                    </div>

                                    <div class="content">
                                        {!! $artikel->isi !!}
                                    </div>

                                    <div class="read-more mt-auto align-self-end">
                                        <a href="{{ route('artikel.show', $artikel->slug) }}">Read More <i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>

                                </article>
                            </div><!-- End post list item -->
                        @empty
                            <p class="text-muted text-center">Tidak ada data!</p>
                        @endforelse

                    </div><!-- End blog posts list -->

                    <div class="my-5 d-flex justify-content-center">
                        {{ $dataArtikel->links() }}
                    </div>

                </div>

                @include('includes.sidebar')
            </div>

        </div>
    </section><!-- End Blog Section -->
@endsection
