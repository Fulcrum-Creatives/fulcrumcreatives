<?php get_header(); ?>
<main id="main" class="body__content entry__blog entry__single" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="edit">
			<?php edit_post_link( __( 'Edit', FCWP_TAXDOMAIN ), '<span class="edit__link">', '</span>' ); ?>
		</div>
		<header class="entry__header">
			<div class="entry__meta">
				<?php fcwp_published_date( array( 'published_text' => '', 'is_linked_published' => false, ) ); ?> | <em><?php fcwp_display_author( array( 'text' => '' )); ?></em>
			</div>
			<?php the_title( '<h1 class="entry__title" id="section-heading-<?php the_ID(); ?>">', '</h1>' ); ?>
		</header>
	<?php endwhile; endif; wp_reset_postdata(); ?>
    <aside class="blog__aside">
    </aside>
    <section class="entry__body">
	    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    		<article id="post-<?php the_ID(); ?>" <?php post_class('entry single'); ?> aria-labelledby="section-heading-<?php the_ID(); ?>" role="article">
    			<?php fcwp_list_terms( array( 'container' => 'div', 'text' => 'Categorized: ', 'text_plural' => 'Categorized: ', 'sep' => ' ' ) ); ?>
				<?php get_template_part( 'includes/image', 'featured' ); ?>
				<section class="entry__content">
					<?php
						the_content();
						if( wp_link_pages() ) :
							fcwp_link_pages();
						endif;
					?>
				</section>
				<footer class="entry__footer">
					<?php fcwp_posts_pagination(); ?>
					<div class="related-posts">
						<h2>Similar blog posts from our archives:</h2>
						<?php display_related_posts_via_taxonomies(); ?>
					</div>
				</footer>
			</article>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</section>
</main>
<?php get_footer(); ?>