<!doctype html>
<html lang="en">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<title><?php pbs_title(); ?></title>
		<!-- stylesheets -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/custom.css?date-' . date('hdmy'); ?>">
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
		<?php echo pbs_linkedin_meta(); ?>
		<?php wp_head(); ?>
	</head>

	<body>
