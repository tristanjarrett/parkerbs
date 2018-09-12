<!doctype html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<title><?php pbs_title(); ?></title>
	<!-- stylesheets -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/custom.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/slick/css/slick.min.css'; ?>">
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

	<!-- header section -->
	<div class="navbar-expand-md navbar-light">

		<!-- main header -->
		<header class="pbs-header">
			<div class="container-fluid">

				<div class="row">

					<div class="col-auto">
						<a href="<?php echo get_bloginfo('wpurl'); ?>">
							<img src="<?php echo get_bloginfo('template_directory') . '/images/core/logo.png'; ?>" alt="Logo" class="pbs-logo">
						</a>
					</div>

					<div class="col d-none d-md-block pl-0">

						<div class="row">
							<div class="col-auto">
								<img src="<?php echo get_bloginfo('template_directory') . '/images/core/slogan.png'; ?>" alt="Slogan" class="pbs-slogan">
							</div>
							<div class="col" style="text-align: right;">
								<a href="#" class="btn btn-primary">My Account</a>
							</div>
						</div>

						<div class="input-group">
						  <input type="text" class="form-control" placeholder="Find your nearest branch.." aria-label="Find your nearest branch.." aria-describedby="button-addon2">
						  <div class="input-group-append">
						    <button class="btn btn-primary" type="button" id="button-addon2">Search</button>
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
					<a href="<?php echo get_bloginfo('wpurl'); ?>">
						<li>
							<span class="d-none d-md-block"><i class="fas fa-fw fa-home fa-2x"></i></span>
							<span class="d-md-none">Home <i class="fas fa-fw fa-home"></i></span>
						</li>
					</a>
					<a href="<?php echo get_bloginfo('wpurl') . '/branches'; ?>">
						<li>
							Branches <i class="fas fa-fw fa-map-marker-alt"></i>
						</li>
					</a>
					<a href="<?php echo get_bloginfo('wpurl') . '/products'; ?>">
						<li>
							Products <i class="fas fa-fw fa-shopping-cart"></i>
						</li>
					</a>
					<a href="<?php echo get_bloginfo('wpurl') . '/about-us'; ?>">
						<li>
							About Us <i class="fas fa-fw fa-user"></i>
						</li>
					</a>
					<a href="<?php echo get_bloginfo('wpurl') . '/charities-and-communities'; ?>">
						<li>
							<span class="d-none d-md-block">Charities & <br>Communities <i class="fas fa-fw fa-globe-americas"></i></span>
							<span class="d-md-none">Communities <i class="fas fa-fw fa-globe-americas"></i></span>
						</li>
					</a>
					<a href="<?php echo get_bloginfo('wpurl') . '/contact-us'; ?>">
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
