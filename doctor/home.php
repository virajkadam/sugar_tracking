<?php
$localhost_url = "http://$_SERVER[HTTP_HOST]";

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
						<div class="row">

							<div class="col-lg-4 col-md-4 col-md-4 col-4 mb-4">
								<div class="card">
									<div class="card-body text-center">
										<small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
										<h3 class="card-title mb-3 mt-2">$12,628</h3>
										<span>Recent Sugar</span>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-4 col-md-4 col-4 mb-4">
								<div class="card">
									<div class="card-body text-center">
										<small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
										<h3 class="card-title mb-3 mt-2">$12,628</h3>
										<span>Recent Sugar</span>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-4 col-md-4 col-4 mb-4">
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
