<?php get_header();

$terms = get_terms(array(
    'taxonomy'   => 'work_taxonomy',
    'hide_empty' => false,
));

?>
<?php get_template_part('_partials/headers/header', 'default'); ?>

<main class="contain">
    <div class="page-top">
        <h2>Taxonomy</h2>
        <ul class="list-taxonomies">
            <?php
            foreach ($terms as $term) {
                $term_link = get_term_link($term);
                echo '<li><a href="' . esc_url($term_link) . '" class="taxo-link">' . $term->name . '</a></li>';
            }
            ?>
        </ul>
    </div>

    <ul class="grid grid-work">
        <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <li class="grid-item <?php the_field('size'); ?>">
                    <article>
                        <figure data-aos="fade-in">
                            <?php $attachment_id = get_field('primary_image');
                            $image = wp_get_attachment_image($attachment_id, 'full'); ?>
                            <?php echo $image; ?>
                        </figure>
                        <?php the_post_thumbnail(); ?>
                        <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </article>
                </li>
        <?php endwhile;
        endif; ?>
    </ul>
</main>

<?php get_footer(); ?>