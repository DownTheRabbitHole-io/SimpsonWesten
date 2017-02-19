// Menu Nav Button
jQuery.noConflict();

(function($) {
	$(document).ready(function() {

    $("button.nav-button").click(function(){
        $("div.nav-menu").addClass("open");
        $("div.nav-menu").removeClass("closed");
        $("button.nav-button").hide();
        $("div.phone-icon").hide();
    });

    $("button.close-button").click(function(){
        $("div.nav-menu").addClass("closed");
        $("div.nav-menu").removeClass("open");
        $("button.nav-button").show();
        $("div.phone-icon").show();
    });

})
})(jQuery);