<!-- CTA 1 -->
<% with SiteConfig %>
	<a href="$CallToActionLink" class="cta-container blocks animate-box">
		<div class="background-image" style="background-image: url($ThemeDir/assets/img/cta-bg.jpg);"></div>
		<div class="overlay"></div>
		<div class="cta-content">
			<h2>$CallToActionHeader</h2>
			<p>$CallToActionText</p>
			<span class="button">Learn More</span>
		</div>
	</a>
<% end_with %>
<!-- END CTA 1 -->