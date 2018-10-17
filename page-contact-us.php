<?php
/**
 * Use the page slug "contact-us"
 */
 ?>

<?php get_header(); ?>

  <div class="pbs-contact-page">

    <div class="container-fluid">

      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="pbs-content">

            <h5>Branch Support Centre</h5>

            <label>Address:</label>
            <ul>
              <li>Unit J1-J4 Franklin House</li>
              <li>Chaucer Business Park</li>
              <li>Dittons Road</li>
              <li>Polegate</li>
              <li>East Sussex</li>
              <li>BN26 6JF</li>
            </ul>

            <label>Contact:</label>
            <ul>
              <li>0844 257 7000</li>
              <li>info@parkerbs.com</li>
            </ul>

            <label>Office Hours:</label>
            <ul>
              <li>Mon - Fri (7:00am to 5:30pm)</li>
            </ul>

          </div>
        </div>

        <div class="col-md-6 col-lg-8">
          map
        </div>
        
      </div>


      <?php
      if ( have_posts() ) :
        while ( have_posts() ) :

          the_post();
      		the_content();

    		endwhile;
      endif;
      ?>

  	</div>

  </div>

<?php get_footer(); ?>
