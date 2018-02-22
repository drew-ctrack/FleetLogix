<!-- Page Banner -->
<section class="page-banner product-page-banner">
	<div class="overlay"></div>
	<div class="row">
		<div class="large-12 columns animate-box fadeIn">
			<div class="hero-content">
				<h1>$MenuTitle</h1>
			</div>
		</div>
	</div>
</section><!-- END Page Banner -->

<% include BreadCrumbs %>

<% if $ProductImages %>
	<section class="project-gallery-container">
		<div class="row">
			<div class="large-12 columns">
				<div class="project-gallery owl-carousel">
	
					<% loop $ProductImages %>
						<div class="item">
							<a class="gallery" href="$URL"><img src="$URL" alt=""></a>
							-+-
						</div>
					<% end_loop %>			
		
				</div>
			</div>
		</div>
	</section>
<% end_if %>
    
<!-- main content area -->
<section class="main-content" id="main-content" role="main">
	<div class="row">
		<div class="large-9 medium-8 columns">
			<div class="content">
				$Content
    
				<!-- Accordion section -->
				<ul class="accordion" data-accordion data-allow-all-closed="true">
    
    				<% loop $Descriptions %>
						<!-- Accordion -->
						<li class="accordion-item animate-box" data-accordion-item>
							<a href="#" class="accordion-title">$InfoTitle</a>
							<div class="accordion-content" data-tab-content>
								<p>$InfoDetails</p>
							</div>
					</li><!-- END Accordion -->
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
</section>

