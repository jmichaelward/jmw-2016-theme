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

			<div class="pagination pagination--single">
				<ul>
					<li class="next"><?php next_post_link( '%link', '&laquo; %title', true ); ?></li>
					<li class="prev"><?php previous_post_link( '%link', '%title &raquo;', true ); ?></li>
				</ul>
			</div>
		</section>
	<?php endif; ?>
</main>

<?php get_footer(); ?>
