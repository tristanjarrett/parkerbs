<!doctype html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<title><?php pbs_title(); ?></title>
	<!-- core stylesheets -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/custom.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/slick.min.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/swiper.min.css'; ?>">
	<!-- bootstrap 4 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- google fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Libre+Franklin">
	<?php wp_head();?>
</head>

<body>

	<!-- header section -->
	<div class="navbar-expand-md navbar-light">

		<!-- main header -->
		<header class="pbs-header">
			<div class="container-fluid">
				<div class="pbs-layout">

					<div class="row">

						<div class="col-auto">
							<a href="<?php echo get_bloginfo('wpurl'); ?>">
								<img src="<?php echo get_bloginfo('template_directory') . '/images/core/logo.png'; ?>" alt="Logo" class="pbs-logo">
							</a>
						</div>

						<div class="col d-none d-md-block">
							<div class="row">
								<div class="col">

								</div>
								<div class="col">

								</div>
							</div>
						</div>

					</div>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#pbsNav" aria-controls="pbsNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="pbs-menu-icon"><i class="fas fa-bars fa-3x"></i></span>
					</button>

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
