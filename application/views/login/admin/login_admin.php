<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OTOP : Login Admin</title>
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
<body class="hold-transition login-page" style="background-image:linear-gradient(rgba(102, 16, 242 ,0.45),rgba(102, 16, 242 ,0.45)), url(<?php echo base_url(); ?>assest/dist/img/bg-login.jpg);">
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


    <div class="card-body login-card-body">
      <h4 class="login-box-msg">เข้าสู่ระบบ</h4>
      <?php echo $this->session->flashdata('msg'); ?>
      <form action="<?php echo base_url(); ?>Loginadmin/authenadmin" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email_admin" placeholder="ไอดี" required>
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
      <hr>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn bg-purple btn-block"><span class="text-white">ตกลง</span></button>
          </div>
          <!-- /.col -->
        </div>
      </form>
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
