<script>
var markers = [];
</script>
<% loop $getOffices %>	
<% if $Lat %>
<script>

var contentString = "<h4>$Name</h4><br/><p>$Address.RAW</p>";
var lat = $Lat;
var mapPosition = {
  lat: lat,
  lng: $Lng
  };

var line = [mapPosition,contentString];
markers['$ID'] = line;



</script>				
<% end_if %>
<% end_loop %>
<script>
var loadMarkers = function(){

  var arrayLength = markers.length;
  for (var key in markers) {
    markers[key][2] = new google.maps.Marker({
        position: markers[key][0],
        map: officeMap,
        });

    markers[key][2].info  = new google.maps.InfoWindow({
      content: markers[key][1]
    });

    markers[key][2].addListener("click", function() {
      closeAllInfoWindows();
      this.info.open(officeMap, this); 
    });
  }
}

function closeAllInfoWindows() {
  for (var key in markers) {
     markers[key][2].info.close();
  }
}

</script>		