<?php get_header();
$terms = get_terms(array(
    'taxonomy'   => 'work_taxonomy',
    'hide_empty' => false,
));

$primary_image = get_field('primary_image');
?>

<?php get_template_part('_partials/headers/header', 'default'); ?>

<main class="contain">
    <code>this is single-work.php</code>

    <h2><?php the_title(); ?></h2>
    <img src="<?php echo $primary_image; ?>">

    <ul>
        <?php
        foreach ($terms as $term) {
            $term_link = get_term_link($term);
            echo '<li><a href="' . esc_url($term_link) . '" class="taxo-link">' . $term->name . '</a></li>';
        }
        ?>
    </ul>
</main>

<?php get_footer(); ?>