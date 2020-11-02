<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?=base_url();?>assets1/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets1/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets1/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets1/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets1/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets1/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets1/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets1/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets1/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets1/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
	<form action="<?=site_url('Login/aksi_login')?>" method="post">
		<div class="container-login100" style="background-image:" src="<?=base_url();?>assets/img/Perpustakaan-1200x550.jpg" width="100%">
			<div class="wrap-login100 p-t-30 p-b-50">
			<span class="login100-form-title p-b-41">
				<h3>
				<p><center>Sistem Inventaris</center></p>
				<p><center>Laboratorium</center></p>
				<p><center>(SILAB)</center></p>
				</h3>
    			</span>
				<div class="login100-form validate-form p-b-33 p-t-5">
				<br>
                <center><img src="<?=base_url();?>assets/img/undiksha.png" width="45%"></center>
					<div class="wrap-input100 validate-input"  data-validate = "Enter username">
						<input class="input100" type="text" name="nama" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
					<?php echo anchor('login/aksi_login/','<button type="submit" class="login100-form-btn">Login</button>'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?=base_url();?>assets1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url();?>assets1/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url();?>assets1/vendor/bootstrap/js/popper.js"></script>
	<script src="<?=base_url();?>assets1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url();?>assets1/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url();?>assets1/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?=base_url();?>assets1/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url();?>assets1/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url();?>assets1/js/main.js"></script>

</body>
</html>