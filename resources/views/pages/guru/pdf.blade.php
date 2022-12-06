<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    {{-- <link href="https://shofistwn.github.io/rpl/public/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> --}}
    {{-- <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"> --}}

    <!-- Custom styles for this template-->
    <link href="https://shofistwn.github.io/rpl/public/dashboard/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="https://shofistwn.github.io/rpl/public/dashboard/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">

</head>

<body>
    <div class="card border-0 p-1">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-center mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Guru</h1>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kompetensi Keahlian</th>
                            <th>Telepon</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dataGuru as $guru)
                            <tr>
                                <td>{{ $guru->nama }}</td>
                                <td>{{ $guru->komli }}</td>
                                <td>{{ $guru->telepon }}</td>
                                <td>{{ $guru->alamat }}</td>
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

    <!-- Bootstrap core JavaScript-->
    <script src="https://shofistwn.github.io/rpl/public/dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="https://shofistwn.github.io/rpl/public/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="https://shofistwn.github.io/rpl/public/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="https://shofistwn.github.io/rpl/public/dashboard/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="https://shofistwn.github.io/rpl/public/dashboard/vendor/chart.js/Chart.min.js"></script>
    <script src="https://shofistwn.github.io/rpl/public/dashboard/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="https://shofistwn.github.io/rpl/public/dashboard/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="https://shofistwn.github.io/rpl/public/dashboard/js/demo/chart-area-demo.js"></script>
    <script src="https://shofistwn.github.io/rpl/public/dashboard/js/demo/chart-pie-demo.js"></script>
    <script src="https://shofistwn.github.io/rpl/public/dashboard/js/demo/datatables-demo.js"></script>

    <!-- Custom Scripts -->
    @stack('scripts')
</body>

</html>

