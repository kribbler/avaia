<?php
/*
Template Name: Full Width Services Page
*/

	get_header('services');
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

<script type="text/javascript">
jQuery(document).ready(function($){
	//console.log('services page');
});
</script>
<?php
	get_footer();
?>