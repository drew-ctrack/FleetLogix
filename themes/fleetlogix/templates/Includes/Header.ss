<header>
	<div class="row">
		<div class="large-3 medium-3 small-12 columns">
			<a href="index.html" id="logo"><img src="$ThemeDir/assets/img/fleetlogix-logo-light.svg" alt="" class="light-logo"></a>
		</div>
		<div class="large-9 columns medium-9">
			<a id="hamburger" href="#more-menu"><span></span></a>
			<nav id="nav" role="navigation">
				<ul class="nav-menu">
              	
					<% loop Menu(1) %>
						<li class="nav-item <% if $Children %>has-drop<% end_if %>"><a href="$Link">$MenuTitle</a>
							<% if $Children %>
								<div class="sub-nav">
									<ul class="sub-nav-group nav-item-list">
										<% loop Children %>
											<li><a href="$Link">$MenuTitle</a></li>
										<% end_loop %>
									</ul>
								</div>
							<% end_if %>
						</li>
					<% end_loop %>
              	
				</ul>
			</nav>
		</div>
	</div>
</header>