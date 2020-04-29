<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Invoicing</title>

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/app.css')}} ">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">
  <adminlte-nav></adminlte-nav>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('adminlte')}}" class="brand-link">
      <img src="adminlte/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Invoicing</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <adminlte-user></adminlte-user>
      <adminlte-sidebarmenu></adminlte-sidebarmenu>
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
   <router-view></router-view>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <adminlte-sidebar></adminlte-sidebar>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
    <adminlte-footer></adminlte-footer>
</div>
<!-- ./wrapper -->
<script src="{{ asset('js/app.js')}} "></script>
</body>
</html>
