<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OTOP | Profile</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assest/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assest/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assest/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assest/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- my style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assest/dist/style/css/style.css">
  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assest/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

</head>
<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed layout-navbar-fixed">
<!-- Site wrapper -->
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light" style="background:	#ff851b;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url() ?>" class="nav-link text-white">OTOP</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link text-white">ติดต่อ</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3 elevation-1" action="<?php echo base_url();?>Store" method="post">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" name="keyword" type="search" placeholder="ค้นหา" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-light btn-navbar text-white " type="submit">
            <i class="fas fa-search" style="color:#ff851b;"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
            <a class="nav-link text-white" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-danger navbar-badge">2</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a href="<?php echo base_url();?>Member/Alertorderadmin">
                <span class="dropdown-item dropdown-header">ดูข้อความทั้งหมด</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?php echo base_url() ?>Member/Alertorder" class="dropdown-item">
                <i class="fas fa-user-tag mr-2"></i> ผู้ขาย 1 ข้อค้วาม
              </a>
              <a href="<?php echo base_url() ?>Member/Alertorderadmin" class="dropdown-item">
                <i class="fas fa-user-tie mr-2"></i> ระบบ 1 ข้อค้วาม
              </a>
            </div>
          </li>

      <li class="nav-item">
        <a class="nav-link text-white" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-shopping-cart"></i>
					<span class="badge badge-success navbar-badge"><?php echo count($showbasket);?></span>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url() ?>Home" class="brand-link">
      <img src="<?php echo base_url() ?>assest/dist/img/logo/logo-otop.png"
           alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">OTOP นวัตวิถี</span>
    </a>

    <?php if (isset($_SESSION['buyer_id']) && $_SESSION['display_name_buy'] != "") { ?>
        <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url() ?>assest/dist/img/admin-icon-png-1.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?php echo base_url(); ?>Member" class="d-block"><?php echo $buyer->display_name_buy ;?> (ผู้ซื้อ)</a>
        </div>
      </div>
      <?php } else { ?>
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url() ?>assest/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="<?php echo base_url(); ?>login2/member" class="d-block">เข้าสู่ระบบ</a>
        </div>
      </div>
      <?php } ?>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="https://www.the-qrcode-generator.com/scan" class="nav-link">
              <i class="nav-icon fas fa-qrcode"></i>
              <p>
                QRCODE
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url(); ?>News" class="nav-link">
              <i class="nav-icon fas fa-audio-description"></i>
              <p>
                ข่าวสาร
              </p>
            </a>
          </li>


          <li class="nav-item">
              <a href="<?php echo base_url(); ?>Product" class="nav-link">
                <i class="nav-icon fas fa-shopping-bag"></i>
                <p>
                  สินค้า
                  <span class="right badge badge-info"><?php echo count($showproduct);?></span>
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Store" class="nav-link">
                <i class="nav-icon fas fa-store"></i>
                <p>
                  ร้านค้า
                  <span class="right badge badge-info"><?php echo count($showsell);?></span>
                </p>
              </a>
            </li>

          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Status" class="nav-link">
              <i class="nav-icon fas fa-truck"></i>
              <p>
                ติดตามสินค้า
                <span class="right badge badge-warning">Kerry Express</span>
              </p>
            </a>
          </li>
          <?php if (isset($_SESSION['buyer_id']) && $_SESSION['display_name_buy'] != "") { ?>
            <li class="nav-item">
            <a href="<?php echo base_url('login2/logout'); ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                ออกจากระบบ
              </p>
            </a>
          </li>
            <?php } else { ?>

            <?php } ?>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <hr>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-warning card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo base_url() ?>assest/dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">นาย <?php echo $buyer->display_name_buy ;?></h3>

                <p class="text-muted text-center">ID : B00<?php echo $buyer->buyer_id ;?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>สินค้าที่ซื้อ</b> <a class="float-right"><?php echo count($showbillotopmember);?></a>
                  </li>
                  <li class="list-group-item">
                    <b>สถานะ</b> <a class="float-right">ผู้ซื้อ</a>
                  </li>
                  <li class="list-group-item">
                    <b>ชื่อ-นามสกุล</b> <a class="float-right"><?php echo $buyer->first_name_buy ;?> <?php echo $buyer->last_name_buy ;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>เพศ</b> <a class="float-right"><?php echo $buyer->gender_buy ;?></a>
                  </li>
                </ul>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card">
              <div class="card-header bg-orange">
                <h3 class="card-title text-white">รายละเอียด</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-map-marker-alt mr-1"></i> ที่อยู่</strong>

                <p class="text-muted"><?php echo $buyer->address_buy ;?></p>

                <hr>

                <strong><i class="fas fa-phone mr-1"></i> เบอร์โทร</strong>

                <p class="text-muted"><?php echo $buyer->mobile_number_buy ;?></p>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">เเจ้งเตือน</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">ประวัติการสั่งซื้อ</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">เเก้ไขข้อมูล</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">

                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>หัวข้อ</th>
                        <th>ผู้ส่ง</th>
                        <th>วันทีส่ง</th>
                      </tr>
                      </thead>
                      <tbody>

                        <?php $i=1; foreach ($showalert as $showalertbuy) {?>
                        <tr>
                          <td><a href="<?php echo base_url('Member/Alert/'). $showalertbuy->id_alert; ?>">เเจ้งเตือน</a></td>
                          <td><?php echo $showalertbuy->display_name; ?></td>
                          <td><?php echo $showalertbuy->data_alert; ?></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>

                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">


                  <table id="example2" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th>ไอดี</th>
                            <th>ชื่อสินค้า</th>
                            <th>จำนวน</th>
                            <th>ราคาชิ้นละ</th>
                            <th>วันที่ซื้อ</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php foreach ($showbillotopmember as $showbillmember) { ?>
                          <tr>
                            <td><a href="#"><?php echo $showbillmember->id_billotop; ?></a></td>
                            <td><?php echo $showbillmember->name_product_bill; ?></a></td>
                            <td><?php echo $showbillmember->number_bill; ?></td>
                            <td><?php echo $showbillmember->price; ?></td>
                            <td><?php echo $showbillmember->data_bill; ?></td>
                          </tr>
                          <?php } ?>
                          </tbody>
                        </table>


                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal" action="<?php echo base_url('Member/editprofilebuy'); ?>" method="post" enctype="multipart/form-data">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">อีเมล</label>
                        <div class="col-sm-10">
                          <input type="email"  class="form-control" value="<?php echo $buyer->email; ?>" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                  
                        <label for="inputPassword" class="col-sm-2 col-form-label">รหัสผ่าน</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" class="pass_swap" name="password" value="<?php echo $buyer->password; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                      <input type="hidden" name="buyer_id" value="<?php echo $buyer->buyer_id; ?>">
                        <label for="inputPassword" class="col-sm-2 col-form-label">ชื่อหลัก</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="display_name" value="<?php echo $buyer->display_name_buy; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">ชื่อ</label>
                        <div class="col-sm-10">
                          <input type="Name" class="form-control" name="first_name" value="<?php echo $buyer->first_name_buy; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">นามสกุล</label>
                        <div class="col-sm-10">
                          <input type="Name" class="form-control" name="last_name" value="<?php echo $buyer->last_name_buy; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPhone" class="col-sm-2 col-form-label">เพศ</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="gender" value="<?php echo $buyer->gender_buy; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPhone" class="col-sm-2 col-form-label">โทรศัพท์</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="mobile_number"  value="<?php echo $buyer->mobile_number_buy; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">ที่อยู่</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="address"  value="<?php echo $buyer->address_buy; ?>"><?php echo $buyer->address_buy; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" required>ยืนยันการเเก้ไข
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">ตกลง</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- ตระกล้าสินค้า -->
  <aside class="control-sidebar control-sidebar-light">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>ตระกล้าสินค้า <span class="right badge badge-success"><?php echo count($showbasket);  ?></span> </h5>
        <hr style="border:1px solid #000;">
        <div class="row">
          <!-- สินค้า -->
          <?php foreach ($showbasket as $show) { ?>
          <div class="col-4">
            <img src="<?php echo base_url('assest/img/otop'); ?>/<?php echo $show->img_otop; ?>" style="height:4.5rem;object-fit:cover;" alt="...">
          </div>
          <div class="col-5">
            <?php echo $show->name_product; ?><br>
            <?php echo $show->number_basket; ?> รายการ
            <?php echo $show->price; ?>.-

          </div>
          <div class="col-3">
          <a href="<?php echo base_url('Cart/delbasket/') . $show->id_basket; ?>" type="button" class="btn btn-danger"><i class="fas fa-times"></i></a>
          </div>
          <?php } ?>
        </div>
        <hr style="border:1px solid #000;">
        <div class="row">
          <div class="col-6">
            <a href="<?php echo base_url() ?>Cart" class="btn btn-success">ชำระสินค้า</a>
          </div>
          <div class="col-6">
            <p class="py-1">รวม : 000 .-<p>
          </div>
        </div>
      </div>
    </aside>
    <!-- /.control-sidebar -->


  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="#">CPE-Project</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>assest/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>assest/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assest/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>assest/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url() ?>assest/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url() ?>assest/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assest/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>assest/dist/js/pages/dashboard.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>assest/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>assest/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $("#example2").DataTable();
  });
</script>

</body>
</html>
