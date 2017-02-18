<nav class="navbar navbar-fixed-top">

    <div class="row header">
        <div class="header-content">
            <div class="title">
                <a class="home-link" href="/home/">SIMPSONWESTERN</a>
                
            </div>

            <!-- BEGIN MAIN MENU -->
            <button class="nav-button"><i class="fa fa-bars"></i></button>

            <div class="phone-icon">
                <a href="tel:09-486-3058"><img src="$ThemeDir/images/phone_icon.png" /></a>
            </div>
        </div>
    </div>

<!-- nav menu -->

    <div class="nav-menu closed">
        <button class="close-button"><i class="fa fa-times"></i></button>
        <nav class="inner-nav">
            <ul>
                <% loop $Menu(1) %>
                    <% if Children %>
                    <li class="link dropdown horizontal-drop"><a href="$Link" title="$Title.XML" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">$MenuTitle.XML</a><a class="plus-link" href="#"> + </a>
                    <ul class="dropdown-menu clearfix horizontal-drop-menu">
                        <!-- Sub Menu -->
                        <% control Children %>
                        <li><a class="sub-link" href="$Link" title="$Title.XML" alt="$Title.XML">$MenuTitle</a></li>
                        <% end_control %>
                    </ul>
                    </li>
			        <% else %>
                    <li class="link"><a href="$Link" title="$Title.XML">$MenuTitle.XML</a></li>
                    <% end_if %>
                <% end_loop %>
            </ul>
        </nav>
    </div>

</nav>
<!-- nav menu ends -->