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
							</div>

							<div class="card-body">

								<div class="table-responsive text-nowrap">
									<table class="table text-center data_table">
										<thead>
											<tr>
												<th>Patient Number</th>
												<th>Name</th>
												<th>Category</th>
												<th>Quantity</th>
												<th>Consume Time</th>
												<th>DateTime</th>
												<th>Note</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody class="table-border-bottom-0">
											<tr>
												<td>011</td>
												<td>Dolo 650</td>
												<td></td>
												<td>80 Kg</td>
												<td>06:20 AM <br>1st Nov 2023</td>
												<td>Machine</td>
												<td>This is fine value</td>
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
