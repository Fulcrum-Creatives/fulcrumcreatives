<aside class="blog__aside">
	<ul class="aside__archives">
    	<?php
    	wp_list_categories( array( 'title_li' => '' ) );
  		wp_get_archives( array( 'type' => 'yearly' ) );
    	?>
	</ul>
</aside>
<section class="entry__list">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?> aria-labelledby="section-heading-<?php the_ID(); ?>" role="article">
			<a class="entry__link" href="<?php the_permalink(); ?>">
				<header class="entry__header">
					<!-- <div class="entry__meta">
						<?php /*fcwp_published_date( array( 'published_text' => '', 'is_linked_published' => false, ) );*/ ?>
					</div> -->
					<h1 class="entry__title" id="section-heading-<?php the_ID(); ?>">
						<?php the_title(); ?>
					</h1>
					<div class="entry__sub-title">
						<?php
						$post_tagline = ( get_field( 'post_tagline' ) ? get_field( 'post_tagline' ) : '' );
						echo $post_tagline;
						?>
					</div>
				</header>
			</a>
		</article>
    <?php 
    endwhile; 
    	fcwp_pagination('split', array('prelabel' => 'Newer Posts', 'nextlabel' => 'Older Posts' ) );
    else:
    	get_template_part( 'template-parts/content', 'none' );
	endif; wp_reset_postdata();
    ?>
</section>