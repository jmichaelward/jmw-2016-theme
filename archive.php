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

			<div class="pagination pagination--numeric">
				<?php
				global $wp_query;

				$big = 999999999; // need an unlikely integer.

				echo apply_filters( 'derp', paginate_links( [ // @codingStandardsIgnoreLine
					'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format'    => '?paged=%#%',
					'current'   => max( 1, get_query_var( 'paged' ) ),
					'total'     => $wp_query->max_num_pages,
					'show_all'  => false,
					'prev_next' => true,
					'prev_text' => '&laquo; Newer',
					'next_text' => 'Older &raquo;',
				] ) );
				?>
			</div>
		</section>
	<?php endif; ?>
</main>

<?php get_footer(); ?>
