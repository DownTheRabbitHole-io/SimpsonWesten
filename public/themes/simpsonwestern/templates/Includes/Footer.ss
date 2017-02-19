<footer id="footer">
    <div class="container-fluid footer-content">
        <div class="row">
            <div class="col-sm-3 col-xm-12 hidden-xs phone-number">
                <img src="$ThemeDir/images/logo.png" alt="SIMPSONWESTERN" />
                <h2>09 486 3058</h2>
            </div>
            <div class="col-sm-4 col-xm-12">
                <ul class="nav flinks">
                    <% loop $Menu(1) %>
                        <span class="col-sm-6 col-xm-12">
                            <li class="$LinkingMode"><a href="$Link" title="$Title.XML">$MenuTitle.XML</a></li>
                        </span>
                    <% end_loop %>
                    <span class="col-sm-6 col-xm-12">
                        <li class="link"><a href="/find-us" title="find us">Find Us</a></li>
                    </span>
                </ul>
            </div>
            <div class="col-sm-2 hidden-xs">
            </div>
            <div class="col-sm-3 col-xm-12">
                <p class="address"><Strong>Takapuna</strong> Level3, Takapuna Finance Centre, 159 Hurstmere Road, Takapuna </br>
                <Strong>Silverdale</strong> Cnr Millwater Parkway & Polarity Rise, Silverdale</p>
                <div class="social-networks">
                    <%--style testing code start--%>
                    <a href="#"><img class="fa-nzlaw" src="$ThemeDir/images/NZLaw_icon.png"></a>
                    <a href="#"><img class="fa-linkedin" src="$ThemeDir/images/linkedin_icon.png"></a>
                    <a href="#"><img class="fa-twitter" src="$ThemeDir/images/twitter_icon.png"></a>
                    <%--style testing code end--%>

                    <%--<% with $SiteConfig %>--%>
                    <%--<% if $FacebookLink %>--%>
                    <%--<a href="$FacebookLink"><img class="fa fa-facebook" src=""></a>--%>
                    <%--<% end_if %>--%>
                    <%--<% if $TwitterLink %>--%>
                    <%--<a href="$TwitterLink"><img class="fa fa-twitter" src=""></img></a>--%>
                    <%--<% end_if %>--%>
                    <%--<% end_with %>--%>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="copyright">
                <span>All pages copyright Simpson Western 2017</span>
            </div>

        </div>
    </div>
</footer>