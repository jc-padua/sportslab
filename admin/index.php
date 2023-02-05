<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sports Lab | Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="./login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="./login/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="./login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="./login/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="./login/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="./login/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="./login/css/util.css">
	<link rel="stylesheet" type="text/css" href="./login/css/main.css">
</head>

<body>
	<div class="header">

		<!--Content before waves-->
		<div class="inner-header flex">
			<path fill="#FFFFFF" stroke="#000000" stroke-width="10" stroke-miterlimit="10" d="M57,283" />
			<g>
				<path fill="#fff" d="M250.4,0.8C112.7,0.8,1,112.4,1,250.2c0,137.7,111.7,249.4,249.4,249.4c137.7,0,249.4-111.7,249.4-249.4
		C499.8,112.4,388.1,0.8,250.4,0.8z M383.8,326.3c-62,0-101.4-14.1-117.6-46.3c-17.1-34.1-2.3-75.4,13.2-104.1
		c-22.4,3-38.4,9.2-47.8,18.3c-11.2,10.9-13.6,26.7-16.3,45c-3.1,20.8-6.6,44.4-25.3,62.4c-19.8,19.1-51.6,26.9-100.2,24.6l1.8-39.7		c35.9,1.6,59.7-2.9,70.8-13.6c8.9-8.6,11.1-22.9,13.5-39.6c6.3-42,14.8-99.4,141.4-99.4h41L333,166c-12.6,16-45.4,68.2-31.2,96.2	c9.2,18.3,41.5,25.6,91.2,24.2l1.1,39.8C390.5,326.2,387.1,326.3,383.8,326.3z" />
			</g>
			</svg>
			<!-- Form Below -->
			<div class="limiter">
				<div class="container-login">
					<div class=" wrap-login p-t-30 p-b-50">
						<h2 class="login-form-title p-b-41">
							Admin Account L<a href="admin_aboutus.php" class="fs-28" style="font-weight: 800; color: #FFFFFF !important">o</a>gin
						</h2>
						<form class="login-form validate-form p-b-33 p-t-5" action="./login.php" method="POST">
							<?php if (isset($_GET['error'])) { ?>
								<p class="error"><?php echo $_GET['error']; ?></p>
							<?php } ?>
							<div class="wrap-input validate-input" data-validate="Enter username">
								<label for="uname" class="text-black text-left ml-4">Username</label>
								<input class="input" type="text" name="uname" placeholder="">
								<span class="focus-input"></span>
							</div>

							<div class="wrap-input validate-input" data-validate="Enter password">
							<label for="uname" class="text-black text-left ml-4">Password</label>
								<input class="input" type="password" name="password" placeholder="">
								<span class="focus-input"></span>
							</div>							
							<div class="container-login-form-btn m-t-32">
								<button type="submit" class="login-form-btn">
									Login
								</button>
							</div>
						<!-- <a href="" class="link">Forgot Password?</a> -->

						</form>

					</div>
				</div>
			</div>
		</div>
		<!--Waves Container-->
		<div>
			<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
				<defs>
					<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
				</defs>
				<g class="parallax">
					<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
					<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
					<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
					<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
				</g>
			</svg>
		</div>
		<!--Waves end-->

	</div>



	<div id="dropDownSelect1"></div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>

</html>