<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php $blog_name = get_bloginfo('name'); ?>
	<title><?php echo $blog_name; ?></title>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<nav>
			<?php
				$args = array( 
					'theme_location' => 'primary-menu'
				);
				wp_nav_menu( $args );
			?>
		</nav>
	</header>