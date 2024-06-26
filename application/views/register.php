<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../public/userassetes/Login_v4/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../public/userassetes/Login_v4/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../public/userassetes/Login_v4/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../public/userassetes/Login_v4/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../public/userassetes/Login_v4/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../public/userassetes/Login_v4/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../public/userassetes/Login_v4/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../public/userassetes/Login_v4/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../public/userassetes/Login_v4/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../public/userassetes/Login_v4/css/util.css">
	<link rel="stylesheet" type="text/css" href="../public/userassetes/Login_v4/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../public/userassetes/Login_v4/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form action="<?=base_url();?>register/save" method="POST" id="login" class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Register
					</span>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
						<span class="label-input100">Name</span>
						<input class="input100" type="text" name="name" id="Name" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" id="Email" placeholder="Type your email">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
						<span class="label-input100">Phone</span>
						<input class="input100" type="text" name="phone" id="Phone" placeholder="Type your phone">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
						<span class="label-input100">Address</span>
						<input class="input100" type="text" name="address" id="address" placeholder="Type your address">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="text" name="password" id="Password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<br>
					
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Register
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							<a href="<?php echo SITE_PATH."/index.php";?>">
							<h5>LOGIN</h5>
						</a>if you have account
						</span>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../public/userassetes/Login_v4/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../public/userassetes/Login_v4/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../public/userassetes/Login_v4/vendor/bootstrap/js/popper.js"></script>
	<script src="../public/userassetes/Login_v4/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../public/userassetes/Login_v4/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../public/userassetes/Login_v4/vendor/daterangepicker/moment.min.js"></script>
	<script src="../public/userassetes/Login_v4/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../public/userassetes/Login_v4/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../public/userassetes/Login_v4/js/main.js"></script>

</body>
</html>