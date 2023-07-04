<?php

/**
 * Archive listings page
 *
 * @package BBWP
 */

get_header();
get_template_part('_partials/headers/header', 'work'); ?>

<main class="contain">
	<code>this is archive.php</code>
	<ul class="grid">
		<?php if (have_posts()) :
			while (have_posts()) : the_post(); ?>
				<li class="grid-item">
					<article class="grid-item <?php the_field('size'); ?>">
						<figure data-aos="fade-in">
							<?php
							$attachment_id = get_post_thumbnail_id();
							echo wp_get_attachment_image($attachment_id, 'full');
							?>
						</figure>
						<h3><a href="<?php the_permalink(); ?>" class="link"><?php the_title(); ?></a></h3>
						<span class="meta"><?php the_field('meta'); ?></span>
					</article>
				</li>
		<?php endwhile;
		endif; ?>
	</ul>
</main>

<?php get_footer(); ?>