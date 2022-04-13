<?php
session_start();
require('partials/db_con.php');

$msg="";$roomnumber="";
$msgClass="";
if(isset($_POST['submit'])){
	$email = isset($_POST['uname']) ? mysqli_real_escape_string($con,$_POST['uname'])  : '';
	$password = isset($_POST['password']) ? mysqli_real_escape_string($con,$_POST['password']) : '';

// echo $uname . ' ' . $password;
	$query="SELECT id,name,profile_img,email,password FROM `users` WHERE email='$email' AND password='$password' And role=1";
	
	$query_result =mysqli_query($con,$query);
	if(!empty($query) &&(mysqli_num_rows($query_result)>0)){
			$result=mysqli_fetch_assoc($query_result);
			$_SESSION['user_name'] =$result['name'];
			$_SESSION['user_id'] =$result['id'];
			$_SESSION['user_pass'] =$result['password'];
			$_SESSION['profile_img'] =$result['profile_img'];
			$_SESSION['login'] ='loged_in';
		echo $_SESSION['user_name'];
			header("location: index.php");
			// echo $result['uname'];
				}else{
					$msg="Invalid Username and Password.";
				}
}
 ?>
<!DOCTYPE html>
<html>



<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>DIM-Admin</title>
	<!-- icons -->
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="assets/plugins/iconic/css/material-design-iconic-font.min.css">
	<!-- bootstrap -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="assets/css/pages/extra_pages.css">
	<!-- favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.ico" />
</head>

<body>
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="<?php $_SERVER['PHP_SELF'];?>" >
					<span class="login100-form-logo">
						<i class="zmdi zmdi-flower"></i>
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="uname"  value="" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password"  value="" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submit" value="Login">
							Login
						</button>
					</div>
					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- start js include path -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/pages/extra_pages/login.js"></script>
	<!-- end js include path -->
</body>



</html>
