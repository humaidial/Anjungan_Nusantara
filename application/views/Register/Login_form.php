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
                    <h2 class="title">Data Login Anda</h2>
                    Silahkan Isi Login anda
                    <br>
                    <br>
                    <?php echo form_open('Register/new_login'); ?>
                        <div class="input-group">
                            <label style="color: red"><?php echo form_error('username') ?></label>
                            <input class="input--style-1" type="text" placeholder="Username : minimal 8 karakter" name="username" id="username">
                        </div>
                        <div class="input-group">
                            <label style="color: red"><?php echo form_error('password') ?></label>
                            <input class="input--style-1" type="password" placeholder="Password : minimal 8 karakter" name="password">
                        </div>
                         <div class="input-group">
                            <label style="color: red"><?php echo form_error('confirm_password') ?></label>
                            <input class="input--style-1" type="password" placeholder="Ulangi Password" name="confirm_password">
                        </div>             
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
                 numeral: true,
                  numeralThousandsGroupStyle: 'none'
        });

    </script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
