<!DOCTYPE html>
<html>
<head>
	<?php require('files/meta.html');?>
	
	<title>Sugar Tracking</title>

	<?php require('files/css.html');?>
</head>

<body>


	<div class="layout-wrapper layout-content-navbar">
		<div class="layout-container">

			<?php require('files/sidebar.html');?>

			<div class="layout-page">
				
				<?php require('files/nav.php');?>

				<div class="content-wrapper">

					<div class="container-xxl flex-grow-1 container-p-y">

						<div class="card mb-4">
							<div class="card-header text-center">
								<a onclick="window.history.back()" class="btn rounded-pill btn-outline-secondary btn btn-sm btn-secondary m-2 mt-0" style="float:left;">
									<i class="bx bxs-left-arrow-circle"></i> Back
								</a>

								<a style="float:right" href="meal_create.php" class="btn rounded-pill btn-success mb-3">
									<i class="bx bx-plus-circle"></i> &nbsp; Create Meal Tracking
								</a>
							</div>

							<div class="card-body">

								<div class="table-responsive text-nowrap">
									<table class="table text-center data_table">
										<thead>
											<tr>
												<th>Emp No.</th>
												<th>Name</th>
												<th>Mobile</th>
												<th>Email</th>
												<th>Department</th>
												<th>Super Admin</th>
												<th>Account Status</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody class="table-border-bottom-0">
											<tr>
												<td>011</td>
												<td>Viraj Kadam</td>
												<td>8806431723</td>
												<td>hivirajkadam@gmail.com</td>
												<td>Safety</td>
												<td>
													<span class="badge bg-label-info"> <i class="bx bx-user-circle"></i> Super Admin</span>
												</td>
												<td><span class="badge bg-label-success"> Active </span></td>
												<td>
													<a href="" class="btn btn-xs btn-danger">
														<i class="bx bx-trash bx-sm"></i>
													</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>

							</div>
						</div>

					</div>


					<?php require('files/footer.html');?>


					<div class="content-backdrop fade"></div>
				</div>

			</div>

		</div>


		<div class="layout-overlay layout-menu-toggle"></div>
	</div>


	<?php require('files/js.html');?>

</body>
</html>
