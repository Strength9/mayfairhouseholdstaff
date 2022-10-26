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
		<nav >
			<?php wp_nav_menu( array(  'menu' => 'Menu Left','container'  => '', 'container_class' => '', 'container_id'    => '',   'depth' => 3 , 'items_wrap' => '<ul id="nav_menu_left" class="nav_menu_strip">%3$s</ul>' ) );?>
		</nav>
</header>
