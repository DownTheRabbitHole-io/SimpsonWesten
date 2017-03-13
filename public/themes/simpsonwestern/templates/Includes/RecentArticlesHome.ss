<div class="recent-article">
	<h5>RECENT ARTICLES</h5>
	<div class="article-links">
		<ul class="nav">
			<% loop $getRecentArticles %> 
			<li class="article">
				<a href="$Link" class="recent-link">
				<h6 class="article-title">$Title</h6>
				<div class="short-description">
					$Summary.LimitWordCount(30)
				</div>
				</a>
			</li>
			<% end_loop %>
		</ul>

	</div>
	<div class="other-links">
		<a href="$ExtraLink" title="Read more articles">Read more articles</a> <br />
		<a href="$ExtraLink2" title="Subscribe to our newsletter">Subscribe to our newsletter</a>
	</div>
</div>
