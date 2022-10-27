<?php
/*
Block Name: Central Text
Block Description: Central Text
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: s9blocks
*/
$sectionclass = 'centraltext';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">'; return; } 
/* --------- */
include('______partials_global.php');
/* --------- */

$area_title = ! empty( get_field('area_title') ) ? '<h1>'.get_field('area_title').'</h1>' : '';
$area_sub_title = ! empty( get_field('area_sub_title') ) ? '<h2>'.get_field('area_sub_title').'</h2>' : '';
$area_introduction = ! empty( get_field('area_introduction') ) ? get_field('area_introduction') : '';


echo '<section '.$anchor.' class="'.$blockclass .'">
	<div class="wcp-columns">
		 <div class="wcp-column full">'.$area_title.$area_sub_title.$area_introduction.'</div>
	</div>
</section>';
?>
