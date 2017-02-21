<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="main col-xs-12 col-sm-9">
        
        <!-- $ProfileImage -->
				<div class="image-holder portrait-large" style="background: url($ProfileImage.URL) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">				
						<% include BreadCrumbs %>					
        </div>
				<h1>$Name <span class="t2-plus" style="margin-left:30px;">Position</span></h1>
        <article class="details-mobile visible-xs">
        <p><strong>Phone:</strong> $Phone</p>
				<p><strong>Mobile:</strong>  $Mobile</p>
				<p><strong>Email:</strong><a href="mailto:$Email" title="Click to Email">$Email</a></p>
				<p><strong>PA:</strong>  $PA</p>
				<p><strong>Linkedin:</strong>  <a href="$Linkedin" target="_blank">$Linkedin</a></p>
        </article>
        <div class="bio-text">$Bio</div>
			</div>
			<div class="sidebar profile col-xs-12 col-sm-3">			
				<% include RecentArticles %>
        <article class="details  hidden-xs">
        <p><strong>Phone:</strong> $Phone</p>
				<p><strong>Mobile:</strong>  $Mobile</p>
				<p><strong>Email:</strong><a href="mailto:$Email" title="Click to Email">$Email</a></p>
				<p><strong>PA:</strong>  $PA</p>
				<p><strong>Linkedin:</strong>  <a href="$Linkedin" target="_blank">$Linkedin</a></p>
        </article>
			</div>
		</div>
	</div>
</div>
<!-- END CONTENT -->
