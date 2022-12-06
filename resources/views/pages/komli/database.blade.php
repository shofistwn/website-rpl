@extends('layouts.komli')

@section('title', 'Database')
@section('komli-img', '/tes.png')
@section('content')

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Pengenalan</h2>
            </div>

            <div class="row g-0" data-aos="fade-up">
                <p>
                    Pengertian database adalah sekumpulan data yang dikelola berdasarkan ketentuan tertentu yang saling
                    berkaitan sehingga memudahkan dalam pengelolaannya. Dihimpun dari berbagai sumber, secara sederhana,
                    database atau basis data merupakan sekumpulan data atau informasi yang tersimpan secara sistematis.
                    Database memiliki peran penting dalam perangkat untuk mengumpulkan informasi, data, atau file secara
                    terintegrasi.
                </p>

                <p>
                    Database membuat penyimpanan dan pengelolaan data menjadi lebih efisien. Adapun contoh database
                    dapat dilihat dari pengembangan situs web. Database berwujud tabel yang terdiri dari kolom dan baris
                    yang memuat atribut dan nilai tertentu. Adapun jumlah kolom dan baris dalam suatu database tergantung
                    pada jumlah kategori atau jenis informasi yang perlu disimpan.
                </p>

                <p>
                    Database dapat menunjang keamanan data. Hal tersebut lantaran sistem yang telah disusun secara aman
                    melalui instrumen password sehingga data hanya bisa diakses oleh pihak yang diizinkan. Melalui sistem
                    yang mampu menyeleksi data menjadi suatu kelompok berurutan, database dapat menghasilkan pencarian suatu
                    informasi dengan lebih cepat. Namun, kecepatan tersebut juga dipengaruhi oleh jenis database yang
                    digunakan.
                </p>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= About Section ======= -->
    <section id="recent-posts" class="recent-posts" style="margin-top: -70px;">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Kompetensi Dasar</h2>
            </div>

            <div class="row g-0" data-aos="fade-up" data-aos-delay="200">
                <table class="table table-bordered table-hover table-striped">
                    <tbody>
                        <tr>
                            <td>3.1 Memahami struktur hirarki basis data</td>
                            <td>4.1 Mempresentasikan struktur hirarki basis data</td>
                        </tr>
                        <tr>
                            <td>3.2 Memahami bentuk diagram hubungan antar entitas</td>
                            <td>4.2 Mempresentasikan hubungan keterkaitan antar data dalam diagram ERD</td>
                        </tr>
                        <tr>
                            <td>3.3 Menerapkan teknik normalisasi basis data</td>
                            <td>4.3 Membuat perancangan sistem basis data menggunakan teknik normalisasi data</td>
                        </tr>
                        <tr>
                            <td>3.4 Memahami kelompok perintah yang termasuk dalam DDL, DML dan DCL dalam basis data</td>
                            <td>4.4 Membuat kelompok perintah yang termasuk dalam DDL, DML dan DCL dalam basis data</td>
                        </tr>
                        <tr>
                            <td>3.5 Memahami tipe data pada basis data</td>
                            <td>4.5 Mempresentasikan tipe data pada basis data</td>
                        </tr>
                        <tr>
                            <td>3.6 Menerapkan record, table dan field</td>
                            <td>4.6 Membuat record, table dan field</td>
                        </tr>
                        <tr>
                            <td>3.7 Menerapkan bahasa SQL dasar untuk mengelola tabel dalam basis data</td>
                            <td>4.7 Membuat kode SQL dasar untuk mengelola tabel dalam basis data</td>
                        </tr>
                        <tr>
                            <td>3.8 Menerapkan bahasa SQL dasar untuk memanipulasi tabel dalam basis data</td>
                            <td>4.8 Membuat kode SQL dasar untuk memanipulasi tabel dalam basis data</td>
                        </tr>
                        <tr>
                            <td>3.9 Menerapkan fungsi agregasi dalam basis data</td>
                            <td>4.9 Membuat perintah fungsi agregasi dalam basis data</td>
                        </tr>
                        <tr>
                            <td>3.10 Menerapkan penggunaan SQL untuk mengakses multi table</td>
                            <td>4.10 Membuat perintah SQL untuk mengakses multi table</td>
                        </tr>
                        <tr>
                            <td>3.11 Merancang SQL bertingkat dalam memanipulasi basis data</td>
                            <td>4.11 Membuat perintah SQL bertingkat dalam memanipulasi basis data</td>
                        </tr>
                        <tr>
                            <td>3.12 Menerapkan SQL pada sistem basis data client-server</td>
                            <td>4.12 Membuat perintah SQL pada sistem basis data client- server</td>
                        </tr>
                        <tr>
                            <td>3.13 Memahami arsitektur RDBMS</td>
                            <td>4.13 Mempresetasikan arsitektur RDBMS</td>
                        </tr>
                        <tr>
                            <td>3.14 Menerapkan pembuatan basis data pada RDBMS</td>
                            <td>4.14 Membuat basis data pada RDBMS</td>
                        </tr>
                        <tr>
                            <td>3.15 Menganalisis struktur penyimpanan pada RDBMS</td>
                            <td>4.15 Membuat struktur penyimpanan pada RDBMS</td>
                        </tr>
                        <tr>
                            <td>3.16 Menerapkan pengendalian server melalui koneksi client- server pada RDBMS</td>
                            <td>4.16 Membuat koneksi pengendalian server melalui client-server pada RDBMS</td>
                        </tr>
                        <tr>
                            <td>3.17 Mengevaluasi pengamanan sistem basis data pada RDBMS</td>
                            <td>4.17 Merevisi sistem pengamanan basis data pada RDBMS</td>
                        </tr>
                        <tr>
                            <td>3.18 Menerapkan replikasi basis data</td>
                            <td>4.18 Membuat replikasi basis data</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section><!-- End About Section -->
@endsection
