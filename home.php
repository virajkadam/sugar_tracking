<?php
$localhost_url = "http://$_SERVER[HTTP_HOST]";

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

				
			<?php require('files/nav.html');?>


			<div class="content-wrapper">

				<div class="container-xxl flex-grow-1 container-p-y">
					<div class="row">
						<div class="col-lg-8 mb-4 order-0">
							<div class="card">
								<div class="d-flex align-items-end row">
									<div class="col-sm-7">
										<div class="card-body">
											<h5 class="card-title text-primary">Welcome Viraj! 🎉</h5>
											<p class="mb-4">Track your sugar today. Stay healthy.</p>
											<a href="sugar_create.php" class="btn btn-sm btn-outline-primary">Track Sugar</a>
										</div>
									</div>
									<div class="col-sm-5 text-center text-sm-left">
										<div class="card-body pb-0 px-0 px-md-4">
											<img src="<?php echo $localhost_url;?>/sugar_tracking/assets/img/illustrations/man-with-laptop-light.png" class="img-fluid w-50">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 order-1">
							<div class="row">

								<div class="col-lg-12 col-md-12 col-6 mb-4">
									<div class="card">
										<div class="card-body text-center">
											<small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
											<h3 class="card-title mb-3 mt-2">$12,628</h3>
											<span>Recent Sugar</span>
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
