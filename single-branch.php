<?php get_header(); ?>

  <div class="pbs-breadcrumb">
		<nav class="container-fluid">
			<ul>
				<li><a href="<?php echo site_url(); ?>">Home</a></li>
				<li>/</li>
				<li><a href="https://account.parkerbs.com/store-locator">Branches</a></li>
				<li>/</li>
				<li class="text-muted"><?php the_title(); ?></li>
			</ul>
		</nav>
	</div>

  <div class="pbs-branch-page">

    <div class="pbs-branch-header">
      <div class="pbs-branch-image" style="background-image: url('<?php the_field('branch_image') ?>')">

      </div>
    </div>

    <div class="pbs-branch-section">
      <div class="container-fluid">

        <?php
        if ( have_posts() ) :
          while ( have_posts() ) : the_post(); ?>

            <h4 class="pbs-title"><?php the_title(); ?></h4>
            <div class="pbs-content">
              <?php the_content(); ?>
            </div>

          <?php endwhile;
        endif;
        ?>

        <div class="row">
          <div class="col-md">
            <div class="pbs-manager">
              <span class="pbs-manager-image" style="background-image: url('<?php the_field('manager_image') ?>')"></span>
              <p class="pbs-manager-quote">"<?php the_field("manager_quote"); ?>"</p>
              <p class="pbs-manager-quote-name">- <?php the_field("first_name"); ?></p>
            </div>
          </div>
          <div class="col-md">
            <div class="pbs-branch">

              <div class="pbs-full-name"><?php the_field("first_name"); echo " "; the_field("last_name"); ?></div>
              <div class="pbs-job-title"><?php the_field("job_title"); ?></div>
              <br>
              <div class="pbs-address">
                <strong>Branch Address:</strong>
                <br>
                <?php the_field("address"); ?>
              </div>
              <br>
              <div class="pbs-phone">
                <strong>Contact Info: </strong>
                <br>
                <span>T: <a href="tel:<?php the_field("phone"); ?>"><?php the_field("phone"); ?></a></span>
                <br>
                <span>E: <a href="mailto:<?php the_field("email"); ?>"><?php the_field("email"); ?></a></span>
              </div>
              <br>
              <div class="pbs-opening-hours">
                <strong>Opening Hours: </strong>
                <br>
                <?php the_field("opening_hours"); ?>
              </div>

            </div>
          </div>
          <div class="col-md">
            <div class="pbs-map">
              <div id="map"></div>
          		<script>
          		   function initMap() {
            		    var branch = {
                     lat: <?php the_field("latitude"); ?>,
                     lng: <?php the_field("longitude"); ?>
                   };
            		    var map = new google.maps.Map(document.getElementById('map'), {
            		     zoom: 14,
            	       center: branch,
          		     });
            	     var marker = new google.maps.Marker({
            		     position: branch,
            	       map: map
            	     });
          		   }
            	</script>
            	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVbThXjHYwhVVB4O8i9Ct-9smvVgDRMvA&callback=initMap"></script>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>

<?php get_footer(); ?>
