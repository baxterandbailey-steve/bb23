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

$terms = get_terms(array(
	'taxonomy'   => 'work_taxonomy',
	'hide_empty' => false,
));
?>

<?php get_template_part('_partials/headers/header', 'default'); ?>

<main class="our-work">
	<!-- page titling and taxonomy listing -->
	<div class="page-top">
		<h2 class="page-title"><?php the_title(); ?></h2>
		<ul class="list-taxonomies">
			<?php
			foreach ($terms as $term) {
				$term_link = get_term_link($term);
				echo '<li><a href="' . esc_url($term_link) . '" class="taxo-link">' . $term->name . '</a></li>';
			}
			?>
		</ul>
	</div>

	<!-- featured work -->
	<div class="our-work__featured contain">

		<?php get_template_part('_partials/flx/test/blocks') ?>

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

								<h3 class="title link"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
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