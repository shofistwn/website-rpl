@extends('layouts.main')

@section('title', 'Guru')

@section('content')
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="row g-4">

                @forelse ($dataGuru as $guru)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member shadow-sm pb-4">
                            <div class="team-member">
                                <div class="member-img">
                                    <img src="{{ Storage::url('public/guru/') . $guru->foto }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="member-info">
                                    <h4>{{ $guru->nama }}</h4>
                                    <h6>{{ $guru->komli }}</h6>
                                    <span>{{ $guru->telepon }}</span>
                                    <span>{{ $guru->alamat }}</span>
                                </div>
                            </div>
                        </div><!-- End Team Member -->
                    </div>
                @empty
                    <p class="text-muted text-center">Tidak ada data!</p>
                @endforelse

            </div>
    </section><!-- End Team Section -->
@endsection
