<?php get_header(); ?>
	<?php // the_post() sets up WordPress variables so that functions like the_post() can work. ?>
	<?php the_post(); ?>
	<?php if ( has_post_thumbnail () ) : ?>
		<?php the_post_thumbnail(); ?>
	<?php endif; ?>
	<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>
<?php get_footer(); ?>