<?php
/*
Template Name: Work
*/
get_header();
?>
<main id="main" role="main">
	<section class="grid grid-thirds">
		<?php
		$portfolio_query = new WP_Query(array(
		    'post_type'      =>'portfolio',
		    'posts_per_page' => '999',
		    'no_found_rows'  => true
		));
		if (have_posts()) : while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
			get_template_part( 'includes/portfolio', 'items' );
		endwhile; endif; wp_reset_postdata(); ?>
	</section>
</main>
<?php get_footer(); ?>