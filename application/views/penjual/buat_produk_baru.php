<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <title>Halaman Penjual</title>

    <link rel="apple-touch-icon" href="<?php echo base_url('assets/templateadmin/base/assets/images/apple-touch-icon.png')?>">
    <link rel="shortcut icon" href="<?php echo base_url('assets/templateadmin/base/assets/images/favicon.ico')?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="<?php echo base_url('assets/sweetalert/sweetalert2.all.min.js')?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/sweetalert/sweetalert2.min.css')?>">


    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/css/bootstrap.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/css/bootstrap-extend.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/base/assets/css/site.min.css')?>">

    <!-- Plugins -->
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/vendor/animsition/animsition.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/vendor/asscrollable/asScrollable.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/vendor/switchery/switchery.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/vendor/intro-js/introjs.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/vendor/slidepanel/slidePanel.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/vendor/flag-icon-css/flag-icon.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/vendor/chartist/chartist.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/vendor/jvectormap/jquery-jvectormap.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/base/assets/examples/css/dashboard/v1.css')?>">
         <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>


    <!-- Fonts -->
        <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/fonts/weather-icons/weather-icons.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/fonts/web-icons/web-icons.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/templateadmin/global/fonts/brand-icons/brand-icons.min.css')?>">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!--[if lt IE 9]>
    <script src="../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="<?php echo base_url('assets/templateadmin/global/vendor/breakpoints/breakpoints.js')?>"></script>
    <script>
      Breakpoints();
    </script>
</head>
<body>
	 <div class="page-content">
        <div class="panel">
          <div class="panel-body container-fluid">
            <div class="row row-lg">
              <div class="col-md-2">
                <!-- Example Basic Form (Form grid) -->
                <div class="example-wrap">
                  <div class="example">
                    <form autocomplete="off">
                      <div class="row">
                        	<img class="img-circle img-bordered img-bordered-orange" width="200" height="200" src="../../../global/photos/placeholder.png" alt="...">
                      </div>
                    </form>
                  </div>
                </div>
                <!-- End Example Basic Form (Form grid) -->
              </div>
              <div class="col-md-6">
                <!-- Example Basic Form (Form grid) -->
                <div class="example-wrap">
                  <h1 class="example-title">Tambahkan Produk</h4>
                  <div class="example">
                    <form autocomplete="off">

                      <div class="form-group">
                        <label class="form-control-label" for="name">Nama Produk</label>
                        <input type="text" class="form-control" id="name" name="inputBasicText"
                          placeholder="Nama Toko Anda" autocomplete="off" required="" />
                      </div>

                      <div class="form-group">
                        <label class="form-control-label" for="harga">Harga Produk</label>
                        <input type="price" class="form-control" id="harga" name="price"
                          placeholder="Harga Produk Anda" autocomplete="off" required="" />
                      </div>

                      <div class="form-group">
                        <label class="form-control-label" for="stok">Stok Produk</label>
                        <input type="number" min="0" class="form-control" id="stok" name="stok"
                          placeholder="Stok Produk Anda" autocomplete="off" required="" />
                      </div>

                      <div class="form-group">
                        <label class="form-control-file" for="file">Foto Produk</label>
                        <br>
                        <img class="images" type="file" id="foto" height="128" data-src="default.jpg"
                         data-holder-rendered="true" style="width: 140px; height: 140px;" src="default.jpg"/>
                         <br><br>
                         <input type="file" name="foto" type="button" class="btn btn-primary" id="change-profile-pic">


                      <!--  <input type="file" class="form-control" id="inputBasicFotoProfil" name="inputFotoProfil"
                          placeholder="Foto Profil Toko Anda" autocomplete="off" /> -->
                      </div>

                      <!--<div class="form-group">
                        <label for="foto">Foto Produk</label>
                        <input class="form-control-file" type="file" id="foto" name="images" />
                        <input class="form-control-file" type="file" id="foto" name="images" />
                        <input class="form-control-file" type="file" id="foto" name="images" />
                        <input class="form-control-file" type="file" id="foto" name="images" />
                      </div> -->

                      <div class="form-group">
                        <label for="deskripsi">Deskripsi Produk</label>
                        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi"
                          placeholder="Deskripsi Produk Anda" required="" autocomplete="off" /></textarea>
                      </div>

                      <div class="form-group">
                        <button type="button" class="btn btn-primary">Tambahkan</button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- End Example Basic Form (Form grid) -->
              </div>
</body>
</html>