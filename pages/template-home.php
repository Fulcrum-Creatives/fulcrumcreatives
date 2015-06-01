<?php
/*
Template Name: Home
*/
get_header();
?>
<main id="main" role="main">
	<?php
	if (have_posts()) : while (have_posts()) : the_post();
		get_template_part( 'includes/hero', 'image' );
	endwhile; endif; wp_reset_postdata(); ?>
	<section class="grid grid-thirds">
		<?php
		$portfolio_query = new WP_Query(array(
		    'post_type'      =>'portfolio',
		    'posts_per_page' => '3',
		    'no_found_rows'  => true,
		    'meta_key'       => '_is_ns_featured_post',
		    'meta_value'     => 'yes'
		));
		if (have_posts()) : while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
			get_template_part( 'includes/portfolio', 'items' );
		endwhile; endif; wp_reset_postdata(); 
	?>
	</section>
	<section class="form__home form__contact" aria-labelledby="section-heading-contatc-form">
		<h2 id="section-heading-contatc-form" class="heading">Let's work together</h2>
		<?php echo gravity_form(1 , false, false, false, '', true, false); ?>
	</section>
</main>
<?php get_footer(); ?>