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

		$("#Form_FilterForm_Search").on("blur", function(){
			$('#Form_FilterForm').submit();
		});

		$('#down').on("click", function(){
			scrollToAnchor('contentAnchor', 100);
		});


		var $others = $('.checkbox').not('#Form_Form_All_publications');
		$('#Form_Form_All_publications').change(function () {
				if (this.checked) {
					 console.log('uncheck', this);
						$others.prop('checked', false)
				}
		});
		$others.change(function () {
				if (this.checked) {
					console.log('uncheck all');
						$('#Form_Form_All_publications').prop('checked', false)
				}
		});

		function scrollToAnchor(aid, adjustment){
				var aTag = $("a[name='"+ aid +"']");
				$('html,body').animate({scrollTop: aTag.offset().top - adjustment},'slow');
		}

	});
}(jQuery));

