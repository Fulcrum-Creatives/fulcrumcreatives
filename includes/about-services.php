<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
	$fc_about_focus = ( get_field( 'fc_about_focus' ) ? get_field( 'fc_about_focus' ) : '' );
	$fc_about_history = ( get_field( 'fc_about_history' ) ? get_field( 'fc_about_history' ) : '' );
	$fc_about_approach = ( get_field( 'fc_about_approach' ) ? get_field( 'fc_about_approach' ) : '' );
	$fc_about_services = ( get_field( 'fc_about_services' ) ? get_field( 'fc_about_services' ) : '' );
	?>
	<article class="col__half odd" aria-labelledby="company-focus">
		<h2 id="company-focus" class="company__title">
			<?php _e( 'Focus', FCWP_TAXDOMAIN ); ?>		
		</h2>
		<div class="company__text">
			<?php echo $fc_about_focus ; ?>
		</div>
	</article>
	<article class="col__half even" aria-labelledby="company-history">
		<h2 id="company-history" class="company__title">
			<?php _e( 'History', FCWP_TAXDOMAIN ); ?>		
		</h2>
		<div class="company__text">
			<?php echo $fc_about_history ; ?>
		</div>
	</article>
	<article class="col__half odd" aria-labelledby="company-approach">
		<h2 id="company-approach" class="company__title">
			<?php _e( 'Approach', FCWP_TAXDOMAIN ); ?>		
		</h2>
		<div class="company__text">
			<?php echo $fc_about_approach ; ?>
		</div>
	</article>
	<article class="col__half even" aria-labelledby="company-services">
		<h2 id="company-services" class="company__title">
			<?php _e( 'Services', FCWP_TAXDOMAIN ); ?>		
		</h2>
		<div class="company__text">
			<?php echo $fc_about_services ; ?>
		</div>
	</article>
<?php endwhile; endif; wp_reset_postdata(); ?>