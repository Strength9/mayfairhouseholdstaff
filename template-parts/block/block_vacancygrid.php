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
while ( $loop->have_posts() ) : $loop->the_post(); 
	
$post_id = get_the_ID();
	$thumbnail_url = get_the_post_thumbnail_url();
	$extract =  ! empty( get_field('pay_details',$post_id) ) ? get_field('pay_details',$post_id) : ''; 
	$gridoutput .= '<article>
				<div class="thumbnail" style="background-image:url('.$thumbnail_url.');"><a href="'.get_permalink().'" title="Find out more about this job vacancy at Mayfair Household Staff"" class="overlay">Click to Find Out More</a></div><h3>'.
				get_the_title().'</h3><div class="linkbox"><span>'.$extract.'</span><a href="'.get_permalink().'" title ="Find out more about this job vacancy at Mayfair Household Staff">Read More</a></div>
	</article>';
	
endwhile;
$gridoutput .= '</div>';	
wp_reset_postdata(); 



echo '<section '.$anchor.' class="'.$blockclass .'">
	<div class="wcp-columns">
		 <div class="wcp-column full">'.$area_title.$area_sub_title.$area_introduction . $gridoutput.'</div>
	</div>
</section>';
?>
