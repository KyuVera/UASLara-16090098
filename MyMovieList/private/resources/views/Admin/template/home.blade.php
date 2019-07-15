<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MyMovieList | Community</title>
  <link href="{{asset ('/public/bahan/img/MML-Icon.png')}}" rel='shortcut icon'>
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/bahan/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Bootstrap 3.3.7 -->
  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/bahan/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/bahan/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/bahan/css/AdminLTE.min.css') }}">
  <!-- <link rel="stylesheet" href="public/bahan/dist/css/AdminLTE.min.css"> -->
  <!-- AdminLTE Skins. Choose a skin from the css/skins

       folder instead of downloading all of them to reduce the load. -->
       <link rel="stylesheet" href="{{ asset ('public/bahan/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/bahan/css/skins/_all-skins.min.css') }}">
  <!-- <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css"> -->
  <!-- Morris chart -->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/bahan/bower_components/morris.js/morris.css') }}">
  <!-- <link rel="stylesheet" href="bower_components/morris.js/morris.css"> -->
  <!-- jvectormap -->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/bahan/bower_components/jvectormap/jquery-jvectormap.css') }}">
  <!-- <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css"> -->
  <!-- Date Picker -->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/bahan/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"> -->
  <!-- Daterange picker -->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/bahan/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  <!-- <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css"> -->
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/bahan/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
  <!-- <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{route('Admin')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>MML</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>MyMovieList</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <button style="width: 150px; height: 50px;"><a href="{{route('homeuser.index')}}"><b>Tampilan User</b></a></button>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('public/bahan/img/avatar5.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Giant Bahari</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      @include('Admin.menu')
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      @yield('content')
      </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://www.facebook.com/Gian.Kurfurst">G Kurfurst</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script type="text/javascript" src="{{ asset('/public/bahan/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- <script src="bower_components/jquery/dist/jquery.min.js"></script> -->
<!-- jQuery UI 1.11.4 -->
<script type="text/javascript" src="{{ asset('public/bahan/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- <script src="bower_components/jquery-ui/jquery-ui.min.js"></script> -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 3.3.7 -->
<script type="text/javascript" src="{{ asset('public/bahan/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
<!-- Morris.js charts -->
<script type="text/javascript" src="{{ asset('public/bahan/bower_components/raphael/raphael.min.js') }}"></script>
<!-- <script src="bower_components/raphael/raphael.min.js"></script> -->
<script type="text/javascript" src="{{ asset('public/bahan/bower_components/morris.js/morris.min.js') }}"></script>
<!-- <script src="bower_components/morris.js/morris.min.js"></script> -->
<!-- Sparkline -->
<script type="text/javascript" src="{{ asset('public/bahan/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- <script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script> -->
<!-- jvectormap -->
<script type="text/javascript" src="{{ asset('public/bahan/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<!-- <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script> -->
<script type="text/javascript" src="{{ asset('public/bahan/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->
<!-- jQuery Knob Chart -->
<script type="text/javascript" src="{{ asset('public/bahan/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- <script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script> -->
<!-- daterangepicker -->
<script type="text/javascript" src="{{ asset('public/bahan/bower_components/moment/min/moment.min.js') }}"></script>
<!-- <script src="bower_components/moment/min/moment.min.js"></script> -->
<script type="text/javascript" src="{{ asset('public/bahan/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script> -->
<!-- datepicker -->
<script type="text/javascript" src="{{ asset('public/bahan/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script> -->
<!-- Bootstrap WYSIHTML5 -->
<script type="text/javascript" src="{{ asset('public/bahan/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script> -->
<!-- Slimscroll -->
<script type="text/javascript" src="{{ asset('public/bahan/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script> -->
<!-- FastClick -->
<script type="text/javascript" src="{{ asset('public/bahan/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- <script src="bower_components/fastclick/lib/fastclick.js"></script> -->
<!-- AdminLTE App -->
<script type="text/javascript" src="{{ asset('public/bahan/js/adminlte.min.js') }}"></script>

<!-- <script src="dist/js/adminlte.min.js"></script> -->

<script type="text/javascript" src="{{ asset('public/bahan/js/demo.js') }}"></script>
<!-- <script src="dist/js/demo.js"></script> -->
<script src="{{asset ('public/bahan/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset ('public/bahan/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
