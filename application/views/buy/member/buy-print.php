<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Invoice</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assest/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assest/dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Main content -->
          <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="row">
              <div class="col-12">
                <h4>
                  <i class="fas fa-globe"></i> OTOP นวัตวิธี
                  <small class="float-right">วันที่ : 2/10/2020</small>
                </h4>
              </div>
              <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
              <div class="col-sm-4 invoice-col">
                จาก
                <address>
                  <strong>รายชื่อคนขาย</strong><br>
                  นายกล้วยเเขก<br>
                  ไข่ดำ<br>
                  โทร: 081-235432<br>
                  อีเมล: OTOP@gmail.com
                </address>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                ถึง
                <address>
                  <strong>เจมส์มี่</strong><br>
                  12/6 บ.บึงเค็ง อ.เซกา<br>
                  จ.บึงกาฬ, ไปรษณี 13579<br>
                  โทร: 096-5391037<br>
                  อีเมล: nutthapongh@gmail.com
                </address>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                <b>รหัสบิล #007612</b><br>
                <br>
                <b>ไอดีผู้ซื้อ :</b> 4F3S8J<br>
                <b>วันที่สั่งซื้อ :</b> 2/22/2014<br>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Table row -->
            <div class="row">
              <div class="col-12 table-responsive">
                <table class="table table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>ชื่อ</th>
                    <th>จำนวน</th>
                    <th>ผู้ขาย</th>
                    <th>ราคา</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>ไก่ไข่</td>
                    <td>2</td>
                    <td>นายไข่ต้ม</td>
                    <td>64</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>ไก่ไข่มาก</td>
                    <td>2</td>
                    <td>นายไข่ต้ม</td>
                    <td>64</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>ไก่ไข่อิอิ</td>
                    <td>2</td>
                    <td>นายไข่ต้ม</td>
                    <td>64</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>ไก่ไข่-3-</td>
                    <td>2</td>
                    <td>นายไข่ต้ม</td>
                    <td>64</td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
              <!-- accepted payments column -->
              <div class="col-6">
                <p class="lead">เลือกจ่าย :</p>
                <img src="<?php echo base_url(); ?>assest/dist/img/credit/visa.png" alt="Visa">
                <img src="<?php echo base_url(); ?>assest/dist/img/credit/mastercard.png" alt="Mastercard">
                <img src="<?php echo base_url(); ?>assest/dist/img/credit/american-express.png" alt="American Express">
                <img src="<?php echo base_url(); ?>assest/dist/img/credit/paypal2.png" alt="Paypal">

                <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                  Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                  plugg
                  dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                </p>
              </div>
              <!-- /.col -->
              <div class="col-6">
                <p class="lead">วันที่สั่งซื้อ : 2/22/2020</p>

                <div class="table-responsive">
                  <table class="table">
                    <tr>
                      <th style="width:50%">ราคาสินค้ารวม:</th>
                      <td>250</td>
                    </tr>
                    <tr>
                      <th>ค่าส่ง:</th>
                      <td>50</td>
                    </tr>
                    <tr>
                      <th>ทั้งหมด:</th>
                      <td>300 .-</td>
                    </tr>
                  </table>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- this row will not appear when printing -->
            <div class="row no-print">
              <div class="col-12">
                <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> ปริ้น</a>
                <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i>
                  เสร็จสิ้น
                </button>
              </div>
            </div>
          </div>
          <!-- /.invoice -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<script type="text/javascript">
  window.addEventListener("load", window.print());
</script>
</body>
</html>
