<?php $fc_bcorp = ( get_field( 'fc_bcorp', 'option' ) ? get_field( 'fc_bcorp', 'option' ) : '' ); ?>
<footer class="body__footer body__content" role="contentinfo">
	<div class="col__half">
		<div class="footer_company">
			<a href="<?php echo $fc_bcorp; ?>" target="_blank" class="b-corp">
				<span class="ir">Certified B-Corporation</span>
			</a>
			<div class="col__mid" itemscope itemtype="http://schema.org/PostalAddress">
				<?php get_template_part( 'includes/social', 'icons' ); ?>
				<?php get_template_part( 'includes/company', 'info' ); ?>
			</div>
		</div>
	</div>
	<div class="col__half form__newsletter">
		<?php echo gravity_form(2 , false, false, false, '', true); ?>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>