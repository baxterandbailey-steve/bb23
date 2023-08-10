<?php

/**
 * Case-study: page-top
 * Notes: this is meta content - page-title, service and summary statement / excerpt that appears at the top of the page
 * 
 * @package BBWP
 */

$service = get_field('service');
$title = get_field('case_study_title');
$excerpt = get_field('excerpt');
?>

<section class="page-top contain">

    <?php if (get_field('service')) : ?>
        <span class="meta"><?php echo $service; ?></span>
    <?php endif; ?>

    <h2 class="title"><?php the_title(); ?></h2>

    <?php if (get_field('excerpt')) : ?>
        <p class="excerpt"><?php echo $excerpt; ?></p>
    <?php endif; ?>

</section>