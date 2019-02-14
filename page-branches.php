<?php
/**
 * Use the page slug "branches"
 */
 ?>

<?php get_header(); ?>

  <div class="pbs-breadcrumb">
    <nav class="container-fluid">
      <ul>
        <li><a href="<?php echo site_url(); ?>">Home</a></li>
        <li>/</li>
        <li class="text-muted"><?php the_title(); ?></li>
      </ul>
    </nav>
  </div>

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

        <script>
          var map;
          var markers = [];
          var infoWindow;
          var locationSelect;

            function initMap() {
              var sussex = {lat: 50.941953,lng: 0.184667};
              map = new google.maps.Map(document.getElementById('map'), {
                center: sussex,
                zoom: 11,
                mapTypeId: 'roadmap',
                mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU}
              });
              infoWindow = new google.maps.InfoWindow();

              searchButton = document.getElementById("searchButton").onclick = searchLocations;

              locationSelect = document.getElementById("locationSelect");
              locationSelect.onchange = function() {
                var markerNum = locationSelect.options[locationSelect.selectedIndex].value;
                if (markerNum != "none"){
                  google.maps.event.trigger(markers[markerNum], 'click');
                }
              };
            }

           function searchLocations() {
             var address = document.getElementById("addressInput").value;
             var geocoder = new google.maps.Geocoder();
             geocoder.geocode({address: address}, function(results, status) {
               if (status == google.maps.GeocoderStatus.OK) {
                searchLocationsNear(results[0].geometry.location);
               } else {
                 alert(address + ' not found');
               }
             });
           }

           function clearLocations() {
             infoWindow.close();
             for (var i = 0; i < markers.length; i++) {
               markers[i].setMap(null);
             }
             markers.length = 0;

             locationSelect.innerHTML = "";
             var option = document.createElement("option");
             option.value = "none";
             option.innerHTML = "See all results:";
             locationSelect.appendChild(option);
           }

           function searchLocationsNear(center) {
             clearLocations();

             var radius = document.getElementById('radiusSelect').value;
             var searchUrl = 'storelocator.php?lat=' + center.lat() + '&lng=' + center.lng() + '&radius=' + radius;
             downloadUrl(searchUrl, function(data) {
               var xml = parseXml(data);
               var markerNodes = xml.documentElement.getElementsByTagName("marker");
               var bounds = new google.maps.LatLngBounds();
               for (var i = 0; i < markerNodes.length; i++) {
                 var id = markerNodes[i].getAttribute("id");
                 var name = markerNodes[i].getAttribute("name");
                 var address = markerNodes[i].getAttribute("address");
                 var distance = parseFloat(markerNodes[i].getAttribute("distance"));
                 var latlng = new google.maps.LatLng(
                      parseFloat(markerNodes[i].getAttribute("lat")),
                      parseFloat(markerNodes[i].getAttribute("lng")));

                 createOption(name, distance, i);
                 createMarker(latlng, name, address);
                 bounds.extend(latlng);
               }
               map.fitBounds(bounds);
               locationSelect.style.visibility = "visible";
               locationSelect.onchange = function() {
                 var markerNum = locationSelect.options[locationSelect.selectedIndex].value;
                 google.maps.event.trigger(markers[markerNum], 'click');
               };
             });
           }

           function createMarker(latlng, name, address) {
              var html = "<b>" + name + "</b> <br/>" + address;
              var marker = new google.maps.Marker({
                map: map,
                position: latlng
              });
              google.maps.event.addListener(marker, 'click', function() {
                infoWindow.setContent(html);
                infoWindow.open(map, marker);
              });
              markers.push(marker);
            }

           function createOption(name, distance, num) {
              var option = document.createElement("option");
              option.value = num;
              option.innerHTML = name;
              locationSelect.appendChild(option);
           }

           function downloadUrl(url, callback) {
              var request = window.ActiveXObject ?
                  new ActiveXObject('Microsoft.XMLHTTP') :
                  new XMLHttpRequest;

              request.onreadystatechange = function() {
                if (request.readyState == 4) {
                  request.onreadystatechange = doNothing;
                  callback(request.responseText, request.status);
                }
              };

              request.open('GET', url, true);
              request.send(null);
           }

           function parseXml(str) {
              if (window.ActiveXObject) {
                var doc = new ActiveXObject('Microsoft.XMLDOM');
                doc.loadXML(str);
                return doc;
              } else if (window.DOMParser) {
                return (new DOMParser).parseFromString(str, 'text/xml');
              }
           }

           function doNothing() {}
         </script>
         <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVbThXjHYwhVVB4O8i9Ct-9smvVgDRMvA&callback=initMap"></script>


      </div>
      <!-- End Map -->

  	</div>

  </div>

<?php get_footer(); ?>
