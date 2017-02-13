<% include Banner %>
<div class="content">
	<div class="container">
		<div class="row">
			<div class="main col-sm-8">
				$Content
			<article>
				<ul>
				<% if $profileList %>
				<% loop $profileList %>
					<li class="$LinkingMode">
						<a href="$Link" class="$LinkingMode" title="Go to the $Title.XML page">
						<div class="profileThumb">
							<h4>$Name</h4>
							<p>$Position</p>
							$ProfileImage
						</div>
						</a>
					</li>
				<% end_loop %>
				<% end_if %>
				</ul>
			</article>
			</div>
			<div class="sidebar gray col-sm-4">			  
				<article>
				$FilterForm 
				</article>
				<% include RecentArticles %>
			</div>
		</div>
	</div>
</div>
<!-- END CONTENT -->
