<?php

/**
 * Template Name: Work
 *
 * @package BBWP
 */

get_header();
$args = new WP_Query(array(
	'post_type' => 'bbwp_cpt_work',
	'order' => 'DSC'
));

?>

<?php get_template_part('_partials/headers/header', 'default'); ?>

<main class="our-work">

	<!--
		<div class="filters-test contain">
			<?php echo do_shortcode('[searchandfilter slug="test"]'); ?>
		</div>
	-->


	<!-- featured work -->
	<div class="our-work__featured contain">

		<?php get_template_part('_partials/flx/our-work/blocks') ?>

		<!-- 'archive list' -->
		<ul class="grid-work our-work__archive">
			<?php if (have_posts()) :
				while ($args->have_posts()) : $args->the_post(); ?>
					<li class="<?php the_field('size'); ?>">

						<?php
						$new_work = get_field('new_work');
						if ($new_work == true) {
							echo '<span class="new-work">New Project</span>';
						} ?>

						<article>
							<figure data-aos="fade-in">
								<?php the_post_thumbnail(); ?>

								<h3 class="title link"><a href="<?php the_permalink(); ?>" class="link"><?php the_title(); ?></a></h3>
								<span class="meta"><?php the_field('meta'); ?></span>
							</figure>
						</article>
					</li>

			<?php endwhile;
				wp_reset_postdata();
			endif; ?>
		</ul>

</main>

<?php get_footer(); ?>