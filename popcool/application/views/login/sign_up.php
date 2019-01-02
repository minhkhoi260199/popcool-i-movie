<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" href="<?php echo base_url()?>public/client/img/preloader.gif"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/registration/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/registration/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/registration/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/registration/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/registration/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/registration/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/registration/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/registration/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/registration/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/registration/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    <div>
		<?php if (isset($error)){
			echo $error;
		}
		?>
	</div>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo base_url()?>public/registration/images/bg-02.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-40 p-b-54">
				<form class="login100-form validate-form" method="post" action="<?= $methodname?>">
                    <!-- Brand -->
                    <a class="sticky-logo" href="<?php echo base_url()?>client/index">
                        <img style="width:30px" src="<?php echo base_url()?>public/client/img/popcool-icon.png">
                        <h1>
                            PopCool<span>!</span>Movie
                        </h1>
					</a>

					<span class="login100-form-title p-b-49">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Email is required">
						<span class="label-input100">Email</span><?php if(isset($_SESSION['error'])){?><span><?=$_SESSION['error']?></span>
						<?php unset($_SESSION['error']);
						}?>
						<input class="input100" type="email" name="email"  placeholder="Type your Email">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Email is required">
						<span class="label-input100">Your name</span>
						<input class="input100" type="text" name="name"  placeholder="Your Name">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Email is required">
						<span class="label-input100">Phone</span>
						<input class="input100" type="text" name="tel"  placeholder="Phone number">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" id="btnLogin" name="btnLogin" class="login100-form-btn">
								Sign Up Now
							</button>
						</div>
					</div>

					<div class="flex-col-c p-t-100">
						<a href="<?php echo base_url()?>registration/loadLogin" class="txt2">
							Back to Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>public/registration/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>public/registration/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>public/registration/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url()?>public/registration/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>public/registration/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>public/registration/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url()?>public/registration/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>public/registration/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>public/registration/js/main.js"></script>

</body>
</html>