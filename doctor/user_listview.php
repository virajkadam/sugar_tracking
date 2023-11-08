<!DOCTYPE html>
<html>
<head>
	<?php require('../files/meta.html');?>
	
	<title>Sugar Tracking</title>

	<?php require('../files/css.html');?>
</head>

<body>
	<div class="layout-wrapper layout-content-navbar">
		<div class="layout-container">

			<?php require('../files/sidebar_doctor.html');?>

			<div class="layout-page">
				
				<?php require('../files/nav.html');?>

				<div class="content-wrapper">

					<div class="container-xxl flex-grow-1 container-p-y">

						<div class="card mb-4">

							<div class="card-header text-center">
								<a onclick="window.history.back()" class="btn rounded-pill btn-outline-secondary btn btn-sm btn-secondary m-2 mt-0" style="float:left;">
									<i class="bx bxs-left-arrow-circle"></i> Back
								</a>
							</div>

							<div class="card-body">

								<div class="table-responsive text-nowrap">
									<table class="table text-center data_table">
										<thead>
											<tr>
												<th>Patient Number</th>
												<th>DateTime</th>
												<th>Purpose</th>
												<th>Note</th>
												<th>Status</th>
												<th>Appointment</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody class="table-border-bottom-0">
											<tr>
												<td>011</td>
												<td>06:20 AM <br>1st Nov 2023</td>
												<td>This is fine value</td>
												<td>This is fine value</td>
												<td>Postponed</td>
												<td>
													<span class="badge rounded-pill bg-success">Yes</span>
													<p data-bs-toggle="tooltip" title="Appointment Date">
														1st Nov 2023
													</p>
												</td>
												<td>

													<a href="user_view.php" class="btn btn-icon btn-sm btn-info me-2" data-bs-toggle="tooltip" title="View Details">
														<i class="bx bx-detail"></i>
													</a>

													<a href="" class="btn btn-icon btn-sm btn-warning me-2" data-bs-toggle="tooltip" title="View Details">
														<i class="bx bx-trash"></i>
													</a>

												</td>
											</tr>
										</tbody>
									</table>
								</div>

							</div>
						</div>

					</div>


					<?php require('../files/footer.html');?>


					<div class="content-backdrop fade"></div>
				</div>

			</div>

		</div>


		<div class="layout-overlay layout-menu-toggle"></div>
	</div>


	<?php require('../files/js.html');?>

</body>
</html>
