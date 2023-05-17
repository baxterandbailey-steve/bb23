<?php

/**
 * Template Name: Work
 *
 * @package BBWP
 */

get_header();
$args = new WP_Query(array(
	'post_type' => 'bb_casestudy_cpt',
	'order' => 'DSC'
));

$terms = get_terms(array(
	'taxonomy'   => 'casestudy_taxonomy',
	'hide_empty' => false,
));
?>

<?php get_template_part('_partials/headers/header', 'default'); ?>

<main class="full-width off-white">

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

	<ul class="grid grid-work contain">
		<?php if (have_posts()) :
			while ($args->have_posts()) : $args->the_post(); ?>
				<li class="grid-item <?php the_field('size'); ?>">

					<?php
					$check = get_field('new_work');
					if ($check == true) {
						echo '<span class="new-work">New Project</span>';
					} ?>
					<article>
						<figure data-aos="fade-in">
							<?php $attachment_id = get_field('primary_image');
							$image = wp_get_attachment_image($attachment_id, 'full'); ?>

							<?php echo $image; ?>

							<h3><a href=" <?php the_permalink(); ?>" class="link"><?php the_title(); ?></a></h3>
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