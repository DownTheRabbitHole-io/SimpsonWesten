jQuery.noConflict();

(function($) {
	$(document).ready(function() {
		$(".office-box").on( "click", function() {
			closeAllInfoWindows();
			
			marker = markers[$(this).attr('id')][2];

			var latLng = marker.getPosition(); // returns LatLng object
			officeMap.setCenter(latLng); // setCenter takes a LatLng object
			officeMap.setZoom(16);
			marker.info.open(officeMap, marker); 
		});

		$("#Form_FilterForm_Team").on("change", function(){
			$('#Form_FilterForm').submit();
		});

		$("#Form_FilterForm_Office").on("change", function(){
			$('#Form_FilterForm').submit();
		});

		$("#Form_FilterForm_Expertise").on("change", function(){
			$('#Form_FilterForm').submit();
		});

	
});
		

	});
}(jQuery));
