<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php wp_title('');  ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>


</head>

<body <?php body_class();?>>

 <header>
	 
	 <nav class="navigation-menu">
		 
		   <label class="menuopen" aria-label="Open navigation menu" for="menu-toggle">
		   <i class="fa-light fa-bars"></i></label>
		   <input type="checkbox" id="menu-toggle" />
		   <?php wp_nav_menu( array(  'menu' => 'Main Nav','container'  => '', 'container_class' => '', 'container_id'    => '',   'depth' => 3 , 'items_wrap' => ' <ul class="main-navigation">
		   <div class="logo"><a href="https://mayfairhouseholdstaff.co.uk/"><img src="/wp-content/themes/mayfairhouseholdstaff/assets/img/svg/logo_mayfair_colour.svg" alt="Mayfair Household Staff" class="normallogo">
		   <img src="/wp-content/themes/mayfairhouseholdstaff/assets/img/svg/logo_mayfair_white.svg" alt="Mayfair Household Staff" class="fixedlogo">
		   </a></div>
		   <label for="menu-toggle"  aria-label="Close navigation menu" class="menuclose"><i class="fa-thin fa-square-xmark"></i></label>%3$s</ul>' ) );?>  
	 </nav>
	 <ul class="contactblock">
		 <li class="icon"><i class="fa-thin fa-phone"></i></li>
		<li class="textinf">Speak to the team</li>
		<li class="phoneinf"> <a href="tel"+44447713164737" title="Speak to the team">+447713  164737</a></li>
		 <li class="buttonarea">  <a href="/get-in-touch/" class="gt_button">Get in Touch</a>  </li>
	 </ul>
 </header>