<?php
/*
Block Name: Call to Action
Block Description: Call to Action
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: s9blocks
*/
$sectionclass = 'calltoaction';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">'; return; } 
/* --------- */
include('______partials_global.php');
/* --------- */

$calltext = ! empty( get_field('calltext') ) ? get_field('calltext') : 'Call to Action';
$icon = ! empty( get_field('link_icon') ) ? '<i class="'.get_field('link_icon').'"></i>' : '';


$linkaddress = ! empty( get_field('linkk_address') ) ? get_field('linkk_address') : '';
if (!empty($linkaddress)) {
	
	$button = '<a href="'.$linkaddress["url"].'" title="'.$linkaddress["title"].'" target="'.$linkaddress["target"].'" class="button">'.$icon.$linkaddress["title"].'</a>';
	
};


echo '<section '.$anchor.' class="'.$blockclass .'">
	<div class="call_content">
		 <div class="calltext">'.$calltext.'</div>
		 <div class="callbutton">'.$button.'</div>
	</div>
</section>';
?>
