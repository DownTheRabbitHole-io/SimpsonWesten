<div class="content sky">
	<div class="container">
		<div class="row" style="padding-top:80px;">
			<div class="col-sm-9">
				<div class="breadcrumb">
				<% include BreadCrumbs %>
				</div>
			</div>
			<div class="col-sm-3">
				<form>
					<select name="category" id="category">
						<option>Category 1</option>
					</select>
					<input type="submit" value="filter"/>
				</form>
			</div>
		</div>
		<div class="row">
			<div>
			<% loop $getFeatured %>
				<div class="col-sm-9">
					<div>$</div>
					<h2>
						<a href="$Link" title="<%t Blog.ReadMoreAbout "Read more about '{title}'..." title=$Title %>">
							<% if $MenuTitle %>$MenuTitle
							<% else %>$Title<% end_if %>
						</a>
					</h2>
				</div>
			<% end_loop %>
				<div class="col-sm-3">
				</div>
			</div>
		</div>
	</div>
</div>


<div class="content helpful-reading sky">
	<div class="container">
		<div class="row">
			<div class="main col-sm-9">						
				<article>
					<h1>
						<% if $ArchiveYear %>
							<%t Blog.Archive 'Archive' %>:
							<% if $ArchiveDay %>
								$ArchiveDate.Nice
							<% else_if $ArchiveMonth %>
								$ArchiveDate.format('F, Y')
							<% else %>
								$ArchiveDate.format('Y')
							<% end_if %>
						<% else_if $CurrentTag %>
							<%t Blog.Tag 'Tag' %>: $CurrentTag.Title
						<% else_if $CurrentCategory %>
							<%t Blog.Category 'Category' %>: $CurrentCategory.Title
						<% else %>
							$Title
						<% end_if %>
					</h1>

					$Content

					<% if $PaginatedList.Exists %>
						<% loop $PaginatedList %>
							<% include PostSummary %>
						<% end_loop %>
					<% else %>
						<p><%t Blog.NoPosts 'There are no posts' %></p>
					<% end_if %>
				</article>
			</div>
			
			<div class="sidebar col-sm-3">
				<% include BlogSideBar %>
			</div>
		</div>
	</div>
</div>
<!-- END CONTENT -->
