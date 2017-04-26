<% include Banner %>
<div class="content contact">
	<div class="container-fluid">
		<!-- contact data row -->
			<div class="row">
        <div class="col-md-9">
					$Content          
				</div>
        <div class="col-md-3">
        <h3>Contact us on</h3>
				<p>
					<a class="contact-phone" href="tel:$ContactNumber">$ContactNumber</a><br/>
					<a class="contact-phone" href="mailto:$ContactEmail">$ContactEmail</a>
				</p>
        </div>				
			</div> <!-- ./ contact data row -->
			<div class="row">
				<div class="col-md-12">
					<hr/>
				</div>
			</div>
	</div>
</div>

<!-- END CONTENT -->
<div class="content">
	<div class="container-fluid">
		<div class="row">
      <% loop $getOffices %>	
      <div class="main col-sm-3 office-box" style="cursor:pointer;" id="$ID">
				<h3>$Title</h3>        
        $Content
			</div>
      <% end_loop %>
      <div class="main col-sm-3 office-box">
        $PostBox
			</div>				
		</div>
		<div class="row">
			<div class="main col-sm-12 expando">
				<div id="map"></div>
        <script>
          function initMap() {
            var uluru = {lat: -36.7905752, lng: 174.7695994};
            officeMap = new google.maps.Map(document.getElementById('map'), {
              zoom: 10,
              center: uluru
            });
           
            loadMarkers();
          }
        </script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzymwTN6r2DtjyFeNb60ilb4hkC3G9_2I&callback=initMap">
        </script>
        <% include Markers  %>
			</div>			
		</div>
    <style>
       #map {
        height: 600px;
        width: 100%;
       }
    </style>




	</div>
</div>
<!-- END CONTENT -->