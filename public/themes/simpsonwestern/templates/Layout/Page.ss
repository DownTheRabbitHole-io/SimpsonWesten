<% include Banner %>
<div class="content">
	<div class="container">
		<div class="row">
			<div class="sidebar col-sm-3">
				<% if $Menu(2) %>
				<h2 class="section-title-left">Business Law</h2>
				<ul class="categories subnav">
					<% loop $Menu(2) %>
						<li><a class="$LinkingMode" href="$Link">$MenuTitle</a></li>
						<li><a class="$LinkingMode" href="$Link">$MenuTitle</a></li>
						<li><a class="$LinkingMode" href="$Link">$MenuTitle</a></li>
						<li><a class="$LinkingMode" href="$Link">$MenuTitle</a></li>
						<li><a class="$LinkingMode" href="$Link">$MenuTitle</a></li>
						<li><a class="$LinkingMode" href="$Link">$MenuTitle</a></li>
						<li><a class="$LinkingMode" href="$Link">$MenuTitle</a></li>
						<li><a class="$LinkingMode" href="$Link">$MenuTitle</a></li>
						<li><a class="$LinkingMode" href="$Link">$MenuTitle</a></li>
						<li><a class="$LinkingMode" href="$Link">$MenuTitle</a></li>
						<li><a class="$LinkingMode" href="$Link">$MenuTitle</a></li>
						<li><a class="$LinkingMode" href="$Link">$MenuTitle</a></li>
					<% end_loop %>
				</ul>
				<% end_if %>
			</div>
			<div class="main col-sm-6">
				$Content
				$Form
			</div>
			<div class="main col-sm-3">
				<div class="our-people-component">
					<h2 class="our-people-title">Our People</h2>

					<div class="our-people-tile-container">
						<img class="portrait-thumb" src="$ThemeDir/images/portrait-thumb.jpg" />
						<div class="people-info">
							<h3 class="name-text">James Kirk</h3>
							<p>Duis arcu odio, vulputate eu velit at, mattis ullamcorper ex. Quisque nec neque vel arcu commodo condimentum.</p>
						</div>
					</div>

					<div class="our-people-tile-container">
						<img class="portrait-thumb" src="$ThemeDir/images/portrait-thumb.jpg" />
						<div class="people-info">
							<h3 class="name-text">Jean Luc Picard</h3>
							<p>Duis arcu odio, vulputate eu velit at, mattis ullamcorper ex. Quisque nec neque vel arcu commodo condimentum.</p>
					</div>
					</div>

					<div class="our-people-tile-container">
						<img class="portrait-thumb" src="$ThemeDir/images/portrait-thumb.jpg" />
						<div class="people-info">
							<h3 class="name-text">Benjamin Sisko</h3>
							<p>Duis arcu odio, vulputate eu velit at, mattis ullamcorper ex. Quisque nec neque vel arcu commodo condimentum.</p>
					</div>
					</div>

				</div><!-- component -->
				<div class="support-message-container">
					<p>Sed ut risus nec nisi pellentesque suscipit. Phasellus porta molestie sem vitae suscipit. Donec dapibus diam at odio volutpat pharetra et id ante. Aliquam erat volutpat.</p>
				
					<p><a class="contact-link" href="#" title="Contact Us">Contact us now</a></p>
				</div><!-- support-message-container -->
			</div>
		</div>
	</div>
</div>
<!-- END CONTENT -->

<!-- END CONTENT -->
