<?php
wp_nav_menu( array( 
	'theme_location' => 'menu-1',	
	'container'       => 'nav',	
	'container_id'    => 'nav-menu-container',
	'menu_class'      => 'nav-menu sf-js-enabled sf-arrows'	,
	'menu_id'=>'mymenu',
	'add_li_class'  => 'menu-active'
	) );
?>

  <nav id="nav-menu-container">
	<ul class="nav-menu">
	  <li class="menu-active"><a href="#body">Home</a></li>
	  <li><a href="#about">About Us</a></li>
	  <li><a href="#services">Services</a></li>
	  <li><a href="#portfolio">Portfolio</a></li>
	  <li><a href="#team">Team</a></li>         
	  <li><a href="#contact">Contact</a></li>
	</ul>
  </nav>	  
