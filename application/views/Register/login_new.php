<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Pendaftaran</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="<?php echo base_url('assets/register_new/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')?>">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/register_new/css/style.css')?>">

		<script src="<?php echo base_url()?>assets/cleave/cleave.min.js"></script>
    <script src="<?php echo base_url()?>assets/cleave/cleave.js"></script>

	</head>

	<body>

		<div class="wrapper" style="background-image: url('<?php echo base_url('assets/register_new/images/610537.jpg');?>');">
			
			<div class="inner">
				<div class="image-holder">
					<img src="<?php echo base_url('assets/register_new/images/Webp.net-resizeimage.jpg')?>" alt="">
				</div> 
				<form action="">
					<h3>Masuk</h3>

					<div class="form-wrapper">
						<input type="text" placeholder="Nama Pengguna" class="form-control">
						<i class="zmdi zmdi-account"></i>
					</div>

					<div class="form-wrapper">
						<input type="password" placeholder="Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					
					<button> Masuk
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
					<br>
					Belum punya akun?, silahkan DAFTAR
				</form>
			</div>
		</div>
		
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