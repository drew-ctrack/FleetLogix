<% include Banner %>
<% include BreadCrumbs %>

<!-- Main content -->
<section class="main-content animate-box" id="main-content" role="main">
	<div class="row small">
		<div class="large-12 columns content text-center">
			$Content
		</div>
	</div>
</section>
<!-- END main content -->
    
<!-- Link Grid -->
<section class="grid-links sub-home">
	<div class="row small">
		<% loop Children %>
			<div class="large-4 medium-4 small-12 columns animate-box fadeIn">
				<a href="$Link" class="grid-image">
					<span class="background-image" style="background-image: url($ThemeDir/img/tracking-bg.jpg);"></span>
      				<span class="overlay"></span>
              		<span class="down-relative">
                		<span class="down"></span>
              		</span>
      				<h4>$MenuTitle</h4>
              		<button class="button">Learn More</button>
      			</a>
			</div>
		<% end_loop %>
	</div>
</section>
<!-- END link grid -->