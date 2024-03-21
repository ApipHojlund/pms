<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        PMS el mejor del mundo
    </title>

    <!-- plugins:css -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="{{ asset('bootstrap/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('template/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/vendors/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/vendors/datatable/dataTables.bootstrap4.min.css') }}">
    {{-- select 2 css + js --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('bootstrap/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        @include('layout.navbar')
        <div class="container-fluid page-body-wrapper">

            @include('layout.sidebar')

            @yield('konten')
        </div>
    </div>

    <script src="{{ asset('template/vendors/base/vendor.bundle.base.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#example').dataTable();
        })
    </script>
    {{-- end --}}
    {{-- sweet alert --}}
    <script>
        function Delete(url) {
            Swal.fire({
                title: 'Yakin?',
                text: 'Apakah anda yakin akan menghapus data ini?',
                icon: 'warning',
                showCancelButton: true,
                dangerMode: true,

            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = url;
                }
            })
        }
    </script>
    {{-- end --}}
    <script>
        // Initialize Select2 for the machine selection
        $(document).ready(function() {
            $('#id_mesin').select2({
                theme:"classic"
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
                theme:"classic"
            });
        });
    </script>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('bootstrap/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('bootstrap/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('bootstrap/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('bootstrap/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('bootstrap/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('bootstrap/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/jquery.cookie.js" type="text/javascript') }}"></script>
    {{-- sweet alert --}}
    <script src="{{ asset('template/vendors/sweetalert2/sweetalert2.min.js') }}"></script>
    {{-- select 2 --}}
    {{-- <script src="{{ asset('template/vendors/select2/select2.min.js') }}"></script> --}}
    <script src="{{ asset('template/vendors/select2/select2.min.js') }}"></script>

    <script src="js/jquery.cookie.js" type="text/javascript"></script>
    {{-- dataTable --}}
    <script src="{{ asset('template/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js') }}"></script>
    <script src="{{ asset('datatable/datatbles.min.js') }}"></script>
    <script src="{{ asset('template/vendors/datatable/datatables.min.js') }}"></script>
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End plugin  js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('bootstrap/js/off-canvas.js') }}"></script>
    <script src="{{ asset('bootstrap/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('bootstrap/js/misc.js') }}"></script>
    <script src="{{ asset('bootstrap/js/settings.js') }}"></script>
    <script src="{{ asset('bootstrap/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('bootstrap/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
    {{-- DataTable --}}
    <script src="https://kit.fontawesome.com/your_fontawesome_kit_code.js" crossorigin="anonymous"></script>
</body>

</html>
