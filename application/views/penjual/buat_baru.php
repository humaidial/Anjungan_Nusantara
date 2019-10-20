<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <title>Halaman Penjual</title>

    <?php include 'link_asset.php'?>
    
    <script src="<?php echo base_url('assets/templateadmin/global/vendor/breakpoints/breakpoints.js')?>"></script>
    <script>
      Breakpoints();
    </script>
</head>
<body>
	 <div class="page-content">
        <div class="panel">
          <div class="panel-body container-fluid">

              <?php $this->load->view("penjual/_partials/breadcrumb.php") ?>
              <?php if ($this->session->flashdata('success')): ?>
              <div class="alert alert-success" role="alert">
              <?php echo $this->session->flashdata('success'); ?>
              </div>
              <?php endif; ?>

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
                  <h1 class="example-title">Identitas Toko</h4>
                    <?php echo $error?>
                  <div class="example">
                    <form autocomplete="off">
                    	<form action="<?php base_url('Penjual/create_penjual') ?>" method="post" enctype="multipart/form-data" >
                      <div class="form-group">
                   <!-- <?php echo form_open_multipart('Penjual/create_penjual'); ?> -->
                     
                        <?php echo validation_errors(); ?>
                        <?php  if(isset($error)){echo $error;} ?>
                   <!-- <form method="post" accept-charset="utf-8" action="<?= site_url()?>/penjual/create_penjual" id="usaha_id"> -->

                        <label class="form-control-label" for="inputBasicNama">Nama Toko</label>
                        <input type="text" class="form-control" 
                        id="usaha_nama" name="usaha_nama"
                          placeholder="Nama Toko Anda" autocomplete="off" />
                          <?php echo form_error('usaha_nama') ?>
                      </div>

                       <div class="form-group">
                        <label class="form-control-label" for="inputBasicAlamatToko">Alamat Toko</label>
                        <input type="text" class="form-control" 
                        id="usaha_alamat" name="usaha_alamat"
                          placeholder="Alamat Toko Anda" autocomplete="off" />
                          <?php echo form_error('usaha_alamat') ?>
                      </div>

                      <div class="form-group">
                        <label class="form-control-label" for="inputBasicNo.Telpon">No. Telp.</label>
                        <input type="number" class="form-control" 
                        id="usaha_no_telp" name="usaha_no_telp"
                          placeholder="No. Telepon Toko Anda" autocomplete="off" />
                          <?php echo form_error('usaha_no_telp') ?>
                      </div>

                      <div class="form-group">
                        <label class="form-control-label" for="inputBasicemail">E-mail</label>
                        <input type="email" class="form-control" id="usaha_email" name="usaha_email"
                          placeholder="Email Toko Anda" autocomplete="off" />
                          <?php echo form_error('usaha_email') ?>
                      </div>

                      <div class="form-group">
                        <label class="form-control-label" for="inputBasicfotoprofil">Foto Profil</label>
                        <br>
                        Select image to upload:
                        <input type="file" name="usaha_foto" id="usaha_foto">
                        <!--<input type="submit" value="Upload Image" name="submit">-->
                        <?php echo form_error('usaha_foto') ?>
                      </div>

                      <div class="form-group">
                        <label class="form-control-label" for="inputBasicUsahaProfil">Profil</label>
                        <textarea class="form-control" cols="20" rows="10" name="usaha_profil" id="usaha_profil">Profil Toko Anda</textarea>
                        <input type=textarea rows="5" class="form-control" id="inputBasicFotoProfil" name="inputFotoProfil"
                          placeholder="Profil Toko Anda" autocomplete="off" />
                          <?php echo form_error('usaha_profil') ?>
                      </div>

                      <div class="form-group">
                        <input type="submit" name="submit" value="Buat Toko" class="btn btn-primary" id="simpan" nama="simpan"> 
                      <!-- Buat Toko </button> -->
                      <!--  <?php echo form_close();?> -->
                      </div>
                    </form>
                  </div>
                </div>
                <!-- End Example Basic Form (Form grid) -->
              </div>


                  
</body>
</html>
