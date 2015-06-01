<?php 
if ( have_posts() ) : while ( have_posts() ) : the_post();
    if( have_rows( 'fc_about_additional_info' ) ):
        while ( have_rows( 'fc_about_additional_info' ) ) : the_row();
            $fc_about_add_label = ( get_sub_field( 'fc_about_add_label' ) ? get_sub_field( 'fc_about_add_label' ) : '' );
            $fc_about_add_text = ( get_sub_field( 'fc_about_add_text' ) ? get_sub_field( 'fc_about_add_text' ) : '' ); 
?>
            <article class="add-info__item" aria-labelledby="<?php echo strtolower( str_replace ( ' ', '-', $fc_about_add_label ) ); ?>">
                <h2 id="<?php echo strtolower( str_replace ( ' ', '-', $fc_about_add_label ) ); ?>" class="sub-title">
                    <?php echo $fc_about_add_label ?>        
                </h2>
                <p><?php echo $fc_about_add_text ?></p>
            </article>
<?php 
        endwhile; 
    endif; 
endwhile; endif; wp_reset_postdata(); ?>