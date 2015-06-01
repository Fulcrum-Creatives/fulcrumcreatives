<?php
$art_direction = ( get_field( 'art_direction' ) ? get_field( 'art_direction' ) : '' );
$design = ( get_field( 'design' ) ? get_field( 'design' ) : '' );
$project_manager = ( get_field( 'project_manager' ) ? get_field( 'project_manager' ) : '' );
$photography = ( get_field( 'photography' ) ? get_field( 'photography' ) : '' );
$videography = ( get_field( 'videography' ) ? get_field( 'videography' ) : '' );
$web_development = ( get_field( 'web_development' ) ? get_field( 'web_development' ) : '' );
$marketing_strategy = ( get_field( 'marketing_strategy' ) ? get_field( 'marketing_strategy' ) : '' );
$strategy = ( get_field( 'strategy' ) ? get_field( 'strategy' ) : '' );
$copywriting = ( get_field( 'copywriting' ) ? get_field( 'copywriting' ) : '' );
$partners = ( get_field( 'partners' ) ? get_field( 'partners' ) : '' );
?>
<section class="portfolio__info">
	<section class="col__half" aria-labelledby="portfolio-description">
		<header id="portfolio-description" class="portfolio__heading">
			<h1><?php the_title(); ?></h1>
		</header>
		<article class="portfolio__copy description" role="article">
			<?php the_content(); ?>
		</article>
	</section>
	<section class="col__half" aria-labelledby="portfolio-details">
		<header id="portfolio-details"  class="portfolio__heading">
			<a href="<?php echo home_url() . '/work/'; ?>" class="heading__close">
				<?php _e('close project', FCWP_TAXDOMAIN ); ?>
			</a>
		</header>
		<article class="portfolio__copy details" role="article">
			<?php 
			if($art_direction) :
				echo portfolio_details( 'Creative Direction', $art_direction );
			endif;
			if( $design ) :
				echo portfolio_details( 'Design', $design );
			endif;
			if( $project_manager ) :
				echo portfolio_details( 'Project Manager', $project_manager );
			endif;
			if( $photography ) :
				echo portfolio_details( 'Photography', $photography );
			endif;
			if( $videography ) :
				echo portfolio_details( 'Videography', $videography );
			endif;
			if( $web_development ) :
				echo portfolio_details( 'Web Development', $web_development );
			endif;
			if( $marketing_strategy ) :
				echo portfolio_details( 'Marketing Strategy', $marketing_strategy );
			endif;
			if( $marketing_strategy ) :
				echo portfolio_details( 'Marketing', $marketing_strategy );
			endif;
			if( $strategy ) :
				echo portfolio_details( 'Strategy', $strategy );
			endif;
			if( $copywriting ) :
				echo portfolio_details( 'Copywriting', $copywriting );
			endif;
			if( $partners ) :
				echo portfolio_details( 'Partners', $partners );
			endif;
			?>
		</article>
	</section>
</section>