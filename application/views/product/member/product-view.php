<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OTOP | HOME</title>
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
      <form class="form-inline ml-3 elevation-1" action="<?php echo base_url(); ?>Product" method="post">
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
     <?php if (isset($_SESSION['buyer_id']) && $_SESSION['display_name_buy'] != "") { ?>
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
   <?php } else { ?>

   <?php } ?>

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
        <img src="<?php echo base_url() ?>assest/dist/img/logo/logo-otop.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
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
                    <span class="right badge badge-info"><?php echo count($showproduct); ?></span>
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Store" class="nav-link">
                  <i class="nav-icon fas fa-store"></i>
                  <p>
                    ร้านค้า
                    <span class="right badge badge-info"><?php echo count($showsell); ?></span>
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
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <h5>รหัสสินค้า : P00<?php echo $readshowproduct->id_product; ?></h5>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <form action="<?php echo base_url(); ?>Product/addbasket" method="post">
          <?php if (isset($_SESSION['buyer_id']) && $_SESSION['display_name_buy'] != "") { ?>
            <input type="hidden" name="buyer_id" value="<?php echo $_SESSION['buyer_id'] ?>">
            <input type="hidden" name="name_buy_basket" value="<?php echo $_SESSION['display_name_buy'] ?>">

          <?php } else { ?>

          <?php } ?>
          <input type="hidden" name="id_product" value="<?php echo $readshowproduct->id_product; ?>">
          <input type="hidden" name="name_product_basket" value="<?php echo $readshowproduct->name_product; ?>">
          <input type="hidden" name="kerry_price_basket" value="<?php echo $readshowproduct->kerry_price; ?>">
          <input type="hidden" name="status_product_basket" value="<?php echo $readshowproduct->status_product; ?>">
          <div class="card card-solid">
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3 class="d-inline-block d-sm-none">ชื่อสินค้า</h3>
                  <div class="col-12">
                    <img data-aos="fade-right" src="<?php echo base_url('assest/img/otop'); ?>/<?php echo $readshowproduct->img_otop; ?>" class="product-image" alt="Product Image">
                  </div>

                  <div class="col-12 product-image-thumbs">

                    <?php foreach ($showimgorder as $row) { ?>
                    <?php if ($row->name_img == '') { ?>

                      <?php } else { ?>
                    <a href="<?php echo base_url(); ?>assest/img/product/<?php echo $row->name_img; ?>">
                      <div class="product-image-thumb p-1 m-1"><img src="<?php echo base_url(); ?>assest/img/product/<?php echo $row->name_img; ?>" style="width:100%; height:50px; object-fit:cover;" alt="Product Image"></div>
                    </a>

                  <?php } ?>
                  <?php } ?>

                  </div>

                </div>
                <div class="col-12 col-sm-6">
                  <h3 data-aos="fade-left" class="my-3"><?php echo $readshowproduct->name_product; ?></h3>
                  <p data-aos="fade-left"><?php echo $readshowproduct->detel; ?></p>
                  <hr data-aos="fade-left" style="border:0.3px solid #000;">
                  <h4 data-aos="fade-left">เลือกจำนวน</h4>

                  <div data-aos="fade-up" class="btn-group btn-group-toggle pt-2" data-toggle="buttons">

                    <div class="def-number-input number-input safari_only">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                      <input class="quantity" min="0" max="<?php echo $readshowproduct->number; ?>" name="number_basket" value="1" type="number">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </div>

                  </div>
                  <p data-aos="fade-up">จำนวนทั้งหมด <?php echo $readshowproduct->number; ?> รายการ</p>

                  <div class="bg-gray py-2 px-3 mt-4">
                    <h2 class="mb-0">
                      ฿ <?php echo $readshowproduct->price; ?>.00 .-
                    </h2>
                  </div>
                  <?php $stock=$readshowproduct->number; { ?>
                  <?php if (isset($_SESSION['buyer_id']) && $_SESSION['display_name_buy'] != "") { ?>

                    <?php if(empty($stock) == 0) { ?>
                      <div class="mt-4">
                      <button type="submit" class="btn btn-success btn-lg btn-flat"> <l type="submit" class="fas fa-cart-plus fa-lg mr-2"></l>ใส่ตะกร้า</button>
                    </div>
                    <?php } else { ?>
                      <div class="mt-4">
                      <a class="btn btn-danger btn-lg btn-flat"> <l></l>ของหมด</a>
                    </div>
                      <?php } ?>


                  <?php } else { ?>
                    <?php if(empty($stock) == 0) { ?>
                    <div class="mt-4">
                      <a href="<?php echo base_url() ?>Login2/Member" class="btn btn-success btn-lg btn-flat"> <l type="submit" class="fas fa-cart-plus fa-lg mr-2"></l>ใส่ตะกร้า</a>
                    </div>
                    <?php } else { ?>
                      <div class="mt-4">
                      <a class="btn btn-danger btn-lg btn-flat"> <l></l>ของหมด</a>
                    </div>
                      <?php } ?>

                  <?php } ?>
                  <?php } ?>
                </div>
              </div>
        </form>

        <div class="row mt-4">
          <nav class="w-100">
            <div class="nav nav-tabs" id="product-tab" role="tablist">
              <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">รายละเอียดร้านค้า</a>
              <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">คิวอาร์โค้ด</a>
              <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">ผู้ขาย</a>
            </div>
          </nav>
          <div class="tab-content p-3" id="nav-tabContent">
            <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> <?php echo $readshowproduct->detel_sell; ?></div>
            <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
              <h5 class="mt-1">คิวอาร์โค้ดสินค้า</h5>
              <div><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http://www.peejame.com/Product/Product_view/<?php echo $readshowproduct->id_product; ?>" style="width:100%;" alt="qrcode"></div>
            </div>
            <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab">

              <!-- Main content -->
              <section class="content px-0">

                <div class="row">

                  <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-warning card-outline">
                      <div class="card-body box-profile">
                        <div class="text-center">
                          <img class="profile-user-img img-fluid img-circle" src="<?php echo base_url() ?>assest/dist/img/user4-128x128.jpg" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center"><?php echo $readshowproduct->display_name; ?></h3>

                        <ul class="list-group list-group-unbordered mb-3">

                        </ul>

                        <a href="<?php echo base_url('Store/Store_view/').$readshowproduct->user_id ?>" class="btn btn-block text-white" style="background:#ff851b;"><b>ร้านค้า</b></a>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.col -->

                  <div class="col-md-6">
                    <!-- About Me Box -->
                    <div class="card">
                      <div class="card-header" style="background:#ff851b;">
                        <h3 class="card-title text-white">รายละเอียด</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <strong><i class="fas fa-phone mr-1"></i> เบอร์โทร</strong>

                        <p class="text-muted">
                          <?php echo $readshowproduct->mobile_number; ?>
                        </p>

                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-1"></i>ที่อยู่</strong>

                        <p class="text-muted"><?php echo $readshowproduct->address; ?></p>

                        <hr>

                        <strong><i class="fas fa-mail-bulk mr-1"></i> รหัสไปรษณี</strong>

                        <p class="text-muted">47160</p>

                        <hr>

                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.col -->

                  <div class="col-md-3">
                    <div class="px-auto elevation-2"><img src="<?php echo base_url('assest/img/otop'); ?>/<?php echo $readshowproduct->user_profile_cover_img; ?>   " alt="license Image" style="width:100%; height:335px;"></div>
                  </div>
                  <!-- /.col -->

                </div>
                <!-- /.row -->

              </section>

            </div>
          </div>
        </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

  </section>

  <!-- /.content -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <h1>รายการเพิ่มเติม</h1>
          <hr style="border:0.5px solid #000;">
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content mt-1">

    <div class="row">
      <?php foreach ($showproduct as $show) { ?>
        <?php if ($show->number == 0) { ?>
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-3">
            <a href="<?php echo base_url('Product/Product_view/') . $show->id_product; ?>">
              <div class="card bg-white rounded-lg elevation-4" data-aos="zoom-in" style="width: 100%;">
                <div class="ribbon-wrapper ribbon-lg">
                  <div class="ribbon bg-danger text-lg">
                    ของหมด
                  </div>
                </div>
                <img src="<?php echo base_url('assest/img/otop'); ?>/<?php echo $show->img_otop; ?>" class="card-img-top rounded-top" style="height:9rem;object-fit:cover;" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $show->name_product; ?></h5>
                  <p class="card-text"><?php echo $show->price; ?> <i class="fab text-warning text-lg fa-bitcoin ml-2"></i></p>
                  <p class="card-text">จำนวนที่ลงขาย <?php echo $show->number; ?> ชิ้น</p>
                </div>
              </div>
            </a>
          </div><!-- ส่วนกล่องสินค้า -->
          <?php } else { ?>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-3">
              <a href="<?php echo base_url('Product/Product_view/') . $show->id_product; ?>">
                <div class="card bg-white rounded-lg elevation-4" data-aos="zoom-in" style="width: 100%;">
                  <img src="<?php echo base_url('assest/img/otop'); ?>/<?php echo $show->img_otop; ?>" class="card-img-top rounded-top" style="height:9rem;object-fit:cover;" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $show->name_product; ?></h5>
                    <p class="card-text"><?php echo $show->price; ?> <i class="fab text-warning text-lg fa-bitcoin ml-2"></i></p>
                    <p class="card-text">จำนวนที่ลงขาย <?php echo $show->number; ?> ชิ้น</p>
                  </div>
                </div>
              </a>
            </div><!-- ส่วนกล่องสินค้า -->
            <?php } ?>
      <?php } ?>

    </div><!-- ส่วนrow -->

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

          <?php $totell= 0; foreach ($showbasket as $show) {

            $totel1 = $show->number_basket;
            $totel2 = $show->price;
            $totel3 = $totel1 * $totel2;
            $kerrybatket = $show->kerry_price_basket;
            $totellkerrybasket = $totel3 + $kerrybatket;
            $totell = $totellkerrybasket + $totell;?>

            <div class="col-4">
              <img src="<?php echo base_url('assest/img/otop'); ?>/<?php echo $show->img_otop; ?>" style="height:4.5rem;object-fit:cover;" alt="...">
            </div>
            <div class="col-5">
              <?php echo $show->name_product; ?><br>
              <?php echo $show->number_basket; ?> รายการ<br>
              <?php echo $show->kerry_price_basket;?> ราคาส่ง
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
            <p class="py-1">รวม :<?php echo $totell; ?> .-<p>
          </div>
        </div>
      </div>
    </aside>
    <!-- /.control-sidebar -->


  <footer class="main-footer">
    <strong>Copyright &copy; 2563 <a href="CPE">CPE-Project</a>.</strong> All rights
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
  <!-- AOS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000
    });
  </script>
</body>

</html>
