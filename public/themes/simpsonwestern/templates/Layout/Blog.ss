<div class="content sky">
	<div class="container-fluid main-content">
		<div class="row">
			<div class="col-xs-12 col-md-7">
			
				<% include BreadCrumbs %>

				<h1 class="page-title blog-title">$Title</h1>
				
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="row">
				<form id="blogform" method="Post" action="/our-people/filter" enctype="application/x-www-form-urlencoded">
					<div class="category-filter col-md-7">
						<select name="category" id="category">
							<option value="category">Category</option>
						<% loop $getCategories %>
							<option value="$Title.LowerCase">$Title</option>
						<% end_loop %>
						</select>
					</div>
					<div class="col-md-5">
						<input name="filterBtn" id="filterBtn" class="filter-btn" type="submit" value="filter"/>
					</div>
					</form>
					</div>
			</div>
		</div>

		<div class="row featured-row">		 
			<div>
			<% loop $getFeatured %>
				<div class="col-sm-9">
					<div class="author hidden-xs">
						<h6>
						<span class="name">
						<% if $Credits %>
							<% loop $Credits %><% if not $First && not $Last %>, <% end_if %><% if not $First && $Last %> <%t Blog.AND "and" %> <% end_if %>$Name.XML<% end_loop %>
						<% end_if %>
						</span>
						|
						<span class="date">$PublishDate.Format('d M Y')</span>
						</h6>
					</div>
					<h2 class="helpfulreading-title lead-blog">
						<a href="$Link" title="<%t Blog.ReadMoreAbout "Read more about '{title}'..." title=$Title %>">
							<% if $MenuTitle %>$MenuTitle
							<% else %>$Title<% end_if %>
						</a>
					</h2>	
					<p class="featured-text">$Excerpt ></p>
				</div>
			<% end_loop %>
				<div class="col-sm-3 hidden-xs">				
					<% include PopularPosts %>
					<!-- Begin MailChimp Signup Form -->
					<div id="mc_embed_signup">
					<form action="//simpsonwestern.us15.list-manage.com/subscribe/post?u=bfd4588eb196365b471896f16&amp;id=bcc7586348" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate subscribe-form" target="_blank" novalidate>
							<div id="mc_embed_signup_scroll">
						
					<div class="mc-field-group">
						<input type="email" value="" name="EMAIL" placeholder="Email" class="required email" id="mce-EMAIL">
					</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_bfd4588eb196365b471896f16_bcc7586348" tabindex="-1" value=""></div>
							<div class="clear"><input type="submit" value="Subscribe now" name="subscribe" id="mc-embedded-subscribe" class="subscribe-btn"></div>
							</div>
					</form>
					</div>

					<!--End mc_embed_signup-->
					
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
				<div class="row">
					<% if $PaginatedList.Exists %>
						<% loop $PaginatedList %>
							<% include PostSummary %>
						<% end_loop %>
					<% else %>
						<p><%t Blog.NoPosts 'There are no posts' %></p>
					<% end_if %>
				</div>
				</article>
			</div>			
			<div class="sidebar col-sm-3">
				<% include BlogSideBar %>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 visible-xs">				
				<% include PopularPosts %>

				<form class="subscribe-form">
					<input class="email" type="text" name="email" value="Email">
					<input class="subscribe-btn" type="submit" value="Subscribe now">
				</form>
				
			</div>
		</div>
	</div>
</div>
<!-- END CONTENT -->
