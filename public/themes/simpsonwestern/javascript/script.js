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

        var searchBarButton = $("span.search-dropdown-icon");
        var searchBar = $('div.search-bar');
        var menuButton = $("span.nav-open-button");
        var menu = $('.header .primary');
        /* toggle navigation and search in mobile view */
        searchBarButton.click(function() {
            menu.slideUp();
            searchBar.slideToggle(200);
        });

        menuButton.click(function() {
            searchBar.slideUp();
            menu.slideToggle(200);

            if ($(this).find('.js-fa-bars').length > 0) {
                $(this).hide();
            } else if ($(this).find('.js-fa-times').length > 0) {
                $('span.nav-button').show();
            }
        });
	});
}(jQuery));
