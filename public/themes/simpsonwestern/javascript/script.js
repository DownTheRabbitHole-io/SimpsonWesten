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

		$("#Form_FilterForm_Position").on("change", function(){
			$('#Form_FilterForm').submit();
		});

		$('#down').on("click", function(){
			scrollToAnchor('contentAnchor', 100);
		});

		function scrollToAnchor(aid, adjustment){
				var aTag = $("a[name='"+ aid +"']");
				$('html,body').animate({scrollTop: aTag.offset().top - adjustment},'slow');
		}

	});
}(jQuery));

