<% include Banner %>
<div class="content">
	<div class="container">
		<div class="row">
			<div class="main col-sm-12">
				$Content
			</div>			
		</div>
		<div class="row">
			<div class="main col-sm-12">
				<div id="map"></div>
        <script>
          function initMap() {
            var uluru = {lat: -25.363, lng: 131.044};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 4,
              center: uluru
            });
            var marker = new google.maps.Marker({
              position: uluru,
              map: map
            });
          }
        </script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzymwTN6r2DtjyFeNb60ilb4hkC3G9_2I&callback=initMap">
        </script>
			</div>			
		</div>
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>




	</div>
</div>
<!-- END CONTENT -->
