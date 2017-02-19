<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="main col-xs-12 col-sm-9">
			<article class="profile-article">
        <% include BreadCrumbs %>
        <!-- $ProfileImage -->				
				<img class="portrait-large" alt="$Title.XML" src="$ProfileImage.URL" />						
        <h1>$Name</h1>
        <p>$Position</p>
        <div class="bio-text">$Bio</div>
      </article>
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
