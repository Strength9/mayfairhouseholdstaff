<?php
$email_address = ! empty( get_field('email_address','options') ) ? '<li class="email"><a href="mailto:'.get_field('email_address','options').'" title="email the team">'.get_field('email_address','options').'</a></li>' : '';

$telephone_number = ! empty( get_field('telephone_number','options') ) ? '<li class="phone"><a href="tel:'.get_field('telephone_number','options').'" title="call the team">'.get_field('telephone_number','options').'</a></li>' : '';

$facebook = ! empty( get_field('facebook','options') ) ? '<li class="social"><a href="'.get_field('facebook','options').'" title="Find us on Facebook"><i class="fa-brands fa-facebook-f"></i></a></li>' : '';
$instagram = ! empty( get_field('instagram','options') ) ? '<li class="social"><a href="'.get_field('instagram','options').'" title="Meet us on Instagram"><i class="fa-brands fa-instagram"></i></a></li>' : '';
$linkedin = ! empty( get_field('linkedin','options') ) ? '<li class="social"><a href="'.get_field('linkedin','options').'" title="Connect on LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a></li>' : '';
$tiktok = ! empty( get_field('tiktok','options') ) ? '<li class="social"><a href="'.get_field('tiktok','options').'" title="Watch us on Tik tok"><i class="fa-brands fa-tiktok"></i></a></li>' : '';


$footer_call_to_action_text = ! empty( get_field('footer_call_to_action_text','options') ) ? get_field('footer_call_to_action_text','options') : '';

$call_to_action_background = ! empty( get_field('call_to_action_background','options') ) ? 'style="background-image:url('.get_field('call_to_action_background','options').');"' : '';

// 

$footer_links = ! empty( get_field('footer_links','options') ) ? get_field('footer_links','options') : '';

$rwButtons ='';

$rows = $footer_links;
if( $rows ) {
	$rwButtons = '<ul class="callbuttons">';
	foreach( $rows as $row ) {
		$fltarget = ! empty( $row['footer_buttons']['target'] ) ? ' target="'.$row["footer_buttons"]["target"].'"' : '';
		 $rwButtons .='<li><a href="'.$row['footer_buttons']['url'].'" title="'.$row['footer_buttons']['title'].'" $fltarget class="button">'.$row['footer_buttons']['title'].'</a></li>';
	}
	$rwButtons .='</ul>';
}

?>
<div class="footercall" <?php echo $call_to_action_background ;?>>
	<div class="callcontent">
		<div class="textcontent">
			<?php echo $footer_call_to_action_text;?>
		</div>
		<div class="textlinks">
			<?php echo $rwButtons;?>
		</div>
	</div>
	
</div>
<footer>
	<div class="wcp-columns">
		<div class="wcp-column logo">
		 	<a href="#" title="" class="">
				 <img src="/wp-content/themes/mayfairhouseholdstaff/assets/img/svg/logo_mayfair_grey.svg" alt="Mayfair Household Staff">
			 </a>
	 	</div>
		<div class="wcp-column getintouch">
		 	<ul class="contacts">
			 	<li class="title">Get in Touch</li>
				<?php echo $telephone_number.$email_address.$facebook.$instagram.$linkedin.$tiktok;?>
		 	</ul>
	 	</div>
	 	<div class="wcp-column quicklinks">
		 	<?php wp_nav_menu( array(  'menu' => 'Quick Links','container'  => '', 'container_class' => '', 'container_id'    => '',   'depth' => 1 , 'items_wrap' => '<ul class="nm"><li class="title">Find Out More</li>%3$s</ul>' ) );?>  
	 	</div>
	 	<div class="wcp-column hidemedium legal">
		 	<?php wp_nav_menu( array(  'menu' => 'Legal Menu','container'  => '', 'container_class' => '', 'container_id'    => '',   'depth' => 1 , 'items_wrap' => '<ul class="nm"><li class="title">Legal Menu</li>%3$s</ul>' ) );?>  
	 	</div>
	</div>
</footer>
<div class="copyrightbar">
	 	<div>
			 &copy; Copyright <?php echo date("Y");?> Mayfair Household Staff. Design & Build by <a href="https://strength9.co.uk" title="Strength 9  The Creative Design Agency">Strength 9</a>
		</div>
</div>
<?php wp_footer(); ?>

</body>
</html>

