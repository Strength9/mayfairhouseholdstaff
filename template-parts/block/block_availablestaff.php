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

$AV_area_title = ! empty( get_field('AV_area_title') ) ? '<h1>'.get_field('AV_area_title').'</h1>' : '';
$AV_area_sub_title = ! empty( get_field('AV_area_sub_title') ) ? '<h2>'.get_field('AV_area_sub_title').'</h2>' : '';
$AV_area_introduction = ! empty( get_field('AV_area_introduction') ) ? get_field('AV_area_introduction') : '';



//

$args = array(  
		'post_type' => 'staff_ava',
		'post_status' => 'publish',
		'posts_per_page' => 200, 
		'orderby' => 'title', 
		'order' => 'ASC', 
	);

$loop = new WP_Query( $args ); 
$gridoutput = '<div class="availabilitycards">';	

if($loop->have_posts()) :
while ( $loop->have_posts() ) : $loop->the_post(); 
	
$post_id = get_the_ID();
	$thumbnail_url = get_the_post_thumbnail_url();
	$name =  ! empty( get_field('name',$post_id) ) ? '<li><h2>'.get_field('name',$post_id).'</h2></li>' : ''; 
	$role   =  ! empty( get_field('role',$post_id) ) ? '<li><h3>Job Position:</h3><p>'.get_field('role',$post_id).'</p></li>' : ''; 
	$location   =  ! empty( get_field('location',$post_id) ) ? '<li><h3>Current Location:</h3><p>'.get_field('location',$post_id).'</p></li>' : ''; 
	$uk_status   =  ! empty( get_field('uk_status',$post_id) ) ? '<li><h3>UK Status:</h3><p>'.get_field('uk_status',$post_id).'</p></li>' : ''; 
	$experience  =  ! empty( get_field('experience',$post_id) ) ? '<li><h3>Experience:</h3><p>'.get_field('experience',$post_id).'</p></li>' : ''; 
	$cooking   =  ! empty( get_field('cooking',$post_id) ) ? '<li><h3>Cooking:</h3><p>'.get_field('cooking',$post_id).'</p></li>' : ''; 
	$availability  =  ! empty( get_field('availability',$post_id) ) ? '<li><h3>Availability:</h3><p>'.get_field('availability',$post_id).'</p></li>' : ''; 
	$description  =  ! empty( get_field('description',$post_id) ) ? '<li><p>'.get_field('description',$post_id).'</p></li>' : ''; 
	
	$side_image  =  ! empty( get_field('side_image',$post_id) ) ?' style="background-image:url('.get_field('side_image',$post_id).');"' : ''; 
	
	
	$gridoutput .= '<article>
	<div class="imagebar"'. $side_image.'></div>
				<ul class="avdata">'
				.$name.$role.$location.$uk_status.$experience.$cooking.$availability.$description.
				'</ul>
	</article>';
	
endwhile;
$gridoutput .= '</div>';	


$push = '<section '.$anchor.' class="'.$blockclass .'">
	<div class="wcp-columns">
		 <div class="wcp-column full">'.$AV_area_title.$AV_area_sub_title.$AV_area_introduction.$gridoutput.'</div>
	</div>
</section>';




wp_reset_postdata(); 
else :
	

	
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
