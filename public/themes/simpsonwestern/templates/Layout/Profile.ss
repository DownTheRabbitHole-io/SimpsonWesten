<div class="content">
	<div class="container">
		<div class="row">
			<div class="main col-sm-9">
			<article class="profile-article">
        <% include BreadCrumbs %>
        <!-- $ProfileImage -->
				<img class="portrait-large" alt="$Title.XML" src="$ThemeDir/images/portrait-large.jpg" />
						
        <h1>$Name</h1>
        <p>$Position</p>
        <div class="bio-text">$Bio</div>
      </article>
			</div>
			<div class="sidebar profile col-sm-3">			
				<% include RecentArticles %>
        <article>
        <p>Phone: $Phone</p>
        </article>
			</div>
		</div>
	</div>
</div>
<!-- END CONTENT -->
