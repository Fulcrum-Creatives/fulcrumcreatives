<?php
if( is_singular() && 'portfolio' == get_post_type() ) :
	// get portfolio hero image
	$fc_hero_image      = ( get_field( 'portfolio_hero_image' ) ? get_field( 'portfolio_hero_image' ) : '' );
		if( $fc_hero_image ) :
			$heroimage_url = $fc_hero_image['url'];
			$heroimage_alt = $fc_hero_image['alt'];
			$heroimage_id = $fc_hero_image['ID'];
		endif;
	?>
	<div class="hero-image">
		<figure>
			<img src="<?php echo $heroimage_url; ?>" <?php echo tevkori_get_srcset_string( $heroimage_id, 'full' ); ?> alt="<?php echo $heroimage_alt; ?>" class="hero-image__image">
		</figure>
	</div>

<?php else :
	// get homepage hero image
	$fc_hero_image      = ( get_field( 'fc_hero_image' ) ? get_field( 'fc_hero_image' ) : '' );
		$fc_hero_image_text = ( get_field( 'fc_hero_image_text' ) ? get_field( 'fc_hero_image_text' ) : '' );
		$fc_hero_link_text  = ( get_field( 'fc_hero_link_text' ) ? get_field( 'fc_hero_link_text' ) : '' );
		$hero_link_url      = ( get_field( 'hero_link_url' ) ? get_field( 'hero_link_url' ) : '' );
		if( $fc_hero_image ) :
			$heroimage_url = $fc_hero_image['url'];
			$heroimage_alt = $fc_hero_image['alt'];
			$heroimage_id = $fc_hero_image['ID'];
		endif;
	?>
	<div class="hero-image home">
		<figure>
			<?php if( !is_home() ) : ?>
			<!-- <img src="<?php /*echo $heroimage_url;*/ ?>" <?php /*echo tevkori_get_srcset_string( $heroimage_id, 'full' );*/ ?> alt="<?php /*echo $heroimage_alt;*/ ?>" class="hero-image__image"> -->
		<?php endif; ?>
			<figcaption class="hero-image__caption">
				<h1 class="hero-image__heading"><?php echo $fc_hero_image_text; ?></h1>
				<a href="<?php echo $hero_link_url; ?>" class="hero-image__link"><?php echo $fc_hero_link_text; ?></a>
			</figcaption>
		</figure>
	</div>

<?php endif;