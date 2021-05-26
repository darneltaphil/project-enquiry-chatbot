<!doctype html>
<html>
<head>
<title>Access Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
    <link rel='shortcut icon' href='../img/favicon.ico' type='image/x-icon' />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
<!--	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
<!--	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	
	<div class="limiter">
		<div class="container-login100" >
<!--		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">-->
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41 text-dark">
					Enquiry Bot Backend
				</span>
				<div id="error-msg" class="alert alert-danger" style="display:none" ></div>

				<form class="login100-form validate-form p-b-33 p-t-5 " id="user_signin_form" style="background-color: rgba(255,255,255, 0.0);">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="email" name="user_email" placeholder="Email" id="user_email" >
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="user_password" placeholder="Password" id="user_password" >
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn"  id="user_submit">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	
<!--
	<div class="form-container sign-in-container col-md-12">
		<form action="#" id="user_signin_form">
			<span>Use Your Account Details</span >
			<input name="user_email" id="user_email" type="email" placeholder="Email" />
			<input name="user_password" id="user_password" type="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button id="user_submit" class="p-2 bg-gradient-primary px-3">Sign In</button>
		</form>
	</div>
-->
	
	
	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<!--
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
-->
<!--===============================================================================================-->
<!--	<script src="vendor/countdowntime/countdowntime.js"></script>-->
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="loginpage/login.js"></script>
</body>
</html>