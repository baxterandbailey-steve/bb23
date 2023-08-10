<?php

/**
 * Work [case-study]:  text block
 *
 * @package BBWP
 */

$sector_info_title  = get_sub_field('title');
$sector_info_text   = get_sub_field('text');
?>

<div class="text-block">

    <?php if (get_sub_field('text')) : ?>
        <div class="rich-text">
            <div class="title-image">
                <h2 class="title"><?php echo $sector_info_title; ?></h2>
            </div>
            <div class="text">
                <?php echo $sector_info_text; ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if (have_rows('stats')) : ?>
        <ul class="stats">
            <?php while (have_rows('stats')) : the_row();
                $stat = get_sub_field('stat');
                $description = get_sub_field('description'); ?>
                <li>
                    <span class="stat"><?php echo $stat; ?></span>
                    <p class="description"><?php echo $description; ?></p>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>

</div>