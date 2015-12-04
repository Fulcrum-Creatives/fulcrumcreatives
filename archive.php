<?php get_header(); ?>
<main id="main" class="body__content entry__blog" role="main">
    <?php if ( have_posts() ) : ?>
    	<header class="entry__header">
    		<?php fcwp_archive_title(); ?>
		</header>
    <?php endif; ?>
    <?php get_template_part( 'template-parts/content' ); ?>
</main>
<?php get_footer(); ?>
<?php get_footer(); ?>