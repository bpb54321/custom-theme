<?php get_header(); ?>
	<h1><?php the_title(); ?></h1>
	<?php
		// Setup the post/page content in a global variable so that we can use other post functions
		the_post();
		the_content();	
	?>
<?php get_footer(); ?>