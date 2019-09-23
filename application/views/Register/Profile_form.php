<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>New Profile</title>

    <!-- Icons font CSS-->
    <link href="<?php echo site_url()?>assets/register_lib/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?php echo site_url()?>assets/register_lib/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <script src="<?php echo base_url()?>assets/cleave/cleave.min.js"></script>
    <script src="<?php echo base_url()?>assets/cleave/cleave.js"></script>

    <!-- Vendor CSS-->
    <link href="<?php echo site_url()?>assets/register_lib/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo site_url()?>assets/register_lib/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo site_url()?>assets/register_lib/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Data Diri Anda</h2>
                    Silahkan Isi data diri anda
                    <br>
                    <br>
                    <?php echo form_open('Register/new_profile'); ?>
                        <div class="input-group">
                            <label style="color: red"><?php echo form_error('name') ?></label>
                            <input class="input--style-1" type="text" placeholder="Nama" name="name">
                        </div>
                                <div class="input-group">
                                  <label style="color: red"><?php echo form_error('alamat') ?></label>
                                  <input class="input--style-1" type="text" placeholder="Alamat" name="alamat">
                                </div>
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <label style="color: red"><?php echo form_error('jenis_kelamin') ?></label>
                                        <select name="jenis_kelamin">
                                            <option disabled="disabled" selected="selected">Jenis Kelamin</option>
                                            <option>Laki-laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                         <div class="input-group">
                             <label style="color: red"><?php echo form_error('no_telp') ?></label>
                            <input class="input--style-1 cleave-number" type="text" placeholder="No Telpon" name="no_telp">
                        </div>
                         <div class="input-group">
                            <label style="color: red"><?php echo form_error('email') ?></label>
                            <input class="input--style-1" type="email" placeholder="E-mail" name="email">
                        </div>
                        <!--  <div>
                              Upload Foto Profil Anda
                              <br>
                              <br>
                              <label><?php echo form_error('foto_gaji') ?></label>
                              <input type="file" class="form-control" name="foto_profile" id="foto_profile" placeholder="Foto Profile"/>
                        </div> -->
                        <div class="p-t-20">
                            <!-- <button class="btn btn--radius btn--green" type="submit">Selanjutnya</button>
                             -->
                             <button type="submit" class="btn btn-primary"> Selanjutnya </button>
                              <?php echo form_close(); ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo site_url()?>assets/register_lib/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?php echo site_url()?>assets/register_lib/vendor/select2/select2.min.js"></script>
    <script src="<?php echo site_url()?>assets/register_lib/vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo site_url()?>assets/register_lib/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?php echo site_url()?>assets/register_lib/js/global.js"></script>

     <script>
           var cleave = new Cleave('.cleave-number', {
                 phone: true,
                 phoneRegionCode: 'ID'
                 // numeralThousandsGroupStyle: 'none',
                 // prefix: '08',
                 // signBeforePrefix: true
        });
    </script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
