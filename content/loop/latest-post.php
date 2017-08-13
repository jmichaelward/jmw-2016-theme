<article id="<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry__hdr">
		<h1 class="entry__hd">
			<?php the_title(); ?>
		</h1>

		<div class="entry__meta"><?php the_time( 'F j, Y' ); ?></div>
	</header><!-- .entry__hdr -->

	<div class="entry__content-container">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="entry__image">
				<?php the_post_thumbnail( 'medium' ); ?>
			</div>
		<?php endif; ?>

		<div class="entry__content">
			<?php the_content(); ?>
		</div>
	</div><!-- .entry__content-container -->
</article><!-- #post-<?php the_ID(); ?> -->
