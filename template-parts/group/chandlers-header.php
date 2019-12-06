<!doctype html>
<html lang="en">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<title><?php chandlers_title(); ?></title>
		<!-- stylesheets -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/custom.css?date-' . date('hdmy'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/slick/css/slick.min.css'; ?>">
		<!-- google fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Libre+Franklin">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() . '/images/core/chandlers/favicon-16x16.png'; ?>">
		<?php wp_head(); ?>
	</head>

	<body class="pbs-chandlers-page">

        <header class="pbs-chandlers-header">
            <div class="container-fluid">
                <a href="https://chandlersbs.co.uk/"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/group/chandlers-logo.png" alt="Chandlers" height="80px" width="auto"></a>
            </div>
        </header>