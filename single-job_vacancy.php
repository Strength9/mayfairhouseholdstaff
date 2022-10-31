<?php 
$jobheaderimage = ! empty(  get_field('default_jobs_header_image','options') ) ? 'style="background-image:url('.get_field('default_jobs_header_image','options').');"' : '';
	$area_title = ! empty( get_field('default_title','options') ) ? '<h1>'.get_field('default_title','options').'</h1>' : '';
$area_sub_title = ! empty( get_field('default_strapline','options') ) ? '<h2>'.get_field('default_strapline','options').'</h2>' : '';
$area_introduction = ! empty( get_field('default_introduction','options') ) ? get_field('default_introduction','options') : '';

/**/



$job_status = ! empty( get_field('job_status') ) ? get_field('job_status') : '';
$pay_details = ! empty( get_field('pay_details') ) ? get_field('pay_details') : '';
$duration_period = ! empty( get_field('duration_period') ) ? get_field('duration_period') : '';
$location = ! empty( get_field('location') ) ? get_field('location') : '';
$job_content = ! empty( get_field('job_excert') ) ? get_field('job_excert') : '';

$start_date = ! empty( get_field('start_date') ) ? get_field('start_date') : '';
$working_week = ! empty( get_field('working_week') ) ? get_field('working_week') : '';



get_header(); ?>

<main>
	<section class="heroheader home" <?php echo $jobheaderimage;?>>
		<div class="wcp-columns">
			 <div class="wcp-column full">
			 <img src="/wp-content/themes/mayfairhouseholdstaff/assets/img/svg/logo_mayfair_white.svg" alt="Mayfair Household Staff">
			 </div>
		</div>
	</section>
	
	<section class="centraltextjv">
		<div class="wcp-columns">
			 <div class="wcp-column full"><?php echo $area_title.$area_sub_title.$area_introduction;?></div>
		</div>
	</section>';
	
	<section class="job_details_page">
		<div class="wcp-columns">
		 	<div class="wcp-column jobinformtation">
			 	<?php echo '<ul class="jobdata">'.
					'<li><h2>'.get_the_title().'</h2></li>'.
					'<li><h3>Start Date:</h3><p>'.$start_date.'</p></li>'.
					  '<li><h3>Pay Details:</h3><p>'.$pay_details.'</p></li>'.
					   '<li><h3>Contract Duration:</h3><p>'.$duration_period.'</p></li>'.
					   '<li><h3>Typical Working Week:</h3><p>'.$working_week.'</p></li>'.
						'<li><h3>Placement Location:</h3><p>'.$location.'</p></li>'.
						 '<li>'.$job_content.'</li>'.'</ul>';?>
			 	

		 	</div>
		 	<div class="wcp-column enquiryform">
				 <h2>Apply today !</h2>
		 		<?php echo do_shortcode('[wpforms id="163"]');?>
		 	</div>
		 	
		</div>
	</section>
</main>
<?php get_footer();  ?>

