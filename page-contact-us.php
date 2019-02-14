<?php
/**
 * Use the page slug "contact-us"
 */
 ?>

<?php get_header(); ?>

  <div class="pbs-contact-page">

    <div class="container">

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

            <label>Address:</label>
            <ul class="list-unstyled">
              <li>Unit J1-J4 Franklin House</li>
              <li>Chaucer Business Park</li>
              <li>Dittons Road</li>
              <li>Polegate</li>
              <li>East Sussex</li>
              <li>BN26 6JF</li>
            </ul>

            <label>Contact:</label>
            <ul class="list-unstyled">
              <li><a href="tel:08442577000">0844 257 7000</a></li>
              <li><a href="mailto:info@parkerbs.com">info@parkerbs.com</a></li>
            </ul>

            <label>Office Hours:</label>
            <ul class="list-unstyled">
              <li>Mon - Fri (7:00am to 5:30pm)</li>
              <li>Sat (8am to 12:30pm)</li>
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

        <form>

          <div class="form-group">
            <label for="">First name <span class="pbs-red">*</span></label>
            <input type="text" class="form-control" id="" placeholder="Joe" required>
          </div>

          <div class="form-group">
            <label for="">Last name <span class="pbs-red">*</span></label>
            <input type="text" class="form-control" id="" placeholder="Bloggs" required>
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Email address <span class="pbs-red">*</span></label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Telephone / Mobile <span class="pbs-red">*</span></label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="0844 257 7000" required>
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Notes</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
          </div>

          <p class="text-right">Fields marked with ( <span class="pbs-red">*</span> ) are required</p>

          <div class="text-right">
            <button type="submit" class="btn btn-primary">Send</button>
          </div>

        </form>

      </div>

  	</div>

  </div>

<?php get_footer(); ?>
