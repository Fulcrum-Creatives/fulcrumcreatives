<?php
/*
Template Name: Contact
*/
get_header();
?>
<main id="main" role="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<section class="form__contact" aria-labelledby="section-heading-contatc-form">
			<?php the_content(); ?>
		</section>
	<?php endwhile; endif; wp_reset_query(); ?>
</main>
<?php get_footer(); ?>