<?php
/*
Template Name: Home Page
*/


	get_header('home');
?>

<?php 
	extract(etheme_get_page_sidebar());
?>

<?php if($page_slider != 'no_slider' && $page_slider != ''): ?>
	
	<?php echo do_shortcode('[rev_slider_vc alias="'.$page_slider.'"]'); ?>

<?php endif; ?>

<div class="container_home">
	<div class="page-content">
		<?php if(have_posts()): while(have_posts()) : the_post(); ?>
							
			<?php the_content(); ?>
		<?php endwhile; endif;?>
		<!--<div class="row-fluid">
			<div class="span5">
				<?php //echo do_shortcode('[show_twitter_widget]');?>
			</div>
			<div class="span7">
				<?php //echo do_shortcode( '[content_block id=190]' ); ?>
			</div>
		</div>-->
	</div>
</div>

<?php
	get_footer();
?>