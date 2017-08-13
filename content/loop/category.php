<article id="post-<?php the_ID(); ?>" <?php post_class( 'jmw-entry' ); ?>>
	<header class="entry__hdr">
		<h1 class="entry__hd">
			<a class="entry__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	</header>

	<div class="entry__content-container">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="entry__image">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'thumbnail' ); ?>
				</a>
			</div>
		<?php endif; ?>

		<?php if ( in_category( 'poetry' ) ) : ?>
			<div class="entry__content">
				<?php the_content(); ?>
			</div>
		<?php endif; ?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->