
<div class="col-xs-12 col-sm-12 col-md-4">
<div class="post-summary">
  <div class="author">
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
	<h2 class="helpfulreading-title">
		<a href="$Link" title="<%t Blog.ReadMoreAbout "Read more about '{title}'..." title=$Title %>">
			<% if $MenuTitle %>$MenuTitle
			<% else %>$Title<% end_if %>
		</a>
	</h2>
	<% if $Summary %>
		$Summary
	<% else %>
		<p>$Excerpt ></p>
	<% end_if %>
</div>
</div>

