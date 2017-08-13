<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry__content-container">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="entry__image">
				<?php the_post_thumbnail( 'medium' ); ?>
			</div>
		<?php endif; ?>

		<div class="entry__content">
			<?php the_content(); ?>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
