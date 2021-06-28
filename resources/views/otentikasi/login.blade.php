<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{url('AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url ('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  {{-- <!-- JQVMap -->
  <link rel="stylesheet" href="{{ url ('AdminLTE/plugins/jqvmap/jqvmap.min.css') }}"> --}}
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url ('AdminLTE/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url ('AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ url ('AdminLTE/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ url ('AdminLTE/plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
    hr{
      margin-top: -1px;
    }
  </style><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Masuk Sistem</b><br>KAMPUS</a>

  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"><img src="image\Logo_Universitas_Gadjah_Mada.png" widht="100" height="100" alt="UGM"></p>

    <form action="/masuk" method="post">
    @csrf
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="email" name="email" required="">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <!-- /.col -->
      @if (session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
    @endif
        <div class="col-xs-8">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="">Masuk</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
</body>
</html>