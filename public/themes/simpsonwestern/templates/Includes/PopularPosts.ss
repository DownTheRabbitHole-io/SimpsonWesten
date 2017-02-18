<div class="most-popular">
  <div class="title">
    <h5>Most Popular</h5>
  </div>
  <div class="popular-posts">
    <ul class="nav">
    <% if $PaginatedList.Exists %>
     <% loop $getPopular %>   
			<li class="article">
        <a href="$Link" title="<%t Blog.ReadMoreAbout "Read more about '{title}'..." title=$Title %>">
				<h6 class="article-title">$Title</h6>
				<div class="short-description">
					<% if $Summary %>
            $Summary
          <% else %>
            <p>$Excerpt</p>
          <% end_if %>
				</div>
        </a>
			</li>      
      <% end_loop %>
      <% end_if %>
   </ul>
  </div>
</div>