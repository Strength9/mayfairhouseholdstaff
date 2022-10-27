<?php
/*
Block Name: Image Left and Right
Block Description: Image Left and Right
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: s9blocks
*/
$sectionclass = 'imageleftright';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">'; return; } 
/* --------- */
include('______partials_global.php');
/* --------- */


$button = '<a href="#" title="Whats app the team" class="button"><i class="fa-brands fa-whatsapp"></i>WhatsApp Today!</a>';


$background_image = ! empty( get_field('background_image') ) ? 'style="background-image:url('.get_field('background_image').');"' : '';
$content = ! empty( get_field('content') ) ? '<div class="textbox">'.get_field('content').$button.'</div>' : '';
$text_position = ! empty( get_field('text_position') ) ? get_field('text_position') : 'left';

echo '<section '.$anchor.' class="'.$blockclass .'" '.$background_image.'>
	<div class="wcp-columns '.$text_position.'">
		 	<div class="wcp-column text" >'.$content.'</div>
		 	<div class="wcp-column image" >&nbsp; </div>
	</div>
</section>';
?>
<i class=""></i>