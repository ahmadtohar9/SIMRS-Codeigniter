<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url();?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url();?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
<!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url();?>assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url();?>assets/admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?=base_url();?>assets/admin/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/dist/css/skins/_all-skins.min.css">
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="assets/gambar/rsb.PNG"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><strong><h4>RS BHAYANGKARA PKU</h4></strong></span>
    </a>
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
  </header>




  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="<?=base_url('resep/get_resep')?>"><i class="fa fa-laptop"></i> <span>Daftar Resep Hari Ini</span></a></li>
        <li><a href="<?=base_url('resep/get_all')?>"><i class="fa fa-calendar"></i> <span>Daftar Seluruh Resep</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
    <!-- jQuery 3 -->
<script src="<?=base_url()?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>