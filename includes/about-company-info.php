<section class="about__company-info body__content about-page" aria-labelledby="company-information">
    <h2 id="company-information" class="sub-title">
        <?php _e( 'Hello! From Columbus, Ohio', FCWP_TAXDOMAIN ); ?>        
    </h2>
    <?php
    $fc_address      = ( get_field( 'fc_address', 'option' ) ? get_field( 'fc_address', 'option' ) : '' );
    $fc_apt_suite    = ( get_field( 'fc_apt_suite', 'option' ) ? get_field( 'fc_apt_suite', 'option' ) : '' );
    $fc_city         = ( get_field( 'fc_city', 'option' ) ? get_field( 'fc_city', 'option' ) : '' );
    $fc_state        = ( get_field( 'fc_state', 'option' ) ? get_field( 'fc_state', 'option' ) : '' );
    $fc_zip_code     = ( get_field( 'fc_zip_code', 'option' ) ? get_field( 'fc_zip_code', 'option' ) : '' );
    $fc_phone_number = ( get_field( 'fc_phone_number', 'option' ) ? get_field( 'fc_phone_number', 'option' ) : '' );
    $fc_name         = get_bloginfo( 'name' );
    $fc_email        = ( get_field( 'fc_email', 'option' ) ? get_field( 'fc_email', 'option' ) : '' );
    ?>
    <address class="about__address col__half">
        <?php 
        echo '<span itemprop="name" class="about__comp-name">' . $fc_name . '</span><br/>' .
             '<a href="https://www.google.com/maps/place/243+N+5th+St+%23430,+Columbus,+OH+43215" target="_blank"/>' .
             '<span itemprop="streetAddress">' . $fc_address . '<br/>' . $fc_apt_suite . '</span> ' . 
             '<br/><span itemprop="addressLocality">' . $fc_city . '</span> ' . 
             '<span itemprop="addressRegion">' . $fc_state . '</span> ' . 
             '<span itemprop="postalCode">' . $fc_zip_code . '</span>' .
             '</a>'; 
        ?>
    </address>
    <div class="about__contact col__half">
        <?php echo '<p itemprop="email"><a href="mailto:' . antispambot($fc_email) . '">' . antispambot($fc_email) . '</a></p>'; ?>
        <?php echo '<a href="tel:' . $fc_phone_number . '" aria-lable="Phone Number" itemprop="telephone">' . $fc_phone_number . '</a>'; ?>
    </div>
</section>