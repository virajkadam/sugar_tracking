<?php 
session_start(); 
require("files/config.php");

$user_id = $_SESSION['user_id'];

$result = $conn->query("SELECT * FROM sugar WHERE user_id = '$user_id' ");
?>
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

								<a style="float:right" href="sugar_create.php" class="btn rounded-pill btn-success mb-3">
									<i class="bx bx-plus-circle"></i> &nbsp; Create Sugar Tracking
								</a>
							</div>

							<div class="card-body">

								<div class="table-responsive text-nowrap">
									<table class="table text-center data_table">
										<thead>
											<tr>
												<th>Meal Period</th>
												<th>Sugar Level</th>
												<th>Current Weight</th>
												<th>DateTime</th>
												<th>Source</th>
												<th>Note</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody class="table-border-bottom-0">
											<?php
											if ($result->num_rows > 0) {
												while ($row = $result->fetch_assoc()) {
													?>
													<tr>
														<td><?=$sugar_meal_period[$row['meal_period']]?></td>
														<td><?=$row['sugar_level']?> mg/dL</td>
														<td><?=$row['current_weight']?> Kg</td>
														<td><?=$row['check_time']?><br><?=$row['track_date']?></td>
														<td><?=$row['source']?></td>
														<td><?=$row['note']?></td>
														<td>
															<a href="" class="btn btn-icon btn-sm btn-danger me-2" data-bs-toggle="tooltip" title="Remove Record">
																<i class="bx bx-trash"></i>
															</a>
														</td>
													</tr>
													<?php
												}
											}
											?> 
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
