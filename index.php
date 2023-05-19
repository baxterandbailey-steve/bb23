<?php

/**
 * WP Index fallback 
 *
 * @package BBWP
 */

get_header();
get_template_part('_partials/headers/header', 'default'); ?>

<main class="contain">
	<h1><?php the_title(); ?></h1>
	<div class="flexible-content">
		<?php get_template_part('_partials/flx/blocks') ?>
	</div>
</main>

<?php get_footer(); ?>