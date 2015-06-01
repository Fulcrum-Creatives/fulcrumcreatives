<section class="portfolio__images">
	<?php 
	if (have_posts()) : while (have_posts()) : the_post();
    $items = array();
    $portfolio_gallery_image = ( get_field( 'portfolio_gallery_image' ) ? get_field( 'portfolio_gallery_image' ) : '' );
    $portfolio_video = ( get_field( 'portfolio_video' ) ? get_field( 'portfolio_video' ) : '' );
    if ( $portfolio_gallery_image ):
      while( the_repeater_field('portfolio_gallery_image' ) ):
    	$portfolio_images = ( get_sub_field( 'portfolio_images' ) ? get_sub_field( 'portfolio_images' ) : '' );
    	if( $portfolio_images ) :
			$portfolio_images_url = $portfolio_images['url'];
			$portfolio_images_alt = $portfolio_images['alt'];
			$items[] = '<article class="col__half">
							<img src="'.$portfolio_images_url.'" alt="'.$portfolio_images_alt.'">
						</article>';
        endif;
      endwhile;
    endif;
    if ( $portfolio_video ):
		while( the_repeater_field('portfolio_video' ) ):
			$video_source = ( get_sub_field( 'video_source' ) ? get_sub_field( 'video_source' ) : '' );
			$video_url = ( get_sub_field( 'video_url' ) ? get_sub_field( 'video_url' ) : '' );
			$video_title = ( get_sub_field( 'video_title' ) ? get_sub_field( 'video_title' ) : '' );
			if( $video_source == 'Vimeo' && $video_url != '' ){
				$items[] = '<article class="col__half video-wrapper [vimeo, widescreen]">
								<iframe src="http://player.vimeo.com/video/'.$video_url.'?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff&amp" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen title="' . $video_title . '"></iframe>
							</article>';
			}
			if( $video_source == 'YouTube' && $video_url != '' ){
				$items[] = '<article class="col__half video-wrapper">
								<iframe src="//www.youtube.com/embed/'.$video_url.'?&hd=1&ap=%2526fmt%3D18" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen title="' . $video_title . '"></iframe>
							</article>';
			}
		endwhile;
    endif;
    foreach( $items as $item ) :
      echo $item;
    endforeach;
	?>
	<?php endwhile; endif; wp_reset_postdata(); ?>
</section>