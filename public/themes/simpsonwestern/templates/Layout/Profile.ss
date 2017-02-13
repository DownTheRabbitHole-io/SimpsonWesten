<div class="content">
	<div class="container">
		<div class="row">
			<div class="main col-sm-8">
			<article>
        <% include BreadCrumbs %>
        $ProfileImage
        <h1>$Name</h1>
        <p>$Position</p>
        <div class="content">$Bio</div>
      </article>
			</div>
			<div class="sidebar gray col-sm-4">			
				<% include RecentArticles %>
        <article>
        <p>Phone: $Phone</p>
        </article>
			</div>
		</div>
	</div>
</div>
<!-- END CONTENT -->
