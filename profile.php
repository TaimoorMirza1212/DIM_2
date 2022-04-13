<?php



include('partials/db_con.php');
include('partials/header.php');

$msg="";
if (isset($_POST['update_profile'])) {

	$p_name = $_POST['p_name'];
	$password = $_POST['password'];
	// $profile_photo = $_FILES['profile_photo'];
	$card_number = $_POST['card_number'];
	$card_title = $_POST['card_title'];
	$card_cvv = $_POST['card_cvv'];
	$card_exp_date = $_POST['card_exp_date'];

	$c_img_name = $_FILES['profile_photo']['name'];
	$c_img_size = $_FILES['profile_photo']['size'];
	$c_img_type = pathinfo($c_img_name, PATHINFO_EXTENSION);
	$c_img_tmp_name = $_FILES['profile_photo']['tmp_name'];
	$res = false;
	$path = "assets/img/" . $c_img_name;
	if (!$_FILES['profile_photo']['name']) {
		$c_img_name =  $_SESSION['profile_img'];
		
	} else if ($_FILES['profile_photo']['name']) {
		$c_img_name = $_FILES['profile_photo']['name'];
		// deleter previous one
		$complete_image="assets/img/" .$_SESSION['profile_img'];
		unlink($complete_image);
		// add new one
		$move_file = move_uploaded_file($c_img_tmp_name, $path);
	}
	$query = "UPDATE `users` SET `name`='$p_name',`password`='$password',`profile_img`='$c_img_name' WHERE id=" . $_SESSION['user_id'];

	$query_result_update_user = mysqli_query($con, $query);
	if($query_result_update_user){
		$msg="Updated Successfully";
	
	}
	if(isset($_POST['card_number']) || isset($_POST['card_title']) || isset($_POST['card_cvv']) ){
		$query = "UPDATE `credit_card` SET `c_number`='$card_number',`c_title`='$card_title',`exp_date`='$card_exp_date',`cvv`='$card_cvv' WHERE user_id=" . $_SESSION['user_id'];
		$query_result = mysqli_query($con, $query);
	}

	// if(!empty($query) &&(mysqli_num_rows($query_result)>0)){
		
	// }
}

// GET User Details --------------------------------------------------------

$query_user = "SELECT id,name,profile_img,password FROM `users` WHERE id=" . $_SESSION['user_id'];
$u_name = $_SESSION['user_name'];
$u_password = $_SESSION['user_pass'];
$u_profile_img = "";
$query_result_user = mysqli_query($con, $query_user);
if ((mysqli_num_rows($query_result_user) > 0)) {
	$result_user = mysqli_fetch_assoc($query_result_user);
	$u_name = $result_user['name'];
	$u_password = $result_user['password'];
	$_SESSION['user_name']=$u_name;
	$_SESSION['profile_img']=$result_user['profile_img'];;
}

// GET Card Details --------------------------------------------------------

$query = "SELECT c_number,c_title FROM `credit_card` WHERE user_id=" . $_SESSION['user_id'];
$c_number = "";
$c_title = "";
$query_result = mysqli_query($con, $query);
if ((mysqli_num_rows($query_result) > 0)) {
	$result = mysqli_fetch_assoc($query_result);
	$c_number = $result['c_number'];
	$c_title = $result['c_title'];
}
?>
<!-- start page container -->
<div class="page-container">
	<?php
	include('partials/sidebar.php');
	?>

	<!-- start page content -->
	<div class="page-content-wrapper">
		<div class="page-content ">
			<div class="card-head">
				<header>Profile</header>
			</div>
			<?php if($msg){?>
				<div class="col-3 mx-md-3 alert alert-success">
  <strong>Success!</strong> <?php echo $msg;?>
</div>
			<?php }?>

			<div class="outer-profile medium_b_raius mx-md-5" style="background:rgba(0,0,0,0.3);padding:1%;">
				<div class=" deep_dark p-md-5 p-3 text-light text-monospace px-md-5">
					<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
						<div class="form-group">
							<div class="row">
								<div class="col">
									<label for="my-input">Display Name</label>
									<input id="my-input" class="form-control" type="text" name="p_name" id="p_name" value="<?php echo $u_name; ?>">
								</div>
								<div class="col">
									<label for="my-input">Change Password</label>
									<input id="my-input" class="form-control" type="password" name="password" id="password" value="<?php echo $u_password; ?>">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-8">
									<label for="my-input">Update Profile Photo</label>
									<input class="form-control py-2" type="file" name="profile_photo" id="profile_photo">
								</div>
								<div class="col">
									<div class="row">
										<div class="sidebar-userpic">
											<img src="assets/img/<?php echo $_SESSION['profile_img']; ?>" class="img-responsive" alt="" style="width:66px; margin:auto;" id="d_p_img">
										</div>
									</div>
								</div>
							</div>
						</div>
						<br>
						<!------------------------------------ Payment Details ------------------>
						<h4>Payment Details</h4>
						<div class="crediet_card bg-light medium_b_raius p-3 pt-1 text-dark mx-md-5">
							<div class="row">
								<div class="col">
									<h4 class="m_bolder">Credit/Debit Card</h4>
								</div>
								<div class="col text-right">
									<img class="img-fluid" src="assets/img/visa.png" style="width:151.05px;" alt="">
								</div>
							</div>


							<div class="row px-4 py-4">
								<div class="col mx-md-5">
									<label for="my-input" class="s_bolder">Card Number</label>
								</div>
								<div class="col-md-9 col-12 ">
									<input id="my-input" class="form-control input_b_raius" placeholder="***********" pattern="\d*" type="text" name="card_number" id="card_number" value="<?php echo $c_number; ?>">
								</div>
							</div>

							<div class="row px-4 py-4">
								<div class="col mx-md-5">
									<label for="my-input" class="s_bolder">Name on Card</label>
								</div>
								<div class="col-md-9 col-12  px-3">
									<input id="my-input" class="form-control input_b_raius" type="text" name="card_title" id="card_title" placeholder="Admin" value="<?php echo $c_title; ?>">
								</div>
							</div>
							<div class="row px-4 py-4">
								<div class="col-md-2 ml-md-5 ">
									<label for="my-input" class="s_bolder">Expiration Date </label>
								</div>
								<div class="col-md-3 mx-md-5 text-center">
									<input id="my-input" placeholder="MM/YY" class="form-control input_b_raius" type="text" name="card_exp_date" id="card_exp_date">
								</div>
								<div class="col-md-1 py-4 py-md-0 text-md-right">
									<label for="my-input" class="s_bolder">CVV </label>
								</div>
								<div class="col-md-2  ">
									<input id="my-input" class="form-control input_b_raius" placeholder="***" type="password" name="card_cvv" id="card_cvv">
								</div>
							</div>
							<div class="col-md-12 pt-2  px-4  mx-md-5">
							<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label text-muted" for="exampleCheck1 ">I acknowledge that my card information is saved in my
									account for subsequent transactions.</label>
  </div>
								<!-- <h6>
								</h6> -->
								</div>

							
						</div>
						<br>
						<!-- <br> -->
						<div class="row d-flex justify-content-center mt-2 ">
							<button class="  btn-lg btn-light" name="update_profile" type="submit">Update</button>
						</div>

				</div>

			</div>

		</div>
	</div>


	</form>
</div>
</div>

</div>
</div>
<!-- end page content -->

<!-- end chat sidebar -->
</div>
<!-- end page container -->
<?php
include('partials/footer.php');
?>