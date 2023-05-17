<?php

/**
 * Default page
 *
 * @package BBWP
 */

get_header();
get_template_part('_partials/headers/header', 'default'); ?>

<main class="contain">
	<div class="flexible-content">
		<?php get_template_part('_partials/flx/blocks') ?>
	</div>
</main>

<?php get_footer(); ?>