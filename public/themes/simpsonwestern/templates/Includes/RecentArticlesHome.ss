<div class="recent-article">
	<h5>RECENT ARTICLES</h5>
	<div class="article-links">
		<ul class="nav">
			<% loop $getRecentArticles %> 
			<li class="article">
				<a href="$Link" class="recent-link">
				<h6 class="article-title">$Title</h6>
				<div class="short-description">
					$Excerpt
				</div>
				</a>
			</li>
			<% end_loop %>


			<%--style testing data start--%>
            <li class="article">
                <h6 class="article-title">date or title</h6>
                <div class="short-description">
                    this week the employment Relations Authority released four separate decisions regarding the wording of 90 day trial period provisions in employment agreements >
                </div>
            </li>
            <li class="article">
                <h6 class="article-title">date or title</h6>
                <div class="short-description">
                    this week the employment Relations Authority released four separate decisions regarding the wording of 90 day trial period provisions in employment agreements >
                </div>
            </li>
            <li class="article">
                <h6 class="article-title">date or title</h6>
                <div class="short-description">
                    this week the employment Relations Authority released four separate decisions regarding the wording of 90 day trial period provisions in employment agreements >
                </div>
            </li>
			<%--style testing data end--%>
		</ul>



	</div>
	<div class="other-links">
		<a href="/helpful-reading" title="Read more articles">Read more articles</a> <br />
		<a href="#" title="Subscribe to our newsletter">Subscribe to our newsletter</a>
	</div>
</div>
