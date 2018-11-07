<?php
/**
 * include core functions
 */
include 'inc/functions/core/page-title.php';
include 'inc/functions/core/jquery.php';
include 'inc/functions/core/post-options.php';
include 'inc/functions/core/comments.php';

/**
 * include custom post types
 */
include 'inc/functions/cpt/promotions.php';
include 'inc/functions/cpt/branches.php';
include 'inc/functions/cpt/products.php';
include 'inc/functions/cpt/vacancies.php';

/**
 * include Advanced Custom Fields data (ACF)
 */
include 'inc/functions/cpt/acf/promotions-acf.php';
include 'inc/functions/cpt/acf/branches-acf.php';
include 'inc/functions/cpt/acf/vacancies-acf.php';
