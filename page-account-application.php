<?php
/**
 * Use the page slug "branches"
 */
 ?>

<?php get_header(); ?>

  <div class="pbs-account-application-page">

    <div class="container-fluid">
			<h3><?php the_title(); ?></h3>
			<hr>
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					the_content();
				endwhile;
			endif;
			?>

      <div class="pbs-content">
        <h5>Open a new account with Parker Building Supplies</h5>
        <p>If you are interested in applying for an account with us, then please download an application form and post it to address below or you can email the completed form to <a href="mailto:creditcontrol@parkerbs.com">creditcontrol@parkerbs.com</a></p>

        <label><strong>Address:</strong></label>
        <ul class="list-unstyled">
          <li>Credit Control</li>
          <li>Parker Building Supplies Ltd</li>
          <li>Unit J1-J4 Franklin House</li>
          <li>Chaucer Business Park</li>
          <li>Dittons Road</li>
          <li>Polegate</li>
          <li>East Sussex</li>
          <li>BN26 6JF</li>
        </ul>

        <hr>

        <div class="row">
          <div class="col">
            <h5>Credit Account Application Form</h5>
            <a href="<?php echo get_bloginfo( 'template_directory' ) . '/files/account-application/trade-account-application.pdf'; ?>" class="pbs-download"><img src="<?php echo get_bloginfo( 'template_directory' ) . '/images/core/pdf-download.png'; ?>" alt="Download (Credit Account)"></a>
          </div>
          <div class="col">
            <h5>Cash Account Application Form</h5>
            <a href="<?php echo get_bloginfo( 'template_directory' ) . '/files/account-application/cash-account-application.pdf'; ?>" class="pbs-download"><img src="<?php echo get_bloginfo( 'template_directory' ) . '/images/core/pdf-download.png'; ?>" alt="Download (Cash Account)"></a>
          </div>
        </div>

      </div>

    </div>

  </div>

<?php get_footer(); ?>
