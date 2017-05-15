<% include Banner %>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="sidebar col-sm-3 hidden-xs">
				<% if $Menu(2) %>
				<h2 class="section-title-left"><a class="$LinkingMode" href="$Parent.Link">$Parent.Title</a></h2>
				<ul class="categories subnav">
					<% loop $Menu(2) %>
						<li><a class="$LinkingMode" href="$Link">$MenuTitle</a></li>
					<% end_loop %>
				</ul>
				<% end_if %>
			</div>
			<div class="main col-sm-6 content-style">
				$Content
				$Form
			</div>
				<div class="main col-sm-3">
				<% include ShortProfiles %>				
				<div class="support-message-container">
					<p><strong>We’re here to help</strong><br/>
We’ve had some great success stories
helping our clients.
See how we can do the same for you.</p>
				
					<p><a class="contact-link" href="/contact" title="Contact Us">Contact us now</a></p>
				</div><!-- support-message-container -->
			</div>
		</div>
	</div>
</div>
<!-- END CONTENT -->
