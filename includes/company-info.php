<?php
$fc_address      = ( get_field( 'fc_address', 'option' ) ? get_field( 'fc_address', 'option' ) : '' );
$fc_apt_suite    = ( get_field( 'fc_apt_suite', 'option' ) ? get_field( 'fc_apt_suite', 'option' ) : '' );
$fc_city         = ( get_field( 'fc_city', 'option' ) ? get_field( 'fc_city', 'option' ) : '' );
$fc_state        = ( get_field( 'fc_state', 'option' ) ? get_field( 'fc_state', 'option' ) : '' );
$fc_zip_code     = ( get_field( 'fc_zip_code', 'option' ) ? get_field( 'fc_zip_code', 'option' ) : '' );
$fc_phone_number = ( get_field( 'fc_phone_number', 'option' ) ? get_field( 'fc_phone_number', 'option' ) : '' );
$fc_name         = get_bloginfo( 'name' );
?>
<address class="footer__address">
	<?php 
	echo '<a href="https://www.google.com/maps/place/243+N+5th+St+%23430,+Columbus,+OH+43215" target="_blank"/>' .
		 '<span itemprop="streetAddress">' . $fc_address . ', ' . $fc_apt_suite . '</span> ' . 
		 '<br class="mobile-br"/><span itemprop="addressLocality">' . $fc_city . '</span> ' . 
		 '<span itemprop="addressRegion">' . $fc_state . '</span> ' . 
		 '<span itemprop="postalCode">' . $fc_zip_code . '</span>' .
		 '</a>'; 
	?>
</address>
<div class="footer__info">
	<?php echo ' <span itemprop="name">&copy; ' . date('Y')  . ' ' . $fc_name . '</span><br class="mobile-br"/>'; ?>
	<?php echo '<a href="tel:' . $fc_phone_number . '" aria-lable="Phone Number" itemprop="telephone">' . $fc_phone_number . '</a>'; ?>
</div>