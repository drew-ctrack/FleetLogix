<!doctype html>
<html class="no-js" lang="en">
  <head>
  	<% base_tag %>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FleetLogix</title>
    <link rel="stylesheet" href="$ThemeDir/css/app.css">
  </head>
  <body>

    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
    
    <!-- mobile menu -->
    <div class="menu-wrap">
      <nav class="menu">
        <ul class="nav-menu">
       		<% loop Menu(1) %>
       			<li class="nav-item"><a class="$LinkingMode" href="$Link">$MenuTitle</a></li>
       		<% end_loop %>
        </ul>
        <button class="close-button" id="close-button">X</button>
      </nav>
    </div>
    <button class="menu-button fa fa-bars" id="open-button"><span></button>
    
      <header >
        <div class="row">
          <div class="large-3 medium-3 small-12 columns">
            <a href="index.html" id="logo"><img src="$ThemeDir/img/fleetlogix-logo-light.svg" alt="" class="light-logo"></a>
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
    
      
      $Layout

    
      <section class="cta animate-box">
        <div class="background-image" style="background-image: url($ThemeDir/img/cta-bg.jpg);"></div>
        <div class="overlay"></div>
        <div class="row">
          <div class="large-12 columns">
            <h2>Lorem ipsum call to action</h2>
            <p>Morbi molestie euismod nulla, et vehicula metus.</p>
            <a href="/" class="button">Let's Talk</a>
          </div>
        </div>
      </section>
    
      
      <% include Footer %>
    

    <script src="$ThemeDir/js/app.js"></script>

  </body>
</html>
