<?php
/*
Block Name: Block Available Staff
Block Description: Block Available Staff
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: s9blocks
*/
$sectionclass = 'vacancygrid';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">'; return; } 
/* --------- */
include('______partials_global.php');
/* --------- */

//$area_title = ! empty( get_field('area_title') ) ? '<h1>'.get_field('area_title').'</h1>' : '';
//$area_sub_title = ! empty( get_field('area_sub_title') ) ? '<h2>'.get_field('area_sub_title').'</h2>' : '';
//$area_introduction = ! empty( get_field('area_introduction') ) ? get_field('area_introduction') : '';



//

$args = array(  
		'post_type' => 'staff_ava',
		'post_status' => 'draft',
		'posts_per_page' => 200, 
		'orderby' => 'title', 
		'order' => 'ASC', 
	);

$loop = new WP_Query( $args ); 
$gridoutput = '<div class="vacancycards">';	

if($loop->have_posts()) :
while ( $loop->have_posts() ) : $loop->the_post(); 
	
$post_id = get_the_ID();
	$thumbnail_url = get_the_post_thumbnail_url();
	$name =  ! empty( get_field('name',$post_id) ) ? get_field('name',$post_id) : ''; 
	$gridoutput .= '<article>
				<a href="'.get_permalink().'" title="Find out more about this job vacancy at Mayfair Household Staff" class="overlay">Click to Find Out More</a><h3>'.
				get_the_title().'</h3><div class="linkbox"><span>'.$extract.'</span></div>
	</article>';
	
endwhile;
$gridoutput .= '</div>';	


$push = '<section '.$anchor.' class="'.$blockclass .'">
	<div class="wcp-columns">
		 <div class="wcp-column full">'. $gridoutput.'</div>
	</div>
</section>';




wp_reset_postdata(); 
else :
	
	
	//
	//no_content_text_availablestaff
	
	$no_content_title = ! empty( get_field('no_content_title_availablestaff','options') ) ? '<h1>'.get_field('no_content_title_availablestaff','options').'</h1>' : '';
	$no_content_sub_title = ! empty( get_field('no_content_sub_availablestaff','options') ) ? '<h2>'.get_field('no_content_sub_availablestaff','options').'</h2>' : '';
	$no_content_text= ! empty( get_field('no_content_text_availablestaff','options') ) ? get_field('no_content_text_availablestaff','options') : '';

	
$push = '<section class="job_details_page" id="uploadcv">
	<div class="wcp-columns">
		 <div class="wcp-column full failed">
			'.$no_content_title.$no_content_sub_title.$no_content_text.'
		 </div>

		 
	</div>
</section>';

endif;


echo $push;
?>
