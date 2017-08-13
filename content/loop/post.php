<article id="<?php the_ID(); ?>" <?php post_class( 'entry--excerpt' ); ?>>
	<header class="entry__hdr entry__hdr--excerpt">
		<h1 class="entry__hd entry__hd--excerpt">
			<a class="entry__link" href="<?php the_permalink(); ?>"
			   title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</h1>
	</header><!-- .entry__hdr -->

	<div class="entry__content-container">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="entry__image">
				<?php the_post_thumbnail( 'medium' ); ?>
			</div>
		<?php endif; ?>

		<div class="entry__content">
			<?php the_excerpt(); ?>
		</div>
	</div><!-- .entry__content-container -->
</article><!-- #post-<?php the_ID(); ?> -->
