
	<!-- BEGIN CONTENT WRAPPER -->
	<div class="homepage photo1">
			<img src="$HeaderImage.URL" />
			<div class="down-arrow"><a href="#" id="down"><img src="$ThemeDir/images/down-arrow-circle.png" /></a></div>
		</div>
	<div class="content homepage">
		
		<div class="container-fluid main-content">
			<div class="row">
				<!-- BEGIN MAIN CONTENT -->
				<div class="col-sm-9 col-xm-12 page-description">
					<p class="hero-text">
						<a name="contentAnchor"></a>
						$Content
					</p>
					<div class="page-links">
						<%--<div class="container">--%>
							<div class="row">
								<div class="col-sm-6  business">
									<h2><a href="/business-law/" title="Business">Business</a></h2>
								</div>

								<div class="col-sm-6  personal">
									<h2><a href="/personal-law/" title="Personal">Personal</a><h2>
								</div>

							</div>

						</div>


					<%--</div>--%>
				</div>
				<!-- END MAIN CONTENT -->
				<div class="col-sm-3 hidden-xs">
					<% include RecentArticlesHome %>
				</div>
				
			</div>
		</div>
		<div class="homepage photo2">
			<img src="$BottonImage.URL" />
		</div>
		<div class="visible-xs mobile-recent">
			<div class="row">
				<div class="col-sm-12">
					<% include RecentArticlesHome %>
				</div>
			</div>
		</div>
	</div>
	<!-- END CONTENT WRAPPER -->
		