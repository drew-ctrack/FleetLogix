<% include Banner %>
<% include BreadCrumbs %>

<!-- main content area -->
<section class="main-content" id="main-content" role="main">
	<div class="row">
		<div class="large-9 medium-8 columns">
			<div class="content">
				$Content
    
					<!-- Accordion section -->
					<ul class="accordion" data-accordion data-allow-all-closed="true">
    					
    					<% loop FAQ %>
							<!-- Accordion -->
							<li class="accordion-item" data-accordion-item>
								<a href="#" class="accordion-title">$Question</a>
								<div class="accordion-content" data-tab-content>
									<p>$Answer</p>
								</div>
							</li>
							<!-- END Accordion -->
						<% end_loop %>
    
					</ul><!-- END Accordion Section -->
    
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