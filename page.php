<?php

/**
 * Default page
 *
 * @package BBWP
 */

get_header();
get_template_part('_partials/headers/header', 'default'); ?>

<main class="contain">
	<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>
</main>

<?php get_footer(); ?>