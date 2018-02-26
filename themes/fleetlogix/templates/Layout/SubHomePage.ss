<% include Banner %>
<% include BreadCrumbs %>

<!-- main content area -->
	<section class="main-content" id="main-content" role="main">
		<div class="row">
			<div class="large-9 medium-8 columns">
				<div class="content">
					$Content
					$Form
				</div>
    
			</div>
			
			<div class="large-3 medium-4 columns">
				<% include SideBar %>
			</div>
    
			<!-- Call to action banners sidebar -->
			<section class="ctas sidebar-ctas">
    
				<% include CallToActionSide %>
    
			</section><!-- END call to action banners -->
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
						<% if $LinkImage %>
							<span class="background-image" style="background-image: url($LinkImage.URL);"></span>
						<% else %>
							<span class="background-image" style="background-image: url($ThemeDir/assets/img/tracking-bg.jpg);"></span>
						<% end_if %>
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