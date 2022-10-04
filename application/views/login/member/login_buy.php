<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OTOP : Login Member</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assest/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assest/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assest/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page" style="background-image:linear-gradient(rgba(255, 139, 0 ,0.45),rgba(255, 139, 0 ,0.45)), url(<?php echo base_url(); ?>assest/dist/img/bg-login.jpg);">
<div class="login-box">
  <div class="login-logo">
    <div class="d-flex justify-content-center">
      <div class="col-2">
        <a href="<?php echo base_url(); ?>">
          <img src="<?php echo base_url() ?>assest/dist/img/logo/logo-otop.png" width="80" alt="OTOP Logo" class="brand-image img-circle elevation-3">
        </a>
      </div>
      <div class="col-sm-10">
        <a href="<?php echo base_url(); ?>">
          <h1 class="text-white mt-3 float-right" style="text-shadow: 2px 2px 8px #000;"><b>OTOP นวัตวิถี</b></h1>
        </a>
      </div>
    </div>
  </div>
  <!-- /.login-logo -->
  <div class="card rounded-lg elevation-4">

    <div class="row mt-2">
    <div class="col-3 mr-1">
      <a href="<?php echo base_url(); ?>Login2/Member" class="btn btn-app text-white bg-orange">
        <span class="badge bg-success"><?php echo count($showseller);?></span>
        <i class="fas fa-users text-white"></i> <span class="text-white">ผู้ซื้อ</span>
      </a>
    </div>
    <div class="col-3">
      <a href="<?php echo base_url(); ?>Login/Seller" class="btn btn-app">
        <span class="badge bg-danger"><?php echo count($showuser);?></span>
        <i class="fas fa-store"></i> <span class="">ผู้ขาย</span>
      </a>
    </div>
    </div>

    <div class="card-body login-card-body">
      <h4 class="login-box-msg">เข้าสู่ระบบ</h4>
      <?php echo $this->session->flashdata('msg'); ?>
      <form action="<?php echo base_url(); ?>login2/authenbuy" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="อีเมล" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="รหัสผ่าน" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">

          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn bg-orange btn-block"><span class="text-white">ตกลง</span></button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <hr>
      <p class="mb-1">
        <a href="<?php echo base_url(); ?>forgot_password">เปลี่ยนรหัสผ่าน</a>
      </p>
      <p class="mb-0">
        <a href="<?php echo base_url(); ?>Register2/Member" class="text-center">สมัครสมาชิก</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>

</body>
</html>
