<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ecommerece</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('backend/assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->


  <link rel="stylesheet" href ="{{  url('backend/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')  }}"></script>
  <!-- iCheck -->



  <link rel="stylesheet" href="{{ url('backend/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
 
  <link rel="stylesheet" href=" {{ url('backend/assets/plugins/jqvmap/jqvmap.min.css') }}  ">
  <!-- Theme style -->
  <link rel="stylesheet" href=" {{ url('backend/assets/dist/css/adminlte.min.css') }} ">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href=" {{ url('backend/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }} ">
  <!-- Daterange picker -->
  <link rel="stylesheet" href=" {{ url('backend/assets/plugins/daterangepicker/daterangepicker.css') }} ">
  <!-- summernote -->
  <link rel="stylesheet" href=" {{ url('backend/assets/plugins/summernote/summernote-bs4.css') }} ">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery.tablesorter.js')}}"></script>
    <script src="{{asset('js/jquery.tablesorter.widgets.js')}}"></script>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
@include('backend.components.navbar')
@include('backend.components.sidebar')
<div  >
@if ($errors->any())
        <div class="alert alert-danger" style="margin-left:17%;margin-right:20%" class="col-sm-5" >
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div  style="margin-left:17% ;margin-right:20%"  >
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            <p>{{ $message }}</p>
        </div>
    @endif
    </div>
</div>

@yield('content')
 








  
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">IBbi 74</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=" {{url('backend/assets/plugins/jquery/jquery.min.js')}} "></script>
<!-- jQuery UI 1.11.4 -->
<script src=" {{url('backend/assets/plugins/jquery-ui/jquery-ui.min.js')}} "></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src=" {{url('backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}} "></script>
<!-- ChartJS -->
<script src= " {{url('backend/assets/plugins/chart.js/Chart.min.js')}} "></script>
<!-- Sparkline -->
<script src=" {{url('backend/assets/plugins/sparklines/sparkline.js')}} "></script>
<!-- JQVMap -->
<script src=" {{url('backend/assets/plugins/jqvmap/jquery.vmap.min.js')}} "></script>
<script src=" {{url('backend/assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}} "></script>
<!-- jQuery Knob Chart -->
<script src=" {{url('backend/assets/plugins/jquery-knob/jquery.knob.min.js')}} "></script>
<!-- daterangepicker -->
<script src=" {{url('backend/assets/plugins/moment/moment.min.js')}} "></script>
<script src=" {{url('backend/assets/plugins/daterangepicker/daterangepicker.js')}} "></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src=" {{url('backend/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}} "></script>
<!-- Summernote -->
<script src=" {{url('backend/assets/plugins/summernote/summernote-bs4.min.js')}} "></script>
<!-- overlayScrollbars -->
<script src=" {{url('backend/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}} "></script>
<!-- AdminLTE App -->
<script src=" {{url('backend/assets/dist/js/adminlte.js')}} "></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=" {{url('backend/assets/dist/js/pages/dashboard.js')}} "></script>
<!-- AdminLTE for demo purposes -->
<script src=" {{url('backend/assets/dist/js/demo.js')}}" ></script>


@yield('script')
</body>
</html>