<?php get_header(); ?>
<main id="main" class="portfolio" role="main">
	<?php
	if (have_posts()) : while (have_posts()) : the_post();
		get_template_part( 'includes/hero', 'image' );
		get_template_part( 'includes/portfolio', 'information' );
	endwhile; endif; wp_reset_postdata();
	get_template_part( 'includes/portfolio', 'examples' );
	?>
	<a href="<?php echo home_url() . '/work/'; ?>" class="footer__close">close project</a>
</main>
<?php get_footer(); ?>