<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kapella Bootstrap Admin Dashboard Template</title>
    <!-- base:css -->
    {{-- <meta http-equiv="refresh" content="1"> --}}
    <link rel="stylesheet" href="{{asset('template/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendors/base/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendors/sweetalert2/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendors/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendors/datatable/dataTables.bootstrap4.min.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Select2 CSS and JS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <!-- Your other head contents -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('template/images/favicon.png')}}"/>
    </head>
    <body>
    <div class="container-scroller">
		<!-- partial:partials/_horizontal-navbar.html -->
    @include('layouts.navbar')

    @yield('content')
    </div>
		<!-- container-scroller -->
    <!-- base:js -->
    <script src="{{asset('template/vendors/base/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/template.js"></script>
    {{-- DataTable --}}
    <script>
      $(document).ready(function() {
          $('#example').dataTable();
      })
    </script>
  {{-- Delete Data --}}
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
<script>
    $(document).ready(function() {
    $('#js-example-basic-multiple').select2();
})
</script>
<script>
    function updateHour() {
        var currentTime = new Date();
        var hours = currentTime.getHours();
        var minutes = currentTime.getMinutes();
        var seconds = currentTime.getSeconds();

        // Tambahkan nol di depan angka jika kurang dari 10
        hours = (hours < 10 ? "0" : "") + hours;
        minutes = (minutes < 10 ? "0" : "") + minutes;
        seconds = (seconds < 10 ? "0" : "") + seconds;

        var formattedTime = hours + ":" + minutes + ":" + seconds;

        document.getElementById("liveHour").innerHTML = formattedTime;
    }

    // Jalankan updateHour setiap detik
    setInterval(updateHour, 1000);
</script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <script src="{{asset('template/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('template/vendors/progressbar.js/progressbar.min.js')}}"></script>
	<script src="{{asset('template/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js')}}"></script>
	<script src="{{asset('template/vendors/justgage/raphael-2.1.4.min.js')}}"></script>
	<script src="{{asset('template/vendors/justgage/justgage.js')}}"></script>
    <script src="{{asset('template/vendors/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{asset('template/vendors/select2/select2.min.js')}}"></script>
    <script src="{{asset('template/vendors/datatable/datatables.min.js')}}"></script>
    <script src="js/jquery.cookie.js" type="text/javascript"></script>
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script src="{{asset('datatable/datatbles.min.js')}}"></script>
    <!-- End custom js for this page-->
  </body>
</html>
