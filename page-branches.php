<?php
/**
 * Use the page slug "branches"
 */
 ?>

<?php get_header(); ?>

  <div class="pbs-branches-page">

    <div class="container-fluid">

      <?php
      if ( have_posts() ) :
        while ( have_posts() ) :

          the_post();
      		the_content();

    		endwhile;
      endif;
      ?>

      <!-- Start Map -->
      <div onload="initMap()">

        <div class="row">

          <div class="col-md">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text">Location:</label>
              </div>
              <input type="text" id="addressInput" size="15" class="form-control" placeholder="Enter postcode or town name" />
            </div>
          </div>

          <div class="col-md-auto">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text">Radius:</label>
              </div>
              <select id="radiusSelect" label="Radius" class="form-control">
                <option value="5">5 miles</option>
                <option value="15">15 miles</option>
                <option value="25" selected>25 miles</option>
                <option value="50">50 miles</option>
                <option value="100">100 miles</option>
                <option value="200">200 miles</option>
              </select>
            </div>
          </div>

          <div class="col-md-auto">
            <div class="input-group mb-3">
              <button type="button" id="searchButton" class="btn btn-primary btn-block"/>Search <i class="fa fa-search fa-fw"></i></button>
            </div>
          </div>

        </div>

        <div class="row mt-3">

          <div class="col-md-3 mb-3">
            <select id="locationSelect" class="form-control">
              <!-- options will load here -->
            </select>
          </div>

          <div class="col-md-9">
            <div id="map" style="width: 100%; height: 600px">
              <!-- map will load here -->
            </div>
          </div>

        </div>

        <script src="<?php echo get_template_directory_uri() . '/js/maps-config.js'; ?>"></script>

      </div>
      <!-- End Map -->

  	</div>

  </div>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDagz5CIW3v5ckslNnQ6W5tup9s_YuBvRw&callback=initMap"></script>

<?php get_footer(); ?>
