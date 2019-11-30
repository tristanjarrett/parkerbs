<?php include 'inc/mail/send-email-contact.php'; ?>
<?php
/**
 * Use the page slug "contact-us"
 */
 ?>

<?php get_header(); ?>

  <?php get_template_part( 'template-parts/header-content' ); ?>

  <div class="pbs-contact-page">

    <div class="container-fluid">

      <?php echo $response; ?>

      <?php
      if ( have_posts() ) :
        while ( have_posts() ) :

          the_post();
      		the_content();

    		endwhile;
      endif;
      ?>

      <div class="row pbs-flex-row">
        <div class="col-md-6 col-lg-4">
          <div class="pbs-details pbs-flex-item">

            <h5>Branch Support Centre</h5>

            <hr>

            <label><strong>Address:</strong></label>
            <ul class="list-unstyled">
              <li>Unit J1 Franklin House</li>
              <li>Chaucer Business Park</li>
              <li>Dittons Road</li>
              <li>Polegate</li>
              <li>East Sussex</li>
              <li>BN26 6QH</li>
            </ul>

            <label><strong>Contact:</strong></label>
            <ul class="list-unstyled">
              <li><a href="tel:08442577000">0844 257 7000</a></li>
              <li><a href="mailto:enquiries@parkerbs.com">enquiries@parkerbs.com</a></li>
            </ul>

            <label><strong>Office Hours:</strong></label>
            <ul class="list-unstyled">
              <li>Mon - Fri (7:00am to 5:30pm)</li>
            </ul>

          </div>
        </div>

        <div class="col-md-6 col-lg-8">
          <div class="pbs-map pbs-flex-item">

            <div id="map"></div>
        		<script>
        		   function initMap() {
        		     var office = {
        					 lat: 50.818247,
        					 lng: 0.270578
        				 };
        		     var map = new google.maps.Map(document.getElementById('map'), {
        		       zoom: 16,
        		       center: office
        		     });
        		     var marker = new google.maps.Marker({
        		       position: office,
        		       map: map
        		     });
        		   }
        		</script>
        		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVbThXjHYwhVVB4O8i9Ct-9smvVgDRMvA&callback=initMap"></script>
          </div>
        </div>

      </div>

      <div class="pbs-content">

        <h4>Contact Us</h4>
        <hr>

        <form action="<?php the_permalink(); ?>" method="post" enctype="multipart/form-data">

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="message_fname">First name <span class="pbs-red">*</span></label>
              <input type="text" class="form-control" name="message_fname" value="<?php echo esc_attr($_POST['message_fname']); ?>" placeholder="Joe" required>
            </div>
            <div class="form-group col-md-6">
              <label for="message_lname">Last name <span class="pbs-red">*</span></label>
              <input type="text" class="form-control" name="message_lname" value="<?php echo esc_attr($_POST['message_lname']); ?>" placeholder="Bloggs" required>
            </div>
          </div>

          <div class="form-group">
            <label for="message_email">Email address <span class="pbs-red">*</span></label>
            <input type="email" class="form-control" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>" placeholder="name@example.com" required>
          </div>

          <div class="form-group">
            <label for="message_number">Contact number <span class="pbs-red">*</span></label>
            <input type="text" class="form-control" name="message_number" value="<?php echo esc_attr($_POST['message_number']); ?>" placeholder="0844 257 7000" required>
          </div>

          <div class="form-group">
            <label for="message_branch">To help us direct your query, please select your preferred/nearest branch. <span class="pbs-red">*</span></label>
            <select class="form-control" name="message_branch" required>
              <option selected disabled>Please select</option>
              <option value="info@parkerbs.com">Branch Support Centre</option>
              <option disabled>-----</option>
              <?php
				       $args = array(
								 'post_type' => 'branch',
								 'posts_per_page' => -1,
								 'orderby'=> 'title',
								 'order' => 'ASC'
							 );
				       $branches = new WP_Query( $args );
				       while ( $branches->have_posts() ) : $branches->the_post(); ?>

				         <option value="<?php the_field('email'); ?>"><?php the_title(); ?></option>

              <?php
                 wp_reset_postdata();

				       endwhile;
				   		?>
            </select>
          </div>

          <div class="form-group">
            <label for="message_account">Do you have an account with us? <span class="pbs-red">*</span></label>
            <select class="form-control" name="message_account" required>
              <option selected disabled>Please select</option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
          </div>

          <div class="form-group">
            <label for="message_acc_no">Account number (Optional)</label>
            <input class="form-control" type="number" name="message_acc_no" value="<?php echo esc_attr($_POST['message_acc_no']); ?>" placeholder="0001234">
          </div>

          <div class="form-group">
            <label for="message_text">Message <span class="pbs-red">*</span></label>
            <textarea class="form-control" name="message_text" rows="8" required><?php echo esc_textarea($_POST['message_text']); ?></textarea>
          </div>

          <div class="form-group">
            <label for="message_human">Human verification <span class="pbs-red">*</span></label>
            <div class="form-row align-items-center">
              <div class="col col-md-auto">
                <input type="text" class="form-control" name="message_human" placeholder="What number" required>
              </div>
              <div class="col">
                <span>+ 3 = 5</span>
              </div>
            </div>
          </div>

          <p class="text-right">Fields marked with ( <span class="pbs-red">*</span> ) are required</p>

          <div class="text-right">
            <input type="hidden" name="submitted" value="1">
            <button type="submit" class="btn btn-primary">Submit Message</button>
          </div>

        </form>

      </div>

  	</div>

  </div>

  <?php get_template_part( 'template-parts/footer-content' ); ?>

<?php get_footer(); ?>
