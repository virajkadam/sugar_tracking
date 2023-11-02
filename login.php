<!DOCTYPE html>

<html>
<head>
	<?php require('files/meta.html');?>
	
	<title>Sugar Tracking</title>

	<?php require('files/css.html');?>
</head>

<body>

	<div class="container-xxl">
		<div class="authentication-wrapper authentication-basic container-p-y">
			<div class="authentication-inner">

				<div class="card">
					<div class="card-body">

						<div class="app-brand justify-content-center">
							<a href="index.html" class="app-brand-link gap-2">
								<span class="app-brand-logo demo">

								</span>
								<span class="app-brand-text demo text-body fw-bolder">SUGAR TRACKING</span>
							</a>
						</div>

						<h4 class="mb-2">Welcome to Sugar Tracking! 👋</h4>
						<p class="mb-4">Please sign-in to your account and start the adventure</p>

						<form id="formAuthentication" class="mb-3" action="" method="POST">

							<div class="mb-3">
								<label for="mobile" class="form-label">Mobile:</label>
								<input type="number" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile" autofocus/>
							</div>

							<div class="mb-3 form-password-toggle">
								<div class="d-flex justify-content-between">
									<label class="form-label" for="password">Password</label>
								</div>
								<div class="input-group input-group-merge">
									<input type="password" id="password" class="form-control" name="password" placeholder="Password" />
									<span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
								</div>
							</div>

							<div class="my-4">
								<button class="btn btn-primary d-grid w-100" type="submit">Login</button>
							</div>
						</form>

						<p class="text-center">
							<span>New on our platform?</span>
							<a href="signup.php">
								<span>Create new account here</span>
							</a>
						</p>
					</div>
				</div>

			</div>
		</div>
	</div>

	<?php require('files/js.html');?>

</body>
</html>
