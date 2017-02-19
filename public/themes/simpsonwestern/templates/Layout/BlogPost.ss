<% include Banner %>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="main col-sm-8">						
				<article>
					<% if $FeaturedImage %>
						<p class="post-image">$FeaturedImage.setWidth(795)</p>
					<% end_if %>

					<div class="content blog-post">$Content</div>

					<% include EntryMeta %>
				</article>
			</div>
			
			<div class="sidebar col-sm-4">
				<% include BlogSideBar %>
			</div>
		</div>
	</div>
</div>