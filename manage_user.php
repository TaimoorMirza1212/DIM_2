<?php
include('partials/db_con.php');
include('partials/header.php');
// Blocked Users -------------------------------------------------------
$msg="";
if(isset($_GET['id']) && isset($_GET['block'])){
$sus_id=$_GET['id'];
	$query="UPDATE `users` SET `user_status`='block' WHERE id=".$sus_id;
	
	$query_result =mysqli_query($con,$query);
	if($query_result){
		$msg="User has been blocked";
		
				}
}
// Unblock Users -------------------------------------------------------
$msg="";
if(isset($_GET['id']) && isset($_GET['running'])){
$sus_id=$_GET['id'];
	$query="UPDATE `users` SET `user_status`='Running' WHERE id=".$sus_id;
	
	$query_result =mysqli_query($con,$query);
	if($query_result){
		$msg="User has been Unblocked";
		
				}
}
// Unblock Users -------------------------------------------------------
$msg="";
if(isset($_GET['id']) && isset($_GET['suspend'])){
$sus_id=$_GET['id'];
	$query="UPDATE `users` SET `user_status`='suspend' WHERE id=".$sus_id;
	
	$query_result =mysqli_query($con,$query);
	if($query_result){
		$msg="User has been Unblocked";
		
				}
}

?>
<!-- start page container -->
<div class="page-container">
	<?php
	include('partials/sidebar.php');
	?>

	<!-- start page content -->
	<div class="page-content-wrapper">
		<div class="page-content">

			<div class="row">
				<div class="col-sm-12">
					<div class="card-box">
						<div class="card-head">
							<header>Manage Users</header>
						</div>
						<div class="card-body ">
							<div class="row p-b-20">
								<div class="col-md-6 col-sm-6 col-6">
									<!--   -->
								</div>
								<div class="col-md-6 col-sm-6 col-6">
									<div class="btn-group pull-right">
										<button class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
											<i class="fa fa-angle-down"></i>
										</button>
										<ul class="dropdown-menu pull-right">
											<li>
												<a href="javascript:;">
													<i class="fa fa-print"></i> Print </a>
											</li>
											<li>
												<a href="javascript:;">
													<i class="fa fa-file-pdf-o"></i> Save as PDF </a>
											</li>
											<li>
												<a href="javascript:;">
													<i class="fa fa-file-excel-o"></i> Export to Excel </a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<table class="table table-hover table-checkable order-column full-width" id="example4">
								<thead>
									<tr>
										<th class="center">No</th>
										<th class="center">Name</th>
										<th class="center">Email</th>
										<th class="center">Status</th>
										<th class="center">Added On</th>
										<th class="center">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									// GET User Details --------------------------------------------------------

									$query_user = "SELECT * FROM `users` WHERE role=0";
									$u_name = "";
									$u_email = "";
									$u_status = "";
									$u_added_on = "";
									$u_id = "";
									$u_profile_img = "";
									$query_result_user = mysqli_query($con, $query_user);
									if ((mysqli_num_rows($query_result_user) > 0)) {
										$count=1;
									while($result_user = mysqli_fetch_assoc($query_result_user)){
										
										$u_name = $result_user['name'];
									$u_email = $result_user['email'];
									$u_status = $result_user['user_status'];
									$u_added_on = $result_user['added_on'];
									$u_id = $result_user['id'];
									?>
									<tr>
										<td class="center"><?php echo $count++;?></td>
										<td class="center"><?php echo $u_name;?></td>
										<td class="center"><?php echo $u_email;?></td>
										<td class="center">
											<?php
											$action_btn_1_icon="";
											$action_btn_1_color="";
											$action_btn_1_title="";
											$action_btn_1_link="";

											$action_btn_2_icon="";
											$action_btn_2_color="";
											$action_btn_2_title="";
											$action_btn_2_link="";

										$label_color_class="";
										// $status_btn_color_class="";
											if($u_status=='Running'){
												$label_color_class="label-success";
												$action_btn_1_color='label-warning';
												$action_btn_1_icon="fa-clock-o";
												$action_btn_1_title="Suspend";
											    $action_btn_1_link="suspend";

												$action_btn_2_color='bg-danger';
												$action_btn_2_icon="fa-ban";
												$action_btn_2_title="Block";
											    $action_btn_2_link="block";
											}else if($u_status=='suspend'){
												$label_color_class="label-warning";
												$action_btn_1_color='label-success';
												$action_btn_1_icon="fa-check-circle-o";
												$action_btn_1_title="Unblock";
											    $action_btn_1_link="running";

												$action_btn_2_color='bg-danger';
												$action_btn_2_icon="fa-ban";
												$action_btn_2_title="Block";
											    $action_btn_2_link="block";
											}
											else if($u_status=='block'){
												$label_color_class="label-danger";
												$action_btn_1_color='label-success';
												$action_btn_1_icon="fa-check-circle-o";
												$action_btn_1_title="Unblock";
											    $action_btn_1_link="running";

												$action_btn_2_color='label-warning';
												$action_btn_2_icon="fa-clock-o";
												$action_btn_2_title="Suspend";
											    $action_btn_2_link="suspend";
											}
											?>
											<span class="label label-sm <?php echo $label_color_class;?>"><?php echo $u_status;?></span>
										</td>
										<td class="center"><?php echo $u_added_on;?></td>
										<td class="center">
											<a href="<?php echo 'manage_user.php'.'?'.$action_btn_1_link.'=true&id='.$u_id;?>"
										 class="btn btn-tbl-delete btn-xs <?php echo $action_btn_1_color; ?> tooltips" data-placement="top"
											data-original-title="<?php echo $action_btn_1_title; ?>">
												<i class="fa <?php echo $action_btn_1_icon; ?> "></i>
												</a>
											<a href="<?php echo 'manage_user.php'.'?'.$action_btn_2_link.'=true&id='.$u_id;?>"
										 class="btn btn-tbl-delete btn-xs <?php echo $action_btn_2_color; ?> tooltips" data-placement="top"
											data-original-title="<?php echo $action_btn_2_title; ?>">
												<i class="fa <?php echo $action_btn_2_icon; ?> "></i>
												</a>
										</td>
									</tr>
										<?php	}
								 }?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end page content -->
	<!-- start chat sidebar -->

	<!-- end chat sidebar -->
</div>
<!-- end page container -->
<?php
include('partials/footer.php');
?>