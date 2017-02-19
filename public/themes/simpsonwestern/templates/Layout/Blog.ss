<div class="content sky">
	<div class="container-fluid main-content">
		<div class="row">
			<div class="col-xs-12 col-sm-7">
			
				<% include BreadCrumbs %>
				
			</div>
			<div class="col-xs-12 col-sm-5">

				<form>
					<input name="filterBtn" id="filterBtn" class="filter-btn" type="submit" value="filter"/>
				
					<div class="category-filter">
						<select name="category" id="category">
						<% loop $getCategories %>
							<option value="$Title.LowerCase">$Title</option>
						<% end_loop %>
						</select>
					</div>
					</form>
			</div>
		</div>
		
		<div class="row">		 
			<div>
			<% loop $getFeatured %>
				<div class="col-sm-9">
					<div class="author">
						<h6>
						<span class="name">
						<% if $Credits %>
							<% loop $Credits %><% if not $First && not $Last %>, <% end_if %><% if not $First && $Last %> <%t Blog.AND "and" %> <% end_if %><% if $URLSegment %><a href="$URL">$Name.XML</a><% else %>$Name.XML<% end_if %><% end_loop %>
						<% end_if %>
						</span>
						|
						<span class="date">$PublishDate.Format('d M Y')</span>
						</h6>
					</div>
					<h2 class="helpfulreading-title">
						<a href="$Link" title="<%t Blog.ReadMoreAbout "Read more about '{title}'..." title=$Title %>">
							<% if $MenuTitle %>$MenuTitle
							<% else %>$Title<% end_if %>
						</a>
					</h2>	
					<p>$Excerpt</p>
				</div>
			<% end_loop %>
				<div class="col-sm-3">				
					<% include PopularPosts %>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="content helpful-reading">
	<div class="container-fluid main-content">
		<div class="row">
			<div class="main col-sm-9">						
				<article>
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
