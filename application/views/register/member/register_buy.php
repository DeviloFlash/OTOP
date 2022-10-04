<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OTOP | Registration Member</title>
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
<body class="hold-transition register-page" style="background-image:linear-gradient(rgba(255, 139, 0 ,0.45),rgba(255, 139, 0 ,0.45)), url(<?php echo base_url(); ?>assest/dist/img/bg-login.jpg);">
<div class="register-box">
  <div class="register-logo">
    <div class="d-flex justify-content-center">
      <div class="col-sm-3 col-3">
        <a href="<?php echo base_url(); ?>">
          <img src="<?php echo base_url() ?>assest/dist/img/logo/logo-otop.png" width="80" alt="OTOP Logo" class="brand-image img-circle elevation-3">
        </a>
      </div>
      <div class="col-sm-9">
        <a href="<?php echo base_url(); ?>">
          <h1 class="text-white mt-3" style="text-shadow: 2px 2px 8px #000;"><b>OTOP นวัตวิถี</b></h1>
        </a>
      </div>
    </div>
  </div>

  <div class="card rounded-lg elevation-4">
    <div class="ribbon-wrapper ribbon-lg">
      <div class="ribbon text-lg bg-orange">
        <i class="fas text-md fa-user mr-2 text-white"></i><span class="text-white"><?php echo count($showuser);?></span>
      </div>
    </div>
    <div class="card-body register-card-body">
      <p class="login-box-msg">ลงทะเบียนเข้าสู่เว็บไซต์ : ผู้ซื้อ</p>
      <?php echo $this->session->flashdata('msg'); ?>
      <form action="<?php echo base_url(); ?>register2/add_userbuy" method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="display_name_buy" placeholder="ชื่อเต็ม" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
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
        <div class="input-group mb-3">
            <textarea class="form-control" rows="3" name="address" placeholder="ที่อยู่..."></textarea>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-map-marked-alt"></span>
              </div>
            </div>
        </div>
        <div class="row">
          <div class="col-8">
          <input type="hidden" class="form-control" name="buyer_status" id="user_status" value="1">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="buyer_role" value="3" required>
              <label for="agreeTerms">
               ยอมรับ<a href="#"> เงื่อนไขการสมัคร</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-block">บันทึก</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <hr>
      <a href="<?php echo base_url() ?>Login2/Member" class="text-center mt-2">เข้าสู่ระบบ</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>assest/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assest/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assest/dist/js/adminlte.min.js"></script>
</body>
</html>
