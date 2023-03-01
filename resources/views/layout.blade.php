 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="../../../../../global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/customStyle.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="../../../../../global_assets/js/main/jquery.min.js"></script>
	<script src="../../../../../global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="../../../../../global_assets/js/plugins/loaders/blockui.min.js"></script>
	<script src="../../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="../../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="../../../../../global_assets/js/plugins/forms/styling/switch.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="../../../../../global_assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="../../../../../global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="../../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="../../../../../global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="../../../../../global_assets/js/plugins/ui/moment/moment.min.js"></script>
	<script src="../../../../../global_assets/js/plugins/pickers/daterangepicker.js"></script>
	<script src="../../../../../global_assets/js/plugins/notifications/bootbox.min.js"></script>
	<script src="../../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="../../../../../global_assets/js/demo_pages/form_checkboxes_radios.js"></script>
	<script src="../../../../../global_assets/js/plugins/notifications/jgrowl.min.js"></script>
	<script src="../../../../../global_assets/js/plugins/notifications/noty.min.js"></script>
	<script src="../../../../../global_assets/js/demo_pages/extra_jgrowl_noty.js"></script>
	<script src="../../../../../global_assets/js/plugins/visualization/echarts/echarts.min.js"></script>
	<script src="../../../../../global_assets/js/demo_pages/charts/echarts/columns_waterfalls.js"></script>
	<script src="../assets/js/app.js"></script>
	<script src="../../../../../global_assets/js/demo_pages/dashboard.js"></script>
	<script src="//unpkg.com/alpinejs" defer></script>
	<!-- /theme JS files -->
    <title>IDcardMIS</title>
 </head>
 <body>
    	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="index.html" class="d-inline-block">
				<img src="../../../../global_assets/images/logo_light.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						{{-- <i class="icon-paragraph-justify3"></i> --}}
					</a>
				</li>
			</ul>
			<ul class="navbar-nav">
                @auth
				<li class="nav-item dropdown dropdown-user" style="position: absolute;top:0rem;right:2rem">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
						<span>{{auth()->User()->name}}</span>
					</a>
                 		<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
						<a href="{{ url('/logout') }}" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
				</li>
				@else
				<li>
					<a href="/login" class="navbar-nav-link d-flex"style="position: absolute;top:0rem;right:2rem"><span>Login</span></a>
				</li>
				@endauth
			</ul>
		</div>
	</div>
	<!-- /main navbar -->
    {{--Render Views--}}
	<!-- Page content -->
	<div class="page-content">
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center"  style="min-hight:44rem !important">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->
		
		
			<!-- Sidebar content -->
			<div class="sidebar-content">
		
				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							@auth
							<div class="mr-3">
								<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>
		
							<div class="media-body">
								
								<div class="media-title font-weight-semibold">{{auth()->User()->name}}</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;Kabul,Afghanistan
								</div>
								@endauth
							</div>
		
							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->
		
		
				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">
		
						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="/dashboard" class="nav-link active">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-magazine"></i> <span>IDCardMIS</span></a>
		
							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="index.html" class="nav-link active">Register Form</a></li>
								<li class="nav-item"><a href="index.html" class="nav-link active">Show list</a></li>
								<li class="nav-item"><a href="index.html" class="nav-link active">delete form</a></li>
							</ul>
						</li>
					  
						<!-- /forms -->
		
						<!-- Components -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">user management</div> <i class="icon-users4" title="Components"></i></li>
					   <li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-cogs"></i> <span>User Management</span></a>
		
							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="/register" class="nav-link active">Register User</a></li>
								<li class="nav-item"><a href="/searchusers" class="nav-link active">List Users</a></li>
								<li class="nav-item"><a href="/" class="nav-link active">Edit User</a></li>
								<li class="nav-item"><a href="/accesstouser" class="nav-link active">Grant Access</a></li>
								<li class="nav-item"><a href="/" class="nav-link active">Delete Users</a></li>
							</ul>
						</li>
						<!-- /components -->
		
					   
		
						
		
					 
		
						
						<!-- Page kits -->
					   
						<!-- /page kits -->
		
					</ul>
				</div>
				<!-- /main navigation -->
		
			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content">
				<x-flash-message />
				
				@yield('content')
			</div>
		</div>
	</div>
    
    <!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light" style="position: absolute;bottom:0;overflow: hidden;
            width: 100%;">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text" style="position: absolute; left:18rem">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
						<li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
					</ul>
				</div>
			</div>
			
			<!-- /footer -->
 </body>
 </html>