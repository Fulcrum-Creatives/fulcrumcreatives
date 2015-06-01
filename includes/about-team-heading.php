<?php 
if ( have_posts() ) : while ( have_posts() ) : the_post();
	$fc_about_team_header = ( get_field( 'fc_about_team_header' ) ? get_field( 'fc_about_team_header' ) : '' ); 
?>
	<h2 id="company-information" class="sub-title">
		<?php echo $fc_about_team_header; ?>		
	</h2>
<?php endwhile; endif; wp_reset_postdata(); ?>