<?php
/*
Block Name: Contact Block
Block Description: Contact Block
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: s9blocks
*/
$sectionclass = 'contactform';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">'; return; } 
/* --------- */
include('______partials_global.php');

$extra_information  = ! empty( get_field('extra_information') ) ? '<span>'.get_field('extra_information').'</span>' : '';

$email_addresscf = ! empty( get_field('email_address','options') ) ? '<li class="email"><a href="mailto:'.get_field('email_address','options').'" title="email the team">'.get_field('email_address','options').'</a></li>' : '';

$telephone_numberf = ! empty( get_field('telephone_number','options') ) ? '<li class="phone"><a href="tel:'.get_field('telephone_number','options').'" title="call the team">'.get_field('telephone_number','options').'</a></li>' : '';

$facebookcf = ! empty( get_field('facebook','options') ) ? '<li class="social"><a href="'.get_field('facebook','options').'" title="Find us on Facebook"><i class="fa-brands fa-facebook-f"></i></a></li>' : '';
$instagramcf = ! empty( get_field('instagram','options') ) ? '<li class="social"><a href="'.get_field('instagram','options').'" title="Meet us on Instagram"><i class="fa-brands fa-instagram"></i></a></li>' : '';
$linkedincf = ! empty( get_field('linkedin','options') ) ? '<li class="social"><a href="'.get_field('linkedin','options').'" title="Connect on LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a></li>' : '';
$tiktokcf = ! empty( get_field('tiktok','options') ) ? '<li class="social"><a href="'.get_field('tiktok','options').'" title="Watch us on Tik tok"><i class="fa-brands fa-tiktok"></i></a></li>' : '';
/* --------- */

echo '<section '.$anchor.' class="'.$blockclass .'">
	<div class="wcp-columns">
		<div class="wcp-column infofields"><div class="holder"><img src="/wp-content/themes/mayfairhouseholdstaff/assets/img/svg/logo_mayfair_white.svg" alt="Mayfair Household Staff">'.$extra_information.'</div></div>
		<div class="wcp-column addressfields"><ul>'.$email_addresscf.$telephone_numberf.$facebookcf.$instagramcf.$linkedincf.$tiktokcf.'</ul></div>
		<div class="wcp-column formfields">'.do_shortcode('[wpforms id="129"]').'</div>
</div>
</section>';
?>
