<?php

/**
 * Template Name: Our Work
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

<main class="full-width off-white">
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
		<div class="row-4-4-empty">
			<article>
				<h3><a href="#">Lorem Ipsum Dolar</a></h3>
			</article>
			<article>
				<h3><a href="#">Lorem Ipsum Dolar</a></h3>
			</article>
		</div>

		<div class="row-8-4">
			<article>
				<h3><a href="#">Lorem Ipsum Dolar</a></h3>
			</article>
			<article>
				<h3><a href="#">Lorem Ipsum Dolar</a></h3>
			</article>
		</div>

		<div class="row-empty-8">
			<article>
				<h3><a href="#">Lorem Ipsum Dolar</a></h3>
			</article>
		</div>

		<div class="row-4-tall-empty">
			<article>
				<h3><a href="#">Lorem Ipsum Dolar</a></h3>
			</article>
			<article>
				<h3><a href="#">Lorem Ipsum Dolar</a></h3>
			</article>
		</div>

		<div class="row-empty-4-4">
			<article>
				<h3><a href="#">Lorem Ipsum Dolar</a></h3>
			</article>
			<article>
				<h3><a href="#">Lorem Ipsum Dolar</a></h3>
			</article>
		</div>

		<div class="row-4-4-empty">
			<article>
				<h3><a href="#">Lorem Ipsum Dolar</a></h3>
			</article>
			<article>
				<h3><a href="#">Lorem Ipsum Dolar</a></h3>
			</article>
		</div>

		<div class="row-empty-tall-4">
			<article>
				<h3><a href="#">Lorem Ipsum Dolar</a></h3>
			</article>
			<article>
				<h3><a href="#">Lorem Ipsum Dolar</a></h3>
			</article>
		</div>

		<div class="row-8-empty">
			<article>
				<h3><a href="#">Lorem Ipsum Dolar</a></h3>
			</article>

		</div>
	</div>

	<!-- 'archive list' -->
	<ul class="grid-work our-work__archive contain">
		<?php if (have_posts()) :
			while ($args->have_posts()) : $args->the_post(); ?>
				<li class="grid-item <?php the_field('size'); ?>">

					<?php
					$new_work = get_field('new_work');
					if ($new_work == true) {
						echo '<span class="new-work">New Project</span>';
					} ?>

					<article>
						<figure data-aos="fade-in">
							<?php $attachment_id = get_the_post_thumbnail();
							$image = wp_get_attachment_image($attachment_id, 'full'); ?>

							<?php echo $image; ?>
							<?php the_post_thumbnail(); ?>

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