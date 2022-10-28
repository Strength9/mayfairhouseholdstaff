<?php
/*
Block Name: Hero Header
Block Description: Hero Header
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: s9blocks
*/
$sectionclass = 'heroheader';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">'; return; } 
/* --------- */
include('______partials_global.php');


$hero_size  = ! empty( get_field('hero_size') ) ? ' '.get_field('hero_size') : ' inner';


$hero_background = ! empty( get_field('hero_image') ) ? 'style="background-image:url('.get_field('hero_image').');"' : '';
/* --------- */

echo '<section '.$anchor.' class="'.$blockclass .$hero_size.'" '.$hero_background.'>
	<div class="wcp-columns">
		 <div class="wcp-column full">
		 <img src="/wp-content/themes/mayfairhouseholdstaff/assets/img/svg/logo_mayfair_white.svg" alt="Mayfair Household Staff">
		 </div>
	</div>
</section>';
?>
