<?php 
if ( have_posts() ) : while ( have_posts() ) : the_post();
	$post_tagline = ( get_field( 'post_tagline' ) ? get_field( 'post_tagline' ) : '' ); 
?>
	<h1 id="company-information" class="sub-title">
		<?php echo $post_tagline; ?>		
	</h1>
<?php endwhile; endif; wp_reset_postdata(); ?>