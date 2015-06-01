<?php
/*
Template Name: Home
*/
get_header();
?>
<main id="main" role="main">
	<?php
	if (have_posts()) : while (have_posts()) : the_post();
		$fc_hero_image = ( get_field( 'fc_hero_image' ) ? get_field( 'fc_hero_image' ) : '' );
		if( $fc_hero_image ) :
			$heroimage_url = $fc_hero_image['url'];
		endif;
	?>
	<div class="hero-image" style="background-image: url(<?php echo $heroimage_url; ?>);">
	</div>
	<?php endwhile; endif; wp_reset_postdata(); ?>
</main>
<?php get_footer(); ?>