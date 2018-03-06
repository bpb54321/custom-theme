<?php get_header(); ?>
	<?php the_post(); // Setup the post/page content in a global variable so that we can use other post functions ?>
	<?php if ( has_post_thumbnail () ) : ?>
		<?php the_post_thumbnail(); ?>
	<?php endif; ?>
	<h1><?php the_title(); ?></h1>
	
	<?php the_content(); ?>
<?php get_footer(); ?>