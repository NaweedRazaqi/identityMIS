<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="../../../../global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="../../../../global_assets/js/main/jquery.min.js"></script>
	<script src="../../../../global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="../../../../global_assets/js/plugins/loaders/blockui.min.js"></script>
	<script src="//unpkg.com/alpinejs" defer></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="assets/js/app.js"></script>
    <title>Login</title>
</head>
<body>

	<div class="row col-md-3 justity-content-center" style="position: absolute; right:1rem; top:2rem">
		<x-flash-message />
	</div>
    <div class="page-content">
          
		<!-- Main content -->
		<div class="content-wrapper">
            
			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">
				
				<!-- Login form -->
				<form method="post" action="/login" style="width: 20rem;border: 1px solid bisque;
				box-sizing: border-box;">
					@csrf
					<div class="card mb-0">
						<div class="card-body">
							<div class="text-center mb-3">
								<i ><img src="../images/afghnistanlogo.png" width="60" style="padding-bottom: 2rem"/></i>
								<h5 class="mb-0">Login to your account</h5>
								<span class="d-block text-muted">Enter your credentials below</span>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="email" class="form-control" name="email" value="{{old('email')}}" required />
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
								@error('email')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                 @enderror
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="password" class="form-control" name="password"
                                value="{{old('password')}}" required />
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
								@error('password')
                                 <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                 @enderror
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
							</div>

							<div class="text-center">
								<a href="login_password_recover.html">Forgot password?</a>
							</div>
						</div>
					</div>
				</form>
				<!-- /login form -->

			</div>
			<!-- /content area -->


		

		</div>
		<!-- /main content -->

	</div>
</body>
</html>