<?php
/*
Template Name: Contact Page
*/

	get_header();
?>

<?php 
	extract(etheme_get_page_sidebar());
?>
<div class="page_contact">
	<div class="container">
		<div class="page-content">
			<?php if(have_posts()): while(have_posts()) : the_post(); ?>
								
				<?php the_content(); ?>
			<?php endwhile; endif;?>
		</div>
	</div>
</div>

<?php
	get_footer('contact');
?>