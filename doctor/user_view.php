<?php 
session_start(); 
require("../files/config.php");
?>
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
				
				<?php require('../files/nav.php');?>

				<div class="content-wrapper">

					<div class="container-xxl flex-grow-1 container-p-y">

						<div class="card mb-4">
							<div class="card-header text-center">
								<a onclick="window.history.back()" class="btn rounded-pill btn-outline-secondary btn btn-sm btn-secondary m-2 mt-0" style="float:left;">
									<i class="bx bxs-left-arrow-circle"></i> Back
								</a>

								<h5 class="mb-0 text-primary text-center">User Details</h5>
							</div>

							<div class="card-body">

								<div class="row">

									<div class="col-lg-3 col-md-3 mb-3">
										<h5 class="mb-2">Viraj Kadam</h5>
										<p class="text-muted mb-0">Name</p>
									</div>

									<div class="col-lg-3 col-md-3 mb-3">
										<h5 class="mb-2">8806431723</h5>
										<p class="text-muted mb-0">Mobile</p>
									</div>

									<div class="col-lg-3 col-md-3 mb-3">
										<h5 class="mb-2">3rd July 2023</h5>
										<p class="text-muted mb-0">DOB</p>
									</div>

									<div class="col-lg-2 col-md-2 mb-3">
										<h5 class="mb-2">Male</h5>
										<p class="text-muted mb-0">Gender</p>
									</div>

									<div class="col-lg-3 col-md-3 mb-3">
										<h5 class="mb-2">Non Diabetic</h5>
										<p class="text-muted mb-0">Diabetes Status</p>
									</div>

								</div>

							</div>

						</div>


						<div class="row mb-4">
							<div class="col-lg-12 col-md-12 col-sm-12">

								<div class="card">
									<div class="card-header text-center">
										<h5 class="mb-4 text-primary text-center">Appointment Request</h5>

										<div class="row">

											<div class="col-lg-2 col-md-2 mb-3">
												<h5 class="mb-2">3rd July 2023</h5>
												<p class="text-muted mb-0">DateTime</p>
											</div>

											<div class="col-lg-10 col-md-10 mb-3">
												<h5 class="mb-2">Viraj Kadam</h5>
												<p class="text-muted mb-0">Purpose</p>
											</div>

											<div class="mt-4">
												<a href="" class="btn btn-success" style="float:right;">
													<i class='bx bxs-check-circle bx-sm'></i> Accept
												</a>

												<a href="" class="btn btn-secondary" style="float:left;">
													<i class='bx bxs-timer bx-sm'></i> Postpone
												</a>
											</div>


										</div>
									</div>

								</div>
							</div>
						</div>



						<div class="row">
							<div class="col-lg-12 col-md-12 col-6 mb-4">

								<div class="card">
									<h4 class="card-title text-center my-3">User Daily Sugar Levels</h4>
									<div class="card-body" id="chart"></div>
								</div>

							</div>
						</div>



						<div class="row">

							<div class="col-lg-12 col-md-12 col-sm-12">

								<div class="card">
									<div class="card-header text-center">
										<h5 class="mb-0 text-primary text-center">Medication Details</h5>
									</div>

									<div class="card-body">
										<div class="row">

											<div class="col-lg-9 col-md-9 col-sm-9 p-4" style="border-right:2px solid silver;">

												<h5 class="mb-4 text-secondary text-center">Current Medications</h5>

												<div class="table-responsive text-nowrap">
													<table class="table text-center data_table">
														<thead>
															<tr>
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
																<td>Dolo 650</td>
																<td></td>
																<td>80 Kg</td>
																<td>06:20 AM <br>1st Nov 2023</td>
																<td>Machine</td>
																<td>This is fine value</td>
																<td>
																	<a href="" class="btn btn-icon btn-sm btn-danger" data-bs-toggle="tooltip" title="Remove Record">
																		<i class="bx bx-trash"></i>
																	</a>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>

											<div class="col-lg-3 col-md-3 col-sm-3 p-4">

												<h5 class="mb-4 text-secondary text-center">Create New Medication</h5>

												<div class="row">

													<div class="col-lg-12 col-md-12 col-sm-12 mb-3">
														<label class="form-label">Medicine Name:</label>
														<div class="input-group input-group-merge">
															<span class="input-group-text"><i class="bx bx-cube"></i></span>
															<input type="text" class="form-control" name="medicine_name" placeholder="Enter Name">
														</div>
													</div>


													<div class="col-lg-12 col-md-12 col-sm-12 mb-3">
														<label class="form-label">Category:</label>
														<div class="input-group input-group-merge">
															<span class="input-group-text">
																<i class="bx bx-time"></i>
															</span>
															<select class="form-select" name="category">
																<option value="antidepressants">Antidepressants</option>
																<option value="anxiolytics">Anxiolytics</option>
																<option value="beta blocker">Beta blocker</option>
																<option value="anticonvulsant">Anticonvulsant</option>
																<option value="antimigraine drug">Antimigraine drug</option>
																<option value="antiparkinson">Antiparkinson</option>
																<option value="anesthetics">Anesthetics</option>
																<option value="muscle relaxants">Muscle Relaxants</option>
																<option value="antifungals">Antifungals</option>
																<option value="antiemetic">Antiemetic</option>
																<option value="antineoplastics">Antineoplastics</option>
																<option value="antimycobacterial">Antimycobacterial</option>
																<option value="antiparasitic">Antiparasitic</option>
															</select>
														</div>
													</div>


													<div class="col-lg-12 col-md-12 col-sm-12 mb-3">
														<label class="form-label">Quantity:</label>
														<div class="input-group input-group-merge">
															<span class="input-group-text">
																<i class="bx bx-time"></i>
															</span>
															<input type="number" class="form-control" name="quantity" min="1" max="10" placeholder="Quantity">
														</div>
													</div>


													<div class="col-lg-12 col-md-12 col-sm-12 mb-3">
														<label class="form-label">Consume Time:</label>
														<div class="input-group input-group-merge">
															<span class="input-group-text">
																<i class="bx bx-time"></i>
															</span>
															<select class="form-select" name="consume_time">
																<option value="before_meal">Before Meal</option>
																<option value="after_meal">After Meal</option>
															</select>
														</div>
													</div>

													<div class="mt-4 d-flex justify-content-center">
														<button type="submit" class="btn btn-success">
															<i class='bx bxs-plus-circle bx-sm'></i> Create
														</button>
													</div>

												</div>
											</div>

										</div>

									</div>
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


<script type="text/javascript">
	
	var options = {
		series: [{
			name: 'Network',
			data: [{
				x: 'Dec 23 2017',
				y: null
			},
			{
				x: 'Dec 24 2017',
				y: 44
			}
			],
		}],
		chart: {
			type: 'area',
			height: 300,
			animations: {
				enabled: false
			},
			zoom: {
				enabled: false
			},
		},
		dataLabels: {
			enabled: false
		},
		stroke: {
			curve: 'straight'
		},
		fill: {
			opacity: 0.8,
			type: 'pattern',
			pattern: {
				style: ['verticalLines', 'horizontalLines'],
				width: 5,
				height: 6
			},
		},
		markers: {
			size: 5,
			hover: {
				size: 9
			}
		},
		title: {
			text: 'Daily Sugar Level of Viraj Kadam',
		},
		tooltip: {
			intersect: true,
			shared: false
		},
		theme: {
			palette: 'palette1'
		},
		xaxis: {
			title: {
				text: 'Date'
			},
			type: 'datetime',
		},
		yaxis: {
			title: {
				text: 'Sugar Level'
			}
		}
	};

	var chart = new ApexCharts(document.querySelector("#chart"), options);
	chart.render();

</script>


</body>
</html>
