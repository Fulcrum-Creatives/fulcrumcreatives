<?php
$team_query = new WP_Query(array(
    'post_type'      => 'team-member',
    'posts_per_page' => '5',
    'no_found_rows'  => true
));
if (have_posts()) : while ($team_query->have_posts()) : $team_query->the_post();
	$fc_team_image = ( get_field( 'fc_team_image' ) ? get_field( 'fc_team_image' ) : '' );
	$company_title = ( get_field( 'company_title' ) ? get_field( 'company_title' ) : '' );
	if( $fc_team_image ) :
		$teamimage_url = $fc_team_image['url'];
		$teamimage_alt = $fc_team_image['alt'];
		$teamimage_id = $fc_team_image['ID'];
	endif;
	$name = get_the_title();
?>
	<article class="team__member" aria-labelledby="memeber-<?php echo strtolower( str_replace ( ' ', '-', $name ) ); ?>">
		<img src="<?php echo $teamimage_url; ?>" <?php echo tevkori_get_srcset_string( $teamimage_id, 'full' ); ?> alt="<?php echo $teamimage_alt; ?>" class="member__image">
		<h3 id="memeber-<?php echo strtolower( str_replace ( ' ', '-', $name ) ); ?>" class="member__title">
			<?php the_title(); ?>
		</h3>
		<p><em><?php echo $company_title; ?></em></p>
		<?php the_content(); ?>
	</article>
<?php
endwhile; endif; wp_reset_postdata();
?>
<article class="team__member" aria-labelledby="memeber-you">
	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/team-empty.gif" alt="Question Mark" class="member__image">
	<h3 id="memeber-you" class="member__title">
		<?php _e( 'You?', FCWP_TAXDOMAIN ); ?>
	</h3>
	<p><em>&nbsp;</em></p>
	<p>You could be our missing link. <a href="<?php echo home_url() . '/contact/'; ?>">Apply within</a>.</p>
</article>