<?php
/**
 * The default page template.
 *
 * @package jmw-2016
 */

?>

<?php get_header(); ?>

<main class="site-main">
	<header class="section__hdr">
		<h1 class="section__hd"><?php the_title(); ?></h1>
	</header>

	<?php if ( have_posts() ) : ?>
		<section class="page__wrapper--inner">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content/page/default' ); ?>
			<?php endwhile; ?>
		</section>
	<?php endif; ?>
</main>

<?php get_footer(); ?>
