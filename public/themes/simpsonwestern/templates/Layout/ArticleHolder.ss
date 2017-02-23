<% include Banner %>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="sidebar col-sm-3  hidden-xs">
				<% if $Menu(2) %>
				<h2 class="section-title-left">$Title</h2>
				<ul class="categories subnav">
					<% loop $Menu(2) %>
						<li><a class="$LinkingMode" href="$Link">$MenuTitle</a></li>
					<% end_loop %>
				</ul>
				<% end_if %>
			</div>
			<div class="main col-sm-6">
				$Content
				$Form
			</div>
			<div class="main col-sm-3">
				<h2 class="section-title-right">We publish a free quarterly newsletter for our business clients.</h2>
				<ul class="business-links">
					<li><a href="#">Click here to read the latest issue</a></li>
					<li><a href="#">Subscribe to our newsletter</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- END CONTENT -->
