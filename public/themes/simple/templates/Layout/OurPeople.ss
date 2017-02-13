<div class="header" style="background: url($HeaderImage.URL);">
  <h1>$Title</h1>  
</div>
<% include RecentArticles %>
<div class="content-container unit size3of4 lastUnit">
	<article>		
		<div class="content">$Content</div>
	</article>
  
  <article>
  $FilterForm 
  </article>

  <article>
    <ul>
    <% if $profileList %>
		<% loop $profileList %>
      <li class="$LinkingMode">
				<a href="$Link" class="$LinkingMode" title="Go to the $Title.XML page">
        <div class="profileThumb">
          <h4>$Name</h4>
          <p>$Position</p>
          $ProfileImage
        </div>
        </a>
      </li>
    <% end_loop %>
	  <% end_if %>
    </ul>
  </article>
</div>
