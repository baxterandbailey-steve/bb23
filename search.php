<?php get_header(); ?>
<?php get_template_part('_partials/headers/header', 'default'); ?>

<main class="contain">

  <?php if (get_search_query()) : ?>
    <?php printf(esc_html__('Search Results for: %s'), '<span>' . get_search_query() . '</span>'); ?>
    <!-- <strong>Search results for: <?php get_search_query(); ?></strong> -->
  <?php endif; ?>

  <div class="search-result-listing">
    <?php if (get_search_query()) : ?>
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
      <?php endwhile;
      endif; ?>
    <?php endif; ?>
  </div>

</main>

<?php get_footer(); ?>