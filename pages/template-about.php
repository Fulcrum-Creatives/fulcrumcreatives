<?php
/*
Template Name: About
*/
get_header();
?>
<main id="main" role="main">
    <div class="body__content about-page">
    	<?php get_template_part( 'includes/about', 'heading' ); ?>
    	<section class="about__services">
    	    <?php get_template_part( 'includes/about', 'services' ); ?>
        </section>
        <section class="about__team" aria-labelledby="team-members">
        	<?php get_template_part( 'includes/about', 'team-heading' ); ?>
        	<?php get_template_part( 'includes/about', 'team' ); ?>
        </section>
        <section class="about__add-info">
        	<?php get_template_part( 'includes/about', 'add-info' ); ?>
        </section>
    </div>
    <div id="footer-map-canvas" class="about__map" data-address="243 North 5th Street Columbus, Ohio 43215"></div>
    <?php get_template_part( 'includes/about', 'company-info' ); ?>
</main>
<?php get_footer(); ?>