<?php get_header(); ?>
<?php get_template_part('_partials/headers/header', 'default'); ?>

<main class="contain">
	<code>this is home.php</code><br>

	<h2>posts</h2>
	<ul clas="grid">
		<?php if (have_posts()) :
			while (have_posts()) : the_post(); ?>
				<li>
					<article class="grid-item">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<figure>
							<?php
							$attachment_id = get_post_thumbnail_id();
							echo wp_get_attachment_image($attachment_id, 'full');
							?>
						</figure>
						<span class="post-date"><?php the_date(); ?></span>
						<span class="post-author"><?php the_author(); ?></span>
					</article>
				</li>
		<? endwhile;
		endif; ?>
	</ul>

	<h2>categories</h2>
	<ul class="categories-active">
		<?php wp_list_categories(array(
			'title_li' => '',
			'order' => "ASC",
			'exclude'  => 1
		)); ?>
	</ul>
</main>

<?php the_posts_pagination(); ?>
<?php get_footer(); ?>