<?php
/*
Template Name: Full Width Page
*/

	get_header();
?>

<?php 
	extract(etheme_get_page_sidebar());
?>

<div class="container_x">
	<div class="page-content">
		<?php if(have_posts()): while(have_posts()) : the_post(); ?>
							
			<?php the_content(); ?>
		<?php endwhile; endif;?>
	</div>
</div>

<?php
	get_footer();
?>