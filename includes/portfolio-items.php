<?php
$portfolio_thumbnail = ( get_field( 'portfolio_thumbnail' ) ? get_field( 'portfolio_thumbnail' ) : '' );
	if( !empty( $portfolio_thumbnail ) ) :
    	$port_thumb_url = $portfolio_thumbnail['url'];
    	$port_thumb_alt = $portfolio_thumbnail['alt'];
    	$port_thumb_id = $portfolio_thumbnail['ID'];
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('entry project-item grid-item '); ?> aria-labelledby="section-heading-<?php the_ID(); ?>" role="article">
	<a href="<?php the_permalink(); ?>" class="project-item__link grid-link" rel="bookmark">
		<div class="project-item__title grid-item-hover">
			<h2 class="project-item__heading grid-item-text" id="section-heading-<?php the_ID(); ?>">
				<?php the_title(); ?>
			</h2>
		</div>
	</a>
	<img src="<?php echo $port_thumb_url ?>" <?php echo tevkori_get_srcset_string( $port_thumb_id, 'full' ); ?> alt="<?php echo $port_thumb_alt; ?>">
</article>
<?php endif; ?>