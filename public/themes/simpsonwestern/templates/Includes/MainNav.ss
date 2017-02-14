<!--<header class="">
<div id="nav-section" class="container navbar-fixed-top">
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="row">
        <div class="container">
            <div class="col-sm-12 nav-header">
            <div class="nav-header">
                <div id="navbar" class="navbar-collapse collapse">
                    <a href="$AbsoluteBaseURL" class="nav-logo"><img src="$ThemeDir/images/logo.png" alt="One Ring Rentals" /></a>--%>
                    <div class="title">
                        SIMPSONWESTERN
                        $SiteConfig.Title
                        <% if $SiteConfig.Tagline %>
                            p>$SiteConfig.Tagline</p>
                        <% end_if %>
                    </div>

                    <!-- BEGIN MAIN MENU -->
                   <!-- <button id="nav-mobile-btn"><i class="fa fa-bars"></i></button>
                    <% include Navigation %>

                    <div class="phone-icon">
                        <img src="$ThemeDir/images/phone_icon.png" />
                    </div>
                    <!-- END MAIN MENU -->

               <!-- </div>
            </div>
        </div>
    </div>
</div>
</header>

<div class="row header">
    <div class="header-content">
        <div class="title">
            SIMPSONWESTERN
            $SiteConfig.Title
            <% if $SiteConfig.Tagline %>
            <p>$SiteConfig.Tagline</p>
            <% end_if %>
        </div>

        <!-- BEGIN MAIN MENU -->
        <button class="nav-button"><i class="fa fa-bars"></i></button>
        <% include Navigation %>

        <div class="phone-icon">
            <img src="$ThemeDir/images/phone_icon.png" />
        </div>
    </div>

</div>