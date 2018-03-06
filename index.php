<?php get_header(); ?>
	<?php // the_post() sets up WordPress variables so that functions like the_post() can work. ?>
	<?php the_post(); ?>
	<div class="hero">
		<?php if ( has_post_thumbnail () ) : ?>
			<?php 
				$image_attributes = [
					'class' => 'hero__image',
				];
				the_post_thumbnail('full', $image_attributes );
			?>
			<div class="hero__overlay">
				<h1 class="hero__heading"><?php the_title(); ?></h1>
			</div>
		<?php endif; ?>
	</div>
	<?php the_content(); ?>
<?php get_footer(); ?>