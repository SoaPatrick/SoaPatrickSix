<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package soapatricksix
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script>FontAwesomeConfig = { searchPseudoElements: true };</script>
	<!--
	/**
	 * @license
	 * MyFonts Webfont Build ID 3694353, 2019-01-06T13:57:31-0500
	 * 
	 * The fonts listed in this notice are subject to the End User License
	 * Agreement(s) entered into by the website owner. All other parties are 
	 * explicitly restricted from using the Licensed Webfonts(s).
	 * 
	 * You may obtain a valid license at the URLs below.
	 * 
	 * Webfont: AmsiProNarw-Black by Stawix
	 * URL: https://www.myfonts.com/fonts/stawix/amsi-pro/narrow-black/
	 * Copyright: &#x00A9; 2012, 2013, 2014, 2015, 2016 by Stawix Ruecha &amp; Foundry. All
	 * rights reserved.
	 * Licensed pageviews: 10,000
	 * 
	 * 
	 * License: https://www.myfonts.com/viewlicense?type=web&buildid=3694353
	 * 
	 * © 2019 MyFonts Inc
	*/

	-->
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<?php wp_head(); ?>
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicon/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/favicon/safari-pinned-tab.svg" color="#cf3c3b">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon.ico">
	<meta name="msapplication-TileColor" content="#222222">
	<meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/favicon/browserconfig.xml">
	<meta name="theme-color" content="#222222">	
	<script>const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;const currentColor = localStorage.getItem('color') ? localStorage.getItem('color') : null;if(currentTheme){document.documentElement.setAttribute('data-theme', currentTheme);}if(currentColor){document.documentElement.setAttribute('data-color', currentColor);}</script>
	<script src="https://kit.fontawesome.com/89d3ae0c6b.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
	<h1 class="hidden"><?php bloginfo('name'); ?></h1>
	<h2 class="hidden"><?php bloginfo('description'); ?></h2>
	<div id="settings-window">
		<div class="container">
			<div id="settings-window__header"></div>
			<div id="settings-window__close">
				<i class="fal fa-times fa-fw"></i>
			</div>
			<h2>Settings</h2>
			<div class="theme-switch-wrapper">
				<i class="fal fa-lightbulb-slash"></i>
				<label class="theme-switch" for="checkbox">
					<input type="checkbox" id="checkbox">
					<div class="slider round"></div>
				</label>
				<i class="fal fa-lightbulb-on"></i>
			</div>
			<div class="color-switch-wrapper">
				<label id="color-switch" for="radio">
					<input type="radio" name="color" id="switch--amber" value="amber">
					<input type="radio" name="color" id="switch--red" value="red">
					<input type="radio" name="color" id="switch--pink" value="pink">
					<input type="radio" name="color" id="switch--purple" value="purple">
					<input type="radio" name="color" id="switch--blue" value="blue">
					<input type="radio" name="color" id="switch--green" value="green">
				</label>
			</div>
		</div>
	</div>
	<div id="search-collapse">
		<div class="container">
			<form class="search-form" action="<?php echo home_url( '/' ); ?>" method="get">
				<label class="grid" for="search-collapse--input" aria-labelledby="search-collapse--input">
					<input type="text" name="s" id="search-collapse--input" value="<?php the_search_query(); ?>" placeholder="Find stuff..." />
				</label>
			</form>
		</div>
	</div>
		
	<nav class="site-navigation">
		<a class="site-navigation__link" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="SoaPatrick">
			<span><i class="soa">Soa</i><i class="patrick">Patrick</i></span>		
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 894.28 1024" class="nav-logo">
				<path class="logo--letter-s" d="M323.6,1023.67,572.31,197.44h177.1c51.76,0,89.85,6.51,112.64,19.54,21.81,12.37,32.23,34.83,32.23,68.36,0,27-6.19,60.23-18.23,99L828.52,542.52c-11.4,37.11-23.77,68.36-37.11,92.78-13,23.76-28.65,43-46.88,57-17.91,14-39.72,24.09-64.46,30-25.07,6.19-56,9.12-91.8,9.12H553.11L465.21,1024h0l-141.61-.33ZM636.45,582.89A51.51,51.51,0,0,0,658.91,578c7.16-3.25,13.35-9.44,19.21-18.23,5.2-8.13,10.74-19.2,16.27-33.2q8.31-20.51,17.58-53.72c8.47-26.69,14.65-48.83,18.56-65.43,3.91-16.93,5.86-29.63,5.86-38.74,0-11.07-3.58-17.91-10.42-20.84-4.88-1.95-11.39-2.93-20.18-2.93l-38.09.33-66.41,221-4.89,16.28Z"/>
				<path class="logo--letter-p" d="M130.56,856.83c-6.84,0-15.63-.32-16.28-.32-33.21-1.63-59.9-9.12-79.43-22.47C12.06,818.42.67,792.7,0,754.94c-.32-25.39,4.89-57.3,15.63-94.41L34.2,596.07H170.27l-12.69,41.67c-4.56,17.58-6.84,30.28-6.84,39.72.33,19.86,11.4,31.25,30.28,31.25h1a73.18,73.18,0,0,0,15.3-1.63l.66-.32a50.68,50.68,0,0,0,22.13-15c9.12-11.07,17.26-27.67,24.74-51.43,4.89-17.91,7.17-33.54,7.17-47.53,0-24.42-5.86-45.91-17.58-63.16-11.07-16.28-23.12-32.88-36.46-49.16-8.47-9.76-16.93-20.51-25.4-31.57a206.37,206.37,0,0,1-21.81-35.81,213.32,213.32,0,0,1-15.62-42.65,207.61,207.61,0,0,1-6.19-52.09c0-30.92,6.19-67.06,18.23-108.08,11.39-37.11,24.42-69.66,38.74-96.68,14.32-26.37,31.25-48.51,50.46-65.11a185.79,185.79,0,0,1,67.39-36.79C329.47,3.91,359.74,0,393.92,0,440.15,0,475,8.14,498.1,24.09c22.46,15.63,33.53,41.67,33.53,79.76,0,25.39-5.86,57-16.93,94.08l-19.53,64.13H357.79l14.65-43.62c4.88-17.25,7.48-30.28,7.48-39.39,0-20.18-11.06-31.58-30.6-31.58-15.3,0-28.32,5.86-38.09,17.58-9.44,11.07-16.92,28-23.43,52.41A155.66,155.66,0,0,0,282.91,237a100.72,100.72,0,0,0-1.3,17.25c0,21.49,5.53,40.37,16.28,56.32,10.09,15,22.13,30.28,35.16,45.9,8.13,9.77,16.6,20.51,25.39,31.58a246.34,246.34,0,0,1,22.46,36.46c6.84,13.35,12.37,28.65,16.93,44.93s6.84,34.83,6.84,55a347.36,347.36,0,0,1-3.91,49.48c-2.6,17.91-7.16,37.12-13,57.63-13,43.62-27,80.08-41.67,109.05C331.42,768.94,314.16,792.38,295,810a167.1,167.1,0,0,1-67.06,36.79c-26.05,7.16-56.65,10.74-91.48,10.74A18.09,18.09,0,0,0,130.56,856.83Z"/>
			</svg>
		</a>
		<a class="site-navigation__link" href="<?php echo esc_url( home_url( '/' ) ); ?>storage" aria-label="Storage"><span>Storage</span><i class="fal fa-archive"></i></a>
		<a class="site-navigation__link" href="<?php echo esc_url( home_url( '/' ) ); ?>factory" aria-label="Factory"><span>Factory</span><i class="fal fa-industry"></i></a>
		<span class="site-navigation__link" aria-label="Settings" id="toggle-settings"><span>Settings</span><i class="fal fa-sliders-v"></i></span>
		<spam class="site-navigation__link" aria-label="Find stuff" id="toggle-search-collapse"><span>Find stuff</span><i class="fal fa-search"></i></span>
	</nav>
	<div class="wrapper">
		<?php if ( is_home() && !is_paged() ) : ?>
		    <header class="site-header">
			    <div id="bubble-wrapper">
				    <?php
						$count = 20;
						foreach( range(1,$count) as $item){
							echo '<div class="bubble"></div>';
						}
					?>
				</div>
				<div class="container">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo" aria-label="SoaPatrick">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 894.28 1024" class="logo">
							<path class="logo--letter-s" d="M323.6,1023.67,572.31,197.44h177.1c51.76,0,89.85,6.51,112.64,19.54,21.81,12.37,32.23,34.83,32.23,68.36,0,27-6.19,60.23-18.23,99L828.52,542.52c-11.4,37.11-23.77,68.36-37.11,92.78-13,23.76-28.65,43-46.88,57-17.91,14-39.72,24.09-64.46,30-25.07,6.19-56,9.12-91.8,9.12H553.11L465.21,1024h0l-141.61-.33ZM636.45,582.89A51.51,51.51,0,0,0,658.91,578c7.16-3.25,13.35-9.44,19.21-18.23,5.2-8.13,10.74-19.2,16.27-33.2q8.31-20.51,17.58-53.72c8.47-26.69,14.65-48.83,18.56-65.43,3.91-16.93,5.86-29.63,5.86-38.74,0-11.07-3.58-17.91-10.42-20.84-4.88-1.95-11.39-2.93-20.18-2.93l-38.09.33-66.41,221-4.89,16.28Z"/>
							<path class="logo--letter-p" d="M130.56,856.83c-6.84,0-15.63-.32-16.28-.32-33.21-1.63-59.9-9.12-79.43-22.47C12.06,818.42.67,792.7,0,754.94c-.32-25.39,4.89-57.3,15.63-94.41L34.2,596.07H170.27l-12.69,41.67c-4.56,17.58-6.84,30.28-6.84,39.72.33,19.86,11.4,31.25,30.28,31.25h1a73.18,73.18,0,0,0,15.3-1.63l.66-.32a50.68,50.68,0,0,0,22.13-15c9.12-11.07,17.26-27.67,24.74-51.43,4.89-17.91,7.17-33.54,7.17-47.53,0-24.42-5.86-45.91-17.58-63.16-11.07-16.28-23.12-32.88-36.46-49.16-8.47-9.76-16.93-20.51-25.4-31.57a206.37,206.37,0,0,1-21.81-35.81,213.32,213.32,0,0,1-15.62-42.65,207.61,207.61,0,0,1-6.19-52.09c0-30.92,6.19-67.06,18.23-108.08,11.39-37.11,24.42-69.66,38.74-96.68,14.32-26.37,31.25-48.51,50.46-65.11a185.79,185.79,0,0,1,67.39-36.79C329.47,3.91,359.74,0,393.92,0,440.15,0,475,8.14,498.1,24.09c22.46,15.63,33.53,41.67,33.53,79.76,0,25.39-5.86,57-16.93,94.08l-19.53,64.13H357.79l14.65-43.62c4.88-17.25,7.48-30.28,7.48-39.39,0-20.18-11.06-31.58-30.6-31.58-15.3,0-28.32,5.86-38.09,17.58-9.44,11.07-16.92,28-23.43,52.41A155.66,155.66,0,0,0,282.91,237a100.72,100.72,0,0,0-1.3,17.25c0,21.49,5.53,40.37,16.28,56.32,10.09,15,22.13,30.28,35.16,45.9,8.13,9.77,16.6,20.51,25.39,31.58a246.34,246.34,0,0,1,22.46,36.46c6.84,13.35,12.37,28.65,16.93,44.93s6.84,34.83,6.84,55a347.36,347.36,0,0,1-3.91,49.48c-2.6,17.91-7.16,37.12-13,57.63-13,43.62-27,80.08-41.67,109.05C331.42,768.94,314.16,792.38,295,810a167.1,167.1,0,0,1-67.06,36.79c-26.05,7.16-56.65,10.74-91.48,10.74A18.09,18.09,0,0,0,130.56,856.83Z"/>
						</svg>
					</a>
				</div>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2560 800" class="bubbles">
					<g>
						<path class="bubbles--third-row" d="M2560,296.91c-1.79,0-3.59-.06-5.39-.06-102.14,0-187.65,71.16-209.67,166.6a223.82,223.82,0,0,0-62.25,47.31A117.63,117.63,0,0,0,2191.51,468a118.87,118.87,0,0,0-46.9,9.57c-2-.07-4-.12-6-.12a174.61,174.61,0,0,0-172.28,146.33,141.78,141.78,0,0,0-169.22,95.4q-3.16,2.46-6.08,5.2a181.42,181.42,0,0,0-111.36-79.66A118.34,118.34,0,0,0,1506.8,598a163.82,163.82,0,0,0-118.91-50.56,168.18,168.18,0,0,0-25.26,1.91,77.56,77.56,0,0,0-95.42.22,203.15,203.15,0,0,0-226.7-64.87,192.22,192.22,0,0,0-228.64,28,357.42,357.42,0,0,0-87.35-13.38,140.3,140.3,0,0,0-230.89.4,203.49,203.49,0,0,0-47.45-20.4,75.44,75.44,0,0,0-108.84-34.12,159.7,159.7,0,0,0-200.95-74.63A207.65,207.65,0,0,0,0,236.55V800H2560Z"/>
						<path class="bubbles--second-row" d="M2560,467.23a227.76,227.76,0,0,0-277.31,43.53A117.63,117.63,0,0,0,2191.51,468c-64.51,0-116.81,51-116.81,114q0,3.33.2,6.61c-53,10-94.87,50.5-105.54,102.08a209.23,209.23,0,0,0-75.52,23A85.56,85.56,0,0,0,1791,724.38c-31.87-50.86-89.3-84.8-154.86-84.8a183.86,183.86,0,0,0-91.63,24.23c-18.93-67.1-81.89-116.39-156.64-116.39A164.45,164.45,0,0,0,1298,573.89,228.84,228.84,0,0,0,1112.46,559c-31.36-59.24-94.68-99.74-167.7-99.74a190.38,190.38,0,0,0-132.89,53.46,357.5,357.5,0,0,0-87.35-13.39,140.31,140.31,0,0,0-230.89.41,206.23,206.23,0,0,0-240.81,23.1A347.94,347.94,0,0,0,0,481.32V800H2560Z"/>
						<path class="bubbles--first-row" d="M2560,542.9a169.77,169.77,0,0,0-127.46,60A205.93,205.93,0,0,0,2284,539.8c-110,0-199.89,86-206.16,194.41a75.49,75.49,0,0,0-100.46,57.27,92.86,92.86,0,0,0-164.58-7.92,156.61,156.61,0,0,0-301-11.08,73.93,73.93,0,0,0-95.93-19.58C1405.09,636.83,1307.44,546,1188.54,546a228.1,228.1,0,0,0-187.21,97.59C936.1,555.91,831.72,499.13,714.08,499.13c-143.22,0-266.76,84.14-324,205.68A380.09,380.09,0,0,0,0,651V800H2560Z"/>
					</g>
				</svg>
		    </header>
		<?php else : ?>
		    <header class="site-header--not-home">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2560 563.45" class="bubbles">
					<path  class="bubbles--third-row" d="M0,503.09c1.79,0,3.59.06,5.39.06,102.14,0,187.65-71.16,209.67-166.6a223.94,223.94,0,0,0,62.25-47.31A117.62,117.62,0,0,0,368.49,332a118.87,118.87,0,0,0,46.9-9.57c2,.07,4,.12,6,.12A174.61,174.61,0,0,0,593.67,176.22a141.78,141.78,0,0,0,169.22-95.4c2.11-1.64,4.13-3.37,6.08-5.2a181.42,181.42,0,0,0,111.36,79.66A118.37,118.37,0,0,0,1053.2,202a163.84,163.84,0,0,0,118.91,50.56,168.15,168.15,0,0,0,25.26-1.91,77.56,77.56,0,0,0,95.42-.22,203.16,203.16,0,0,0,226.7,64.87,192.22,192.22,0,0,0,228.64-28,357.23,357.23,0,0,0,87.35,13.38,140.3,140.3,0,0,0,230.89-.4,203.58,203.58,0,0,0,47.45,20.4,75.45,75.45,0,0,0,108.84,34.12,159.71,159.71,0,0,0,201,74.63,207.67,207.67,0,0,0,136.39,134V0H0Z"/>
					<path class="bubbles--second-row" d="M0,332.77a227.75,227.75,0,0,0,277.31-43.53A117.62,117.62,0,0,0,368.49,332C433,332,485.3,281,485.3,218q0-3.33-.2-6.61c53-10,94.87-50.5,105.54-102.08a209.37,209.37,0,0,0,75.52-23A85.56,85.56,0,0,0,769,75.62c31.87,50.86,89.3,84.8,154.86,84.8a183.8,183.8,0,0,0,91.63-24.23c18.93,67.1,81.89,116.39,156.64,116.39A164.43,164.43,0,0,0,1262,226.11,228.83,228.83,0,0,0,1447.54,241c31.36,59.24,94.68,99.74,167.7,99.74a190.37,190.37,0,0,0,132.89-53.46,357.24,357.24,0,0,0,87.35,13.39,140.32,140.32,0,0,0,230.89-.41,206.23,206.23,0,0,0,240.81-23.1A348,348,0,0,0,2560,318.68V0H0Z"/>
					<path class="bubbles--first-row" d="M0,257.1a169.77,169.77,0,0,0,127.46-60A205.93,205.93,0,0,0,276,260.2c110,0,199.89-86,206.16-194.41a75.48,75.48,0,0,0,97-44.61,76,76,0,0,0,3.47-12.66A92.86,92.86,0,0,0,705.8,54a92.82,92.82,0,0,0,41.4-37.59A156.61,156.61,0,0,0,936.67,131.13,156.6,156.6,0,0,0,1048.2,27.52a73.92,73.92,0,0,0,95.93,19.58C1154.91,163.17,1252.56,254,1371.46,254a228.11,228.11,0,0,0,187.21-97.59c65.23,87.68,169.61,144.46,287.25,144.46,143.22,0,266.76-84.14,324-205.68A380.09,380.09,0,0,0,2560,149V0H0Z"/>
				</svg>
			</header>
		<?php endif ; ?>