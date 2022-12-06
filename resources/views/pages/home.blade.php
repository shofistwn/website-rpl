@extends('layouts.main')

@section('title', 'Home')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <h2 data-aos="fade-up">Selamat Datang!</h2>
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Why Choose Us Section ======= -->
        <section id="why-us" class="">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Visi</h2>

                </div>

                <div class="gy-5" data-aos="fade-up" data-aos-delay="200">
                    <p class="col-md-8 lead mx-auto text-center">
                        <i>
                            “MENJADI PROGRAM STUDI YANG BERDAYA SAING DI BIDANG
                            REKAYASA
                            PERANGKAT LUNAK PADA SMART SYSTEM DAN BERJIWA TECHNOPRENEURSHIP.“
                        </i>
                    </p>
                </div>

            </div>
        </section><!-- End Why Choose Us Section -->

        <!-- ======= Our Services Section ======= -->
        <section id="services-list" class="services-list" style="margin-top: -70px; margin-bottom: -150px">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Misi</h2>

                </div>

                <div class="gy-5 col-md-8 mx-auto" data-aos="fade-up" data-aos-delay="200">
                    <ol class="lead">
                        <li class="mb-2">Menyelenggarakan pendidikan berkualitas di bidang Rekayasa Perangkat Lunak yang
                            berorientasi
                            pada pengembangan smart system dan technopreneurship
                        </li>

                        <li class="mb-2">Mengembangkan Perangkat lunak yang inovatif, bermutu, bermanfaat, dan
                            berkelanjutan serta
                            melakukan hilirisasi di bidang Rekayasa Perangkat Lunak.
                        </li>

                        <li class="mb-2">Secara aktif melakukan usaha penyebaran dan penerapan produk-produk dan keilmuan
                            di bidang
                            Rekayasa Perangkat Lunak.
                        </li>

                        <li>Mendidik Pribadi yang berjiwa Technopreneurship, Disiplin tinggi, bertanggung
                            jawab, jujur,
                            santun dan berakhlak mulia.
                        </li>
                    </ol>
                </div>

            </div>
        </section><!-- End Our Services Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="details">
                <div class="container" data-aos="fade-up" data-aos-delay="300">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <h4 class="text-center">Sejarah RPL SMKN 2 Trenggalek</h4>
                            <div class="icon-list">
                                <span>Kompetensi keahlian atau sekarang menjadi Konsentrasi Keahlian RPL (Rekayasa Perangkat
                                    Lunak) SMKN 2 Trenggalek didirikan pada tahun 2011.
                                    <br>
                                    <br>
                                    Bulan juli tahun 2011 Komli RPL memiliki Murid Angkatan pertama sebanyak 35 Siswa dan
                                    tengah perjalanan bulan juli - agustus 2011 jumlah siswa menjadi 34 karena ada siswa
                                    yang mutasi.
                                    <br>
                                    <br>
                                    Pada saat itu komli RPL masih belum memiliki fasilitas layaknya jurusan
                                    yang lain, komli RPL masih
                                    menggunakan fasilitas lab Komputer yang biasanya digunakan mata pelajaran KKPI yang
                                    sekarang berubah menjadi Teknologi Informasi, RPL Angkatan pertama memilik guru 3 dan 1
                                    Laboran yaitu:

                                    <ul class="my-4">
                                        <li>Ivans Zuwanta, S. Kom (Kakomli / Guru)</li>
                                        <li>Hery Wahyu Dwiantoro, S.T (Guru)</li>
                                        <li>Imam Mukhlis S, Amd. Kom (Guru)</li>
                                        <li>Neni (laboran)</li>
                                    </ul>

                                    Untuk Angkatan ke-2 RPL memiliki jumlah siswa 72 siswa pada tahun ajaran 2012-2013,
                                    rombel menjadi 2 kelas. Untuk tahun ajaran 2013-2014 sampai sekarang rombel RPL menjadi
                                    3 kelas dengan total keseluruhan 108 siswa perangkatan.
                                    <br>
                                    <br>
                                    Fasilitas Lab Komputer juga
                                    mengalami perubahan yang sangat pesat dari 1 Lab sekarang mejadi 4 Lab dengan fasilitas
                                    yang sesuai dengan pemerintahan.
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section><!-- End Features Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-posts" class="recent-posts team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Logo RPL</h2>

                </div>

                <div class="row gy-5">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member shadow-sm pb-4">
                            <div class="team-member">
                                <div class="member-img">
                                    {{-- <img src="{{ Storage::url('public/guru/') . guru->foto }}" class="img-fluid"
                                        alt=""> --}}
                                </div>
                                <div class="member-info">
                                    <h4>TAHUN 2011-2013</h4>
                                </div>
                            </div>
                        </div><!-- End Team Member -->
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member shadow-sm pb-4">
                            <div class="team-member">
                                <div class="member-img">
                                    {{-- <img src="{{ Storage::url('public/guru/') . guru->foto }}" class="img-fluid"
                                        alt=""> --}}
                                </div>
                                <div class="member-info">
                                    <h4>TAHUN 2011-Sekarang</h4>
                                </div>
                            </div>
                        </div><!-- End Team Member -->
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member shadow-sm pb-4">
                            <div class="team-member">
                                <div class="member-img">
                                    {{-- <img src="{{ Storage::url('public/guru/') . guru->foto }}" class="img-fluid"
                                        alt=""> --}}
                                </div>
                                <div class="member-info">
                                    <h4>Redesign Logo</h4>
                                </div>
                            </div>
                        </div><!-- End Team Member -->
                    </div>

                </div>

            </div>
        </section><!-- End Recent Blog Posts Section -->
    @endsection
