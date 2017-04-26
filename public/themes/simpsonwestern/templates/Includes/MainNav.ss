<nav class="navbar">

    <div class="row header">
        <div class="header-content">
            <div class="title">
                <a class="home-link sw-logo" href="/home/">SIMPSONWESTERN</a>
            </div>

            <!-- BEGIN MAIN MENU -->
            <button class="nav-button"><i class="fa fa-bars"></i></button>
            <div class="phone-icon">
                <a href="tel:09-486-3058"><span class="glyphicon glyphicon-phone-alt" style="color:#54555A; font-size:26px;"></span></a>
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
                    <li class="link dropdown horizontal-drop">
                    <a href="$Link" title="$Title.XML">$MenuTitle.XML</a>
                    <a class="plus-link dropdown-toggle" data-toggle="dropdown" role="button"  aria-expanded="false" href="#"> + </a>
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