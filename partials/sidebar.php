<!-- start sidebar menu -->
<div class="sidebar-container shadow">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll">
						<ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true"
							data-slide-speed="200">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							<li class="sidebar-user-panel ">
								<div class="user-panel">
									<div class="row">
										<div class="sidebar-userpic">
											<img src="assets/img/<?php echo $_SESSION['profile_img'];?>" class="img-responsive" alt=""> </div>
									</div>
									<div class="profile-usertitle">
										<div class="sidebar-userpic-name"> <?php
										echo $_SESSION['user_name'];
										// echo $username;
										?> </div>
										<div class="profile-usertitle-job"> Admin </div>
									</div>
									<div class="sidebar-userpic-btn">
										<a class="tooltips" href="profile.php" data-placement="top"
											data-original-title="Profile">
											<i class="material-icons">person_outline</i>
										</a>
										<a class="tooltips" href="email_inbox.html" data-placement="top"
											data-original-title="Feedback">
											<i class="material-icons">mail_outline</i>
										</a>
										<!-- <a class="tooltips" href="chat.html" data-placement="top"
											data-original-title="Chat">
											<i class="material-icons">chat</i>
										</a> -->
										<a class="tooltips" href="logout.php" data-placement="top"
											data-original-title="Logout">
											<i class="material-icons">input</i>
										</a>
									</div>
								</div>
							</li>
							<!-- <li class="menu-heading">
								<span>-- Main</span>
							</li> -->
							<li class="nav-item  shadow start " >
								<a href="index.php" class="nav-link nav-toggle">
									<i class="material-icons">dashboard</i>
									<span class="title">Dashboard</span>
									<!-- <span class="arrow"></span> -->
								</a></li>
							
							<li class="nav-item  shadow">
								<a href="revenue_report.php" class="nav-link nav-toggle">
									<i class="material-icons">receipt</i>
									<span class="title">View Revenue Reports</span>
									<!-- <span class="arrow"></span> -->
								</a>
							</li>
							<li class="nav-item  shadow">
								<a href="manage_user.php" class="nav-link nav-toggle">
									<i class="material-icons"> track_changes</i>
									<span class="title">Manage Users</span>
									<!-- <span class="arrow"></span> -->
								</a>
							</li>
							<li class="nav-item  shadow">
								<a href="view_users.php" class="nav-link nav-toggle">
									<i class="material-icons">group</i>
									<span class="title">View Register Users</span>
									<!-- <span class="arrow"></span> -->
								</a>
							</li>
							<li class="nav-item  shadow">
								<a href="order_disputes.php" class="nav-link nav-toggle">
									<i class="material-icons">aspect_ratio</i>
									<span class="title">Manage Order Disputes</span>
									<!-- <span class="arrow"></span> -->
								</a>
                            </li>
							<li class="nav-item  shadow">
								<a href="monitor_orders.php" class="nav-link nav-toggle">
									<i class="material-icons">card_giftcard</i>
									<span class="title">Monitor Orders</span>
									<!-- <span class="arrow"></span> -->
								</a>
                            </li>
							<li class="nav-item  shadow">
								<a href="payments.php" class="nav-link nav-toggle">
                                
                                    <i class="fa fa-money"></i>
									<span class="title">Manage Payments</span>
									<!-- <span class="arrow"></span> -->
								</a>
                            </li>
							<li class="nav-item  shadow">
								<a href="profile.php" class="nav-link nav-toggle">
                                <i class="fa fa-user-circle"></i>
									<span class="title">Manage Profile</span>
									<!-- <span class="arrow"></span> -->
								</a>
                            </li>
								
									
								<!-- </ul>
							</li> -->
						</ul>
					</div>
				</div>
			</div>
			<!-- end sidebar menu -->