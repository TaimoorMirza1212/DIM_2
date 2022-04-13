
	<?php
		include('partials/header.php');
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
									<header>Order Disputes</header>
								</div>
								<div class="card-body ">
									<div class="row p-b-20">
										<div class="col-md-6 col-sm-6 col-6">
											<div class="btn-group">
												<button id="addRow1" class="btn btn-info">
													Add New <i class="fa fa-plus"></i>
												</button>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6">
											<div class="btn-group pull-right">
												<button class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
													data-toggle="dropdown">Tools
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
									<table class="table table-hover table-checkable order-column full-width"
										id="example4">
										<thead>
											<tr>
												<th class="center">No</th>
												<th class="center">Opened By</th>
												<th class="center">Email</th>
												<th class="center">Subject</th>
												<th class="center">Status</th>
												<th class="center">Assign To</th>
												<th class="center">Date</th>
												<th class="center">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="center">1</td>
												<td class="center">Jens Brincker</td>
												<td class="center">test@example.com</td>
												<td class="center">Image not Proper</td>
												<td class="center">
													<span class="label label-sm label-success">complete</span>
												</td>
												<td class="center">Kenny Josh</td>
												<td class="center">27/05/2016</td>
												<td class="center">
													<a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
														<i class="fa fa-pencil"></i>
													</a>
													<button class="btn btn-tbl-delete btn-xs">
														<i class="fa fa-trash-o "></i>
													</button>
												</td>
											</tr>
											<tr>
												<td class="center">2</td>
												<td class="center">Mark Hay</td>
												<td class="center">test@example.com</td>
												<td class="center">Compile time error</td>
												<td class="center">
													<span class="label label-sm label-warning">new </span>
												</td>
												<td class="center"> Mark</td>
												<td class="center">26/05/2017</td>
												<td class="center">
													<a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
														<i class="fa fa-pencil"></i>
													</a>
													<button class="btn btn-tbl-delete btn-xs">
														<i class="fa fa-trash-o "></i>
													</button>
												</td>
											</tr>
											<tr>
												<td class="center">3</td>
												<td class="center">Anthony Davie</td>
												<td class="center">test@example.com</td>
												<td class="center">About web template</td>
												<td class="center">
													<span class="label label-sm label-success ">complete</span>
												</td>
												<td class="center">Cinnabar</td>
												<td class="center">21/05/2016</td>
												<td class="center">
													<a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
														<i class="fa fa-pencil"></i>
													</a>
													<button class="btn btn-tbl-delete btn-xs">
														<i class="fa fa-trash-o "></i>
													</button>
												</td>
											</tr>
											<tr>
												<td class="center">4</td>
												<td class="center">David Perry</td>
												<td class="center">test@example.com</td>
												<td class="center">How to change color</td>
												<td class="center">
													<span class="label label-sm label-danger">pending</span>
												</td>
												<td class="center">Felix </td>
												<td class="center">20/04/2016</td>
												<td class="center">
													<a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
														<i class="fa fa-pencil"></i>
													</a>
													<button class="btn btn-tbl-delete btn-xs">
														<i class="fa fa-trash-o "></i>
													</button>
												</td>
											</tr>
											<tr>
												<td class="center">5</td>
												<td class="center">Anthony Davie</td>
												<td class="center">test@example.com</td>
												<td class="center">Image size reduce</td>
												<td class="center">
													<span class="label label-sm label-success ">complete</span>
												</td>
												<td class="center">Beryl</td>
												<td class="center">24/05/2016</td>
												<td class="center">
													<a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
														<i class="fa fa-pencil"></i>
													</a>
													<button class="btn btn-tbl-delete btn-xs">
														<i class="fa fa-trash-o "></i>
													</button>
												</td>
											</tr>
										
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