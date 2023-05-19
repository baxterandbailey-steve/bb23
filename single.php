<?php

/**
 * Default single post page
 *
 * @package BBWP
 */

get_header(); ?>
<?php get_template_part('_partials/headers/header', 'default'); ?>

<main class="contain">
	<code>this is single.php</code>
	<h1><?php the_title(); ?></h1>
	<?php if (have_posts()) :
		while (have_posts()) : the_post(); ?>
			<h3><?php the_title(); ?></h3><br>
			<figure>
				<?php
				$attachment_id = get_post_thumbnail_id();
				echo wp_get_attachment_image($attachment_id, 'full');
				?>
			</figure>
	<?php endwhile;
	endif; ?>

</main>

<?php get_footer(); ?>