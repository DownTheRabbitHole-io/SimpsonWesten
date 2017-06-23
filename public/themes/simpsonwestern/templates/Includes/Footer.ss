<footer id="footer">
    <div class="container-fluid footer-content">
        <div class="row">
            <div class="col-sm-3 col-xm-12 phone-number">
                <img src="$ThemeDir/images/logo.png" alt="SIMPSONWESTERN" />
                <p class="footer-number">09 486 3058</p>
            </div>
            <div class="col-sm-4 col-xm-12">
                <div class="row footer-links-container">
                <ul class="nav flinks">
                    <% loop $Menu(1) %>
                        <div class="col-sm-6">
                            <li class="$LinkingMode"><a href="$Link" title="$Title.XML">$MenuTitle.XML</a></li>
                        </div>
                    <% end_loop %>                    
                </ul>
                </div>
            </div>
            <div class="col-sm-2 hidden-xs">
            </div>
            <div class="col-sm-3 col-xm-12">
                <p class="address"><Strong>Takapuna</strong> Level 3, Takapuna Finance Centre, 159 Hurstmere Road, Takapuna </br>
                <Strong>Silverdale</strong> Cnr Millwater Parkway & Polarity Rise, Silverdale</p>
                <div class="social-networks">
                    <a href="http://www.nzlaw.co.nz/" target="_blank"><img class="fa-nzlaw" src="$ThemeDir/images/NZLaw_icon.png"></a>
                    <a href="https://www.linkedin.com/company-beta/2377436/" target="_blank"><img class="fa-linkedin" src="$ThemeDir/images/linkedin_icon.png"></a>
                    <a href="https://twitter.com/SimpsonWestern?lang=en" target="_blank"><img class="fa-twitter" src="$ThemeDir/images/twitter_icon.png"></a>
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