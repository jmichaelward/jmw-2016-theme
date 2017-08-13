<?php
/**
 * Template for the static front page.
 *
 * @package jmw-2016
 */

?>

<?php get_header(); ?>

<?php $query = JMW2016\updates_query(); ?>

<main class="site-main">
	<?php if ( $query->have_posts() ) : ?>
		<section class="page__latest-post">
			<header class="section__hdr">
				<h1 class="section__hd"><?php esc_html_e( 'Latest Update', 'jmw2016' ); ?></h1>
			</header>

			<div class="page__wrapper--inner">
				<?php $query->the_post(); ?>
				<?php get_template_part( 'content/loop/latest-post' ); ?>
			</div>
		</section>

		<section class="page__recent-posts">
			<header class="section__hdr">
				<h2 class="section__hd"><?php esc_html_e( 'Other Recent Updates', 'jmw-2016' ); ?></h2>
			</header>

			<div class="page__wrapper--inner">
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<?php get_template_part( 'content/loop/post' ); ?>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>

				<div class="page__all-updates">
					<a href="<?php echo esc_url( get_the_permalink( get_option( 'page_for_posts' ) ) ); ?>"><?php esc_html_e( 'Read All Updates', 'jmw-2016' ); ?></a>
				</div>
			</div>
		</section>

	<?php endif; ?>
</main>

<?php get_footer(); ?>
