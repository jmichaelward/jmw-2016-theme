<?php
/**
 * Template for post archives.
 *
 * @package jmw-2016
 */

?>

<?php get_header(); ?>

<main class="site-main">
	<header class="section__hdr">
		<h1 class="section__hd"><?php echo single_cat_title(); ?></h1>
	</header>

	<?php if ( have_posts() ) : ?>
		<section class="page__wrapper--inner">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( ! in_category( 'updates' ) ? 'content/loop/category' : 'content/loop/post' ); ?>
			<?php endwhile; ?>

			<?php JMW2016\pagination_numeric(); ?>
		</section>
	<?php endif; ?>
</main>

<?php get_footer(); ?>
