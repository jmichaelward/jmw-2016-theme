<?php
/**
 * Template for the site footer.
 */
?>

</div><!-- #content -->

<footer class="site-footer page__wrapper--inner">
	<div class="site-copyright">
		<?php
		esc_html_e( 'All Content &copy;', 'jmw2016' );
		echo esc_html( date( 'Y' ) . ' ' . get_bloginfo( 'name' ) );
		?>
	</div>
</footer>

</div><!-- .page-wrapper -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
