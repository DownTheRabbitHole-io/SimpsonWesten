<% include Banner %>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			
			<div class="sidebar col-sm-3 reflow">			  
				<article>
				<h4 class="sidebar-filters-title">Filters</h4>
				$FilterForm 
				</article>
				<% include RecentArticles %>
			</div>

			<div class="main col-sm-9 reflow">
				$Content
			<article>
			<div class="row">
				<ul class="profile-list-holder">
				<% if $profileList %>
				<% loop $profileList %>				
				<div class="profileThumb people-tile-medium col-sm-4">
					<li class="$LinkingMode profile-list">
						
						<!-- $ProfileImage -->
						<a href="$Link" class="$LinkingMode" title="Go to the $Title.XML page">
							<img class="portrait-medium" alt="$Title.XML" src="$ProfileImage.URL" />
						</a>
							<h4 class="people-tile-medium-name"><a href="$Link" class="$LinkingMode" title="Go to the $Title.XML page">$Name</a></h4>
							<p class="people-tile--medium-position"><a href="$Link" class="$LinkingMode" title="Go to the $Title.XML page">$Position</a></p>
							
					</li>
				</div>	
				<% end_loop %>
				<% end_if %>
				<div class="clearfix sneak"></div>
				</ul>
				</div>
			</article>
			
			</div>

		</div>
	</div>
</div>
<!-- END CONTENT -->
