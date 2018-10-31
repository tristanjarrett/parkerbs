<!doctype html>
<html lang="en">
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121867918-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-121867918-1');
		</script>
		<!-- End gtag -->

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

		<!-- warning -->
		<div class="container-fluid">
			<div class="alert alert-warning mt-4 mb-0" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
				<h4 class="alert-heading">Please note:</h4>
			  <p>We had a technical error with one of our servers and are working to restore all data, please check back soon.</p>
			  <hr>
			  <p class="mb-0">Customer account access is disabled at the moment but you can still pay your account <a href="https://secure.parkerbs.com">here</a>.</p>
			</div>
		</div>
		<!-- /warning -->

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
										<div class="dropdown">
										  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										    Account Menu
										  </a>
										  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
										    <a class="dropdown-item" href="https://secure.parkerbs.com" target="_blank">Pay Account</a>
										    <a class="dropdown-item" href="https://account.parkerbs.com">My Account</a>
										    <a class="dropdown-item" href="<?php echo site_url() . '/account-application'; ?>">Account Application</a>
										  </div>
										</div>
									</div>
								</div>
							</div>

							<div class="input-group">
							  <input type="text" class="form-control" placeholder="Find your nearest branch.." aria-label="Find your nearest branch.." aria-describedby="button-addon2">
							  <div class="input-group-append">
							    <button class="btn btn-primary" type="button" id="button-addon2">Search <i class="fa fa-search fa-fw"></i></button>
							  </div>
							</div>
						</div>

						<div class="col-auto d-md-none">
							<button class="pbs-menu-btn" type="button" data-toggle="collapse" data-target="#pbsNav">
								<span class="pbs-menu-icon"><i class="fas fa-bars fa-3x"></i></span>
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
						<a href="https://account.parkerbs.com" class="d-md-none">
							<li>
								My Account <i class="fas fa-fw fa-user"></i>
							</li>
						</a>
						<a href="<?php echo site_url() . '/branches'; ?>">
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
						<a href="<?php echo site_url() . '/contact-us'; ?>">
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
