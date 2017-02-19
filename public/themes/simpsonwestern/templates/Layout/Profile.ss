<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="main col-xs-12 col-sm-9">
        
        <!-- $ProfileImage -->
				<div class="image-holder portrait-large" style="background: url($ProfileImage.URL) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">				
						<% include BreadCrumbs %>					
        </div>
				<h1>$Name</h1>
        <p>$Position</p>
        <div class="bio-text">$Bio</div>
			</div>
			<div class="sidebar profile col-xs-12 col-sm-3">			
				<% include RecentArticles %>
        <article>
        <p>Phone: $Phone</p>
				<p>Mobile: $Mobile</p>
				<p>Email: $Email</p>
				<p>PA: $PA</p>
				<p>Linkedin: $Linkedin</p>
        </article>
			</div>
		</div>
	</div>
</div>
<!-- END CONTENT -->
