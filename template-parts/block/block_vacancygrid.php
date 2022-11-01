<?php
/*
Block Name: Block Vacancy Grid
Block Description: Block Vacancy Grid
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

$area_title = ! empty( get_field('area_title') ) ? '<h1>'.get_field('area_title').'</h1>' : '';
$area_sub_title = ! empty( get_field('area_sub_title') ) ? '<h2>'.get_field('area_sub_title').'</h2>' : '';
$area_introduction = ! empty( get_field('area_introduction') ) ? get_field('area_introduction') : '';

$select_number_to_show = ! empty( get_field('number_of_vacancies_to_show') ) ? get_field('number_of_vacancies_to_show') : ''; 

$args = array(  
		'post_type' => 'job_vacancy',
		'post_status' => 'publish',
		'posts_per_page' => $select_number_to_show, 
		'orderby' => 'title', 
		'order' => 'ASC', 
	);

$loop = new WP_Query( $args ); 
$gridoutput = '<div class="vacancycards">';	

if($loop->have_posts()) :
while ( $loop->have_posts() ) : $loop->the_post(); 
	
$post_id = get_the_ID();
	$thumbnail_url = get_the_post_thumbnail_url();
	$extract =  ! empty( get_field('pay_details',$post_id) ) ? get_field('pay_details',$post_id) : ''; 
	$gridoutput .= '<article>
				<div class="thumbnail" style="background-image:url('.$thumbnail_url.');"><a href="'.get_permalink().'" title="Find out more about this job vacancy at Mayfair Household Staff" class="overlay">Click to Find Out More</a></div><h3>'.
				get_the_title().'</h3><div class="linkbox"><span>'.$extract.'</span><a href="'.get_permalink().'" title ="Find out more about this job vacancy at Mayfair Household Staff">Read More</a></div>
	</article>';
	
endwhile;
$gridoutput .= '</div>';	


$push = '<section '.$anchor.' class="'.$blockclass .'">
	<div class="wcp-columns">
		 <div class="wcp-column full">'.$area_title.$area_sub_title.$area_introduction . $gridoutput.'</div>
	</div>
</section>';




wp_reset_postdata(); 
else :
$no_content_title = ! empty( get_field('no_content_title','options') ) ? '<h1>'.get_field('no_content_title','options').'</h1>' : '';
$no_content_sub_title = ! empty( get_field('no_content_sub_title','options') ) ? '<h2>'.get_field('no_content_sub_title','options').'</h2>' : '';
$no_content_text= ! empty( get_field('no_content_text','options') ) ? get_field('no_content_text','options') : '';

$no_content_link_information = ! empty( get_field('no_content_link_information','options') ) ? get_field('no_content_link_information','options') : '';
$no_content_link_icon = ! empty( get_field('no_content_link_icon','options') ) ? '<i class="'.get_field('no_content_link_icon','options').'"></i>' : '';

if (!empty($no_content_link_information)) {
	
	$ncbutton = '<a href="'.$no_content_link_information["url"].'" title="'.$no_content_link_information["title"].'" target="'.$no_content_link_information["target"].'" class="button red">'.$no_content_link_icon.$no_content_link_information["title"].'</a>';
	
}else {
	$ncbutton = '';
};




$push =  '<section '.$anchor.' class="centraltext">
	<div class="wcp-columns">
		 <div class="wcp-column full">'.$no_content_title.$no_content_sub_title.$no_content_text.$ncbutton.'</div>
	</div>
</section>';


endif;


echo $push;
?>
