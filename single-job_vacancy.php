<?php 
$jobheaderimage = ! empty(  get_field('default_jobs_header_image','options') ) ? 'style="background-image:url('.get_field('default_jobs_header_image','options').');"' : '';
	$area_title = ! empty( get_field('default_title','options') ) ? '<h1>'.get_field('default_title','options').'</h1>' : '';
$area_sub_title = ! empty( get_field('default_strapline','options') ) ? '<h2>'.get_field('default_strapline','options').'</h2>' : '';
$area_introduction = ! empty( get_field('default_introduction','options') ) ? get_field('default_introduction','options') : '';


get_header(); ?>

<main>
	<section class="heroheader home" <?php echo $jobheaderimage;?>>
		<div class="wcp-columns">
			 <div class="wcp-column full">
			 <img src="/wp-content/themes/mayfairhouseholdstaff/assets/img/svg/logo_mayfair_white.svg" alt="Mayfair Household Staff">
			 </div>
		</div>
	</section>
	
	<section class="centraltext">
		<div class="wcp-columns">
			 <div class="wcp-column full"><?php echo $area_title.$area_sub_title.$area_introduction;?></div>
		</div>
	</section>';
	
	<section class="job_details_page">
		<div class="wcp-columns">
		 	<div class="wcp-column">
			 	Job Template
			 	
		 	</div>
		 	<div class="wcp-column enquiryform">
				 <h2>Appy today !</h2>
		 		<?php echo do_shortcode('[wpforms id="163"]');?>
		 	</div>
		 	
		</div>
	</section>
</main>
<?php get_footer();  ?>

