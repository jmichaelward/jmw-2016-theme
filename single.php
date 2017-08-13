<?php
/**
 * The default post template.
 *
 * @package jmw-2016
 */

?>

<?php get_header(); ?>

<main class="site-main">
	<div class="section__hdr">
		<span class="section__hd section__hd--category"><?php the_category( ',' ); ?></span>
	</div>

	<?php if ( have_posts() ) : ?>
		<section class="page__wrapper--inner">
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( in_category( [
					'illustrations',
					'photos',
				] ) ? 'content/single/image' : 'content/default' );
			endwhile;
			?>

			<?php JMW2016\pagination_single(); ?>
		</section>
	<?php endif; ?>
</main>

<?php get_footer(); ?>
