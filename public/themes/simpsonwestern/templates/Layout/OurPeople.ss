<% include Banner %>
<div class="content">
	<div class="container">
		<div class="row">
			<div class="main col-sm-9">
				$Content
			<article>
				<ul class="profile-list-holder">
				<% if $profileList %>
				<% loop $profileList %>
					<li class="$LinkingMode profile-list">
						<div class="profileThumb people-tile-medium">
						<!-- $ProfileImage -->
						<a href="$Link" class="$LinkingMode" title="Go to the $Title.XML page">
							<img class="portrait-medium" alt="$Title.XML" src="$ThemeDir/images/portrait-medium.jpg" />
						</a>
							<h4 class="people-tile-medium-name"><a href="$Link" class="$LinkingMode" title="Go to the $Title.XML page">$Name</a></h4>
							<p class="people-tile--medium-position"><a href="$Link" class="$LinkingMode" title="Go to the $Title.XML page">$Position</a></p>
							
						</div>
						</a>
					</li>
					<li class="$LinkingMode profile-list">
						<div class="profileThumb people-tile-medium">
						<!-- $ProfileImage -->
						<a href="$Link" class="$LinkingMode" title="Go to the $Title.XML page">
							<img class="portrait-medium" alt="$Title.XML" src="$ThemeDir/images/portrait-medium.jpg" />
						</a>
							<h4 class="people-tile-medium-name"><a href="$Link" class="$LinkingMode" title="Go to the $Title.XML page">$Name</a></h4>
							<p class="people-tile--medium-position"><a href="$Link" class="$LinkingMode" title="Go to the $Title.XML page">$Position</a></p>
							
						</div>
						</a>
					</li>
				<% end_loop %>
				<% end_if %>
				<div class="clearfix sneak"></div>
				</ul>
			</article>
			
			</div>
			<div class="sidebar gray col-sm-3">			  
				<article>
				$FilterForm 
				</article>
				<% include RecentArticles %>
			</div>
		</div>
	</div>
</div>
<!-- END CONTENT -->
