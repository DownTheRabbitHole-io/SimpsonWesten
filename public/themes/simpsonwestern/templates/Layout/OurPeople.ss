<% include Banner %>
<div class="content our-people">
	<div class="container-fluid">
		<div class="row ourpeople-top">
			
			<div class="sidebar col-sm-3 filter-reflow">			  
				<article class="filter-form-panel">
				<h4 class="sidebar-filters-title">Filters</h4>
				$FilterForm 
				</article>
			</div>

			<div class="main col-sm-9 reflow">
				<h2 class="t2">Meet your team</h2>
				$Content

			
			</div>

		</div>

		<div class="row">
			<div class="main col-sm-9">
				<article>
					<div class="row">
						<ul class="profile-list-holder">
						<% if $profileList.Exists %>
						<% loop $profileList %>				
						<div class="profileThumb people-tile-medium col-sm-4">
							<li class="$LinkingMode profile-list">
								
								<!-- $ProfileImage -->
								<a href="$Link" class="$LinkingMode hidden-xs" title="Go to the $Title.XML page">
									<img class="portrait-medium" alt="$Title.XML" src="$ProfileImage.URL" />
								</a>
									<h4 class="people-tile-medium-name"><a href="$Link" class="$LinkingMode" title="Go to the $Title.XML page">$Name</a></h4>
									<p class="people-tile--medium-position"><a href="$Link" class="$LinkingMode" title="Go to the $Title.XML page">$Jobtitle</a></p>
									
							</li>
						</div>	
						<% end_loop %>					
						<% else %>
							<p>No Matching Results</p>
						<% end_if %>
						<div class="clearfix sneak"></div>
						</ul>
						</div>
					</article>
			</div>
			<div class="sidebar col-sm-3">			 
				<% include RecentArticles %>
			</div>
		</div>

	</div>
</div>
<!-- END CONTENT -->
