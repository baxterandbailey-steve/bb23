<?php

/**
 * Template Name: Work
 * Notes: This page has three sections filters, curated [tempated] flexible content and archived content
 * 
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

	<section class="filters contain">
		<button class="toggle-filters">Filter</button>

		<div class="sectors-filter">
			<h3>Sector</h3>
			<?php echo do_shortcode('[searchandfilter slug="sector"]'); ?>
		</div>

		<div class="services-filter">
			<h3>Services</h3>
			<?php echo do_shortcode('[searchandfilter slug="service"]'); ?>
		</div>
	</section>

	<div class="our-work__featured contain">
		<?php get_template_part('_partials/flx/our-work/blocks') ?>

		<?php if (have_posts()) : ?>
			<ul class="grid-work our-work__archive">
				<?php while ($args->have_posts()) : $args->the_post(); ?>
					<li>
						<article>
							<figure>
								<?php the_post_thumbnail(); ?>
								<h3 class="title link"><a href="<?php the_permalink(); ?>" class="link"><?php the_title(); ?></a></h3>
								<span class="meta"><?php the_field('meta'); ?>Category</span>
							</figure>
						</article>
					</li>
				<?php endwhile;
				wp_reset_postdata(); ?>
			</ul>
		<?php endif; ?>

</main>
<?php get_footer(); ?>