<?php
$fc_facebook  = ( get_field( 'fc_facebook', 'option' ) ? get_field( 'fc_facebook', 'option' ) : '' );
$fc_linkedin  = ( get_field( 'fc_linkedin', 'option' ) ? get_field( 'fc_linkedin', 'option' ) : '' );
$fc_twitter   = ( get_field( 'fc_twitter', 'option' ) ? get_field( 'fc_twitter', 'option' ) : '' );
$fc_instagram = ( get_field( 'fc_instagram', 'option' ) ? get_field( 'fc_instagram', 'option' ) : '' );
$fc_email     = ( get_field( 'fc_email', 'option' ) ? get_field( 'fc_email', 'option' ) : '' );
?>
<div class="social-icons">
	<a href="<?php echo $fc_facebook; ?>" class="social-icons__facebook">
		<i class="fa fa-facebook-official">
			<span class="ir">Facebook</span>
		</i>
	</a>
	<a href="<?php echo $fc_linkedin; ?>" class="social-icons__linkedin">
		<i class="fa fa-linkedin-square">
			<span class="ir">LinkedIn</span>
		</i>
	</a>
	<a href="<?php echo $fc_twitter; ?>" class="social-icons__twitter">
		<i class="fa fa-twitter-square">
			<span class="ir">Twitter</span>
		</i>
	</a>
	<a href="<?php echo $fc_instagram; ?>" class="social-icons__instagram">
		<i class="fa fa-instagram">
			<span class="ir">Instagram</span>
		</i>
	</a>
	<a href="mailto:<?php echo antispambot($fc_email); ?>" class="social-icons__email">
		<i class="fa fa-envelope">
			<span class="ir" itemprop="email"><?php echo antispambot($fc_email); ?></span>
		</i>
	</a>
</div>