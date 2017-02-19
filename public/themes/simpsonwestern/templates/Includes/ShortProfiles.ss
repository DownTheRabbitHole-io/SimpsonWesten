<div class="our-people-component">
  <h2 class="our-people-title">Our People</h2>
  <% loop $Profiles %>
    <div class="our-people-tile-container">
    <a class="$LinkingMode" href="$Link">
      <img class="portrait-thumb" src="$ProfileImage.URL" />
    </a>
    <div class="people-info clearfix">
      <h3 class="name-text"><a class="$LinkingMode" href="$Link">$Name</a></h3>
      <p>$ShortText</p>
    </div>
  </div>
  <% end_loop %>

</div><!-- component -->