<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= ce_opsi('nama_situs'); ?> | Registrasi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shortcut icon" href="<?= base_url('assets/img/' . ce_opsi('favicon')); ?>">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url('assets/style/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/style/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url('assets/style/bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/style/dist/css/AdminLTE.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/style/apps.css'); ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page" style="background: url(http://localhost/sipendi/assets/album/2.jpg);">
  <div class="login-box">
    <div class="login-logo" style="color: white;">
      <b>Admin</b>Registrasi
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body" style="border-radius: 5px;">
      <p class="login-box-msg">Silakan isi form dibawah ini dengan benar</p>
      <?= ce_msg('success', true); ?>
      <?= ce_msg('danger', true); ?>
      <form action="" method="post">
        <div class="form-group has-feedback">
          <input type="number" name="no_telp" class="form-control" placeholder="Nomor Whatsapp" required>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <?php
        //<div class="form-group has-feedback">
        //<input type="password" name="password" class="form-control" placeholder="Password" required>
        //<span class="glyphicon glyphicon-lock form-control-feedback"></span>
        //</div>
        ?>
        <p>*Nama lengkap sesuai KTP</p>
        <div class="form-group has-feedback">
          <input type="nama" name="nama" class="form-control" placeholder="Nama Lengkap" required>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block"><span class="fa fa-user-plus"></span> Registrasi</button>
            <div class="social-auth-links text-center">
              <p>- OR -</p>
            </div>
            <a href="<?= base_url('user/login'); ?>" class="btn btn-info btn-block"><span class="fa fa-sign-in"></span> Masuk</a>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery 3 -->
  <script src="<?= base_url('assets/style/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?= base_url('assets/style/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
</body>

</html>