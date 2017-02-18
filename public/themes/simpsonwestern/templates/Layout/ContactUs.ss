<% include Banner %>
<div class="content contact">
	<div class="container">
		<!-- contact data row -->
			<div class="row">
        <div class="col-md-3">
        <h3>Call us on<br/>
        $ContactNumber</h3>
        </div>				
				<div class="col-md-6">
					
					<!-- contact form -->
					<div class="csfrm-elm round-input">
						<h3 class="contact-headline">Please leave us a message</h3>
						 <% if $Message %>
						        $Message
						    <% else %>
						        $Form
						    <% end_if %>
						
					</div>
					<!-- ./ contact form -->          
				</div>
        <div class="col-md-3">
        $Content
        </div>				
			</div> <!-- ./ contact data row -->
	</div>
</div>
<!-- END CONTENT -->