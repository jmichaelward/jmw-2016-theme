<?php
/**
 * The default theme template.
 *
 * @package jmw-2016
 */

?>

<?php get_header(); ?>

<?php
$query = new WP_Query( [
	'post_type'      => 'post',
	'category_name'  => 'updates',
	'posts_per_page' => get_option( 'posts_per_page' ),
	'paged'          => get_query_var( 'paged' ) ?: 1,
] );
?>

<main class="site-main">
	<section class="section__hdr">
		<h1 class="section__hd"><?php esc_html_e( 'All Updates', 'jmw-2016' ); ?></h1>
	</section>

	<?php if ( $query->have_posts() ) : ?>
		<div class="page__wrapper--inner">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<?php
				if ( in_category( 'updates' ) ) {
					get_template_part( 'content/loop/post' );
				}
				?>
			<?php endwhile; ?>

			<div class="pagination">
				<?php
				$big = 999999999; // need an unlikely integer.

				echo paginate_links( [ // @codingStandardsIgnoreLine
					'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format'  => '?paged=%#%',
					'current' => max( 1, get_query_var( 'paged' ) ),
					'total'   => $query->max_num_pages,
				] );
				?>
			</div>
		</div>
	<?php endif; ?>
</main>

<?php get_footer(); ?>
