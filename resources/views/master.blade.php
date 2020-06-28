<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
   <!-- Tell the browser to be responsive to screen width -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="{{ asset('ta1/plugins/fontawesome-free/css/all.min.css')}}">
   <!-- Theme style -->
   <link rel="stylesheet" href="{{ asset('ta1/dist/css/adminlte.min.css')}}">
   <!-- overlayScrollbars -->
   <link rel="stylesheet" href="{{ asset('ta1/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
   <!-- Google Font: Source Sans Pro -->
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   {{-- Data tables --}}
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


@include('include.navbar')

@include('include.sidebar')

@yield('content')

@include('include.footer')


</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('ta1/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('ta1/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('ta1/dist/js/adminlte.js')}}"></script>
{{-- data tables --}}
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
{{-- Sweet Alert --}}
<script src="{{ asset('sweetAlert/sweetalert2.all.min.js') }}"></script>
{{-- My script --}}
<script src="{{ asset('js/myscript.js') }}"></script>

</body>
</html>
