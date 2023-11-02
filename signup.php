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

							<h4 class="mb-2">Adventure starts here 🚀</h4>
							<p class="mb-4">Make your sugar </p>

							<form id="formAuthentication" class="mb-3" action="index.html" method="POST">
								<div class="mb-3">
									<label for="username" class="form-label">Username</label>
									<input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" autofocus
									/>
								</div>
								<div class="mb-3">
									<label for="email" class="form-label">Email</label>
									<input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" />
								</div>
								<div class="mb-3 form-password-toggle">
									<label class="form-label" for="password">Password</label>
									<div class="input-group input-group-merge">
										<input type="password" id="password" class="form-control" name="password" placeholder="Enter Password">
										<span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
									</div>
								</div>


								<button class="btn btn-primary d-grid w-100">Sign up</button>
							</form>

							<p class="text-center">
								<span>Already have an account?</span>
								<a href="auth-login-basic.html">
									<span>Sign in instead</span>
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