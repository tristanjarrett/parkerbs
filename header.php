<!doctype html>
<html lang="en">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<title><?php pbs_title(); ?></title>
		<!-- stylesheets -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/custom.css'; ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/slick/css/slick.min.css'; ?>">
		<!-- google fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Libre+Franklin">
		<!-- icons -->
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri() . '/images/core/icons/apple-icon-57x57.png'; ?>">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri() . '/images/core/icons/apple-icon-60x60.png'; ?>">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri() . '/images/core/icons/apple-icon-72x72.png'; ?>">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri() . '/images/core/icons/apple-icon-76x76.png'; ?>">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri() . '/images/core/icons/apple-icon-114x114.png'; ?>">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri() . '/images/core/icons/apple-icon-120x120.png'; ?>">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri() . '/images/core/icons/apple-icon-144x144.png'; ?>">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri() . '/images/core/icons/apple-icon-152x152.png'; ?>">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() . '/images/core/icons/apple-icon-180x180.png'; ?>">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri() . '/images/core/icons/android-icon-192x192.png'; ?>">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() . '/images/core/icons/favicon-32x32.png'; ?>">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri() . '/images/core/icons/favicon-96x96.png'; ?>">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() . '/images/core/icons/favicon-16x16.png'; ?>">
		<link rel="manifest" href="<?php echo get_template_directory_uri() . '/images/core/icons/manifest.json'; ?>">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() . '/images/core/icons/ms-icon-144x144.png'; ?>">
		<meta name="theme-color" content="#ffffff">
		<?php wp_head();?>
	</head>

	<body>

		<div class="pbs-social-bar">
			<div class="container-fluid">
				<div class="row">
					<div class="col">
						<div class="text-left pbs-social-icons">
							<a href="https://www.linkedin.com/company/parker-building-supplies-ltd" target="_blank"><i class="fab fa-linkedin-in fa-lg"></i></a>
							<a href="https://www.facebook.com/helpmebuildit/" target="_blank"><i class="fab fa-facebook-f fa-lg"></i></a>
							<a href="https://twitter.com/helpmebuildit" target="_blank"><i class="fab fa-twitter fa-lg"></i></a>
						</div>
					</div>
					<div class="col">
						<div class="text-right">
							<a href="https://account.parkerbs.com/site/login?ReturnUrl=/account/my-account?t=MyAccount" class="d-inline-block"><i class="fas fa-sign-in-alt fa-fw"></i> Sign In</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- header section -->
		<div class="navbar-expand-md navbar-light">

			<!-- main header -->
			<header class="pbs-header">
				<div class="container-fluid">

					<div class="row">

						<div class="col-auto">
							<a href="<?php echo site_url(); ?>">
								<img src="<?php echo get_bloginfo('template_directory') . '/images/core/logo.png'; ?>" alt="Logo" class="pbs-logo">
							</a>
						</div>

						<div class="col d-none d-md-block pl-0">

							<div class="row">
								<div class="col-auto">
									<img src="<?php echo get_bloginfo('template_directory') . '/images/core/slogan.png'; ?>" alt="Slogan" class="pbs-slogan">
								</div>
								<div class="col">
									<div class="float-right">
										<div class="pbs-dropdown">
											<button onclick="myFunction()" class="btn btn-primary dropbtn">Account Menu <i class="fas fa-chevron-down fa-fw"></i></button>
										  <div id="myDropdown" class="pbs-dropdown-content">
												<a href="https://secure.parkerbs.com" target="_blank">Pay Account</a>
											  <a href="https://account.parkerbs.com/site/login?ReturnUrl=/account/my-account?t=MyAccount">My Account</a>
											  <a href="<?php echo site_url() . '/account-application'; ?>">Account Application</a>
										  </div>
										</div>
									</div>
								</div>
							</div>

							<div class="input-group">
							  <input id="gadgetAddress" type="text" class="form-control" placeholder="Find your nearest branch.." aria-label="Find your nearest branch.." aria-describedby="button-addon2">
								<input id="gadgetRadius" type="hidden" value="200" />
								<div class="input-group-append">
							    <button class="btn btn-primary" type="button" id="gadgetAddressSubmit" onclick="gotoMapPage()">Search <i class="fa fa-search fa-fw"></i></button>
							  </div>
							</div>
						</div>

						<div class="col-auto d-md-none">
							<button class="pbs-mobile-menu-btn" type="button" data-toggle="collapse" data-target="#pbsNav">
								<span class="pbs-icon"><i class="fas fa-bars fa-3x"></i></span>
							</button>
						</div>

					</div>

				</div>
			</header>
			<!-- /main header -->

			<!-- main navigation -->
			<nav class="pbs-nav collapse navbar-collapse" id="pbsNav">
				<div class="container-fluid">
					<ul class="navbar-nav">
						<a href="<?php echo site_url(); ?>">
							<li>
								<span class="d-none d-md-block"><i class="fas fa-fw fa-home fa-2x"></i></span>
								<span class="d-md-none">Home <i class="fas fa-fw fa-home"></i></span>
							</li>
						</a>

						<a href="https://secure.parkerbs.com" class="d-md-none">
							<li>
								Pay Account <i class="fas fa-fw fa-credit-card"></i>
							</li>
						</a>
						<a href="<?php echo site_url() . '/account-application'; ?>" class="d-md-none">
							<li>
								Account Application <i class="fas fa-fw fa-file"></i>
							</li>
						</a>
						<a href="https://account.parkerbs.com" class="d-md-none">
							<li>
								My Account <i class="fas fa-fw fa-user"></i>
							</li>
						</a>

						<a href="https://account.parkerbs.com/store-locator">
							<li>
								Branches <i class="fas fa-fw fa-map-marker-alt"></i>
							</li>
						</a>
						<a href="<?php echo site_url() . '/products'; ?>">
							<li>
								Products <i class="fas fa-fw fa-shopping-cart"></i>
							</li>
						</a>
						<a href="<?php echo site_url() . '/about-us'; ?>">
							<li>
								About Us <i class="fas fa-fw fa-align-left"></i>
							</li>
						</a>
						<a href="<?php echo site_url() . '/charities-and-communities'; ?>">
							<li>
								<span class="d-none d-md-block">Charities & <br>Communities <i class="fas fa-fw fa-globe-americas"></i></span>
								<span class="d-md-none">Communities <i class="fas fa-fw fa-globe-americas"></i></span>
							</li>
						</a>
						<a href="https://account.parkerbs.com/contact-us">
							<li>
								Contact Us <i class="fas fa-fw fa-phone"></i>
							</li>
						</a>
					</ul>
				</div>
			</nav>
			<!-- ./main navigation -->

		</div>
		<!-- /header section -->
