<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="{{ route('index') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center">RPL</h1>
    </a>

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a href="{{ route('index') }}" class="active">Home</a></li>
            <li class="dropdown"><a href="#"><span>Kompetensi</span> <i
                        class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                    <li><a href="{{ route('kompetensi.pemrograman-dasar') }}">Pemrograman Dasar</a></li>
                    <li><a href="{{ route('kompetensi.komputer-dan-jaringan-dasar') }}">Komputer dan Jaringan Dasar</a>
                    </li>
                    <li><a href="{{ route('kompetensi.dasar-desain-grafis') }}">Dasar Desain Grafis</a></li>
                    <li><a href="{{ route('kompetensi.sistem-komputer') }}">Sistem Komputer</a></li>
                    <li><a href="{{ route('kompetensi.pemodelan-perangkat-lunak') }}">Pemodelan Perangkat Lunak</a></li>
                    <li><a href="{{ route('kompetensi.database') }}">Database</a></li>
                    <li><a href="{{ route('kompetensi.web-programming') }}">Web Programming</a></li>
                    <li><a href="{{ route('kompetensi.object-oriented-programming') }}">Object Oriented Programming</a>
                    </li>
                    <li><a href="{{ route('kompetensi.mobile-programming') }}">Mobile Programming</a></li>
                    <li><a href="{{ route('kompetensi.kewirausahaan') }}">Kewirausahaan</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Informasi</span> <i
                        class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                    <li><a href="{{ route('guru.index') }}">Data Guru</a></li>
                    <li><a href="#">Struktur Organisasi RPL</a></li>
                    <li><a href="#">Struktur Organisasi UP CentroTech</a></li>
                    <li><a href="#">Informasi PKL</a></li>
                    <li><a href="{{ route('loker.index') }}">Informasi Lowongan Kerja</a></li>
                </ul>
            </li>
            <li><a href="{{ route('artikel.index') }}">Artikel</a></li>
            <li><a href="contact.html">Kontak</a></li>
            @hasrole('admin')
                <li><a href="{{ route('admin.index') }}">Dashboard</a></li>
            @endhasrole
            @guest
                <li><a href="{{ route('login') }}">Login</a></li>
            @endguest
        </ul>
    </nav><!-- .navbar -->

</div>
