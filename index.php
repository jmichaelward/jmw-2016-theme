<?php
/**
 * The default theme template.
 *
 * @package jmw-2016
 */

?>

<?php get_header(); ?>

<?php $query = JMW2016\updates_query(); ?>

<main class="site-main">
	<header class="section__hdr">
		<h1 class="section__hd"><?php esc_html_e( 'All Updates', 'jmw-2016' ); ?></h1>
	</header>

	<?php if ( $query->have_posts() ) : ?>
		<div class="page__wrapper--inner">
			<?php
			while ( $query->have_posts() ) : $query->the_post();
				if ( in_category( 'updates' ) ) {
					get_template_part( 'content/loop/post' );
				}
			endwhile;
			?>

			<?php JMW2016\pagination( $query ); ?>
		</div><!-- .page-wrapper__inner -->
	<?php endif; ?>
</main><!-- .site-main -->

<?php get_footer(); ?>
