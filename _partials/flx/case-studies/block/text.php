<?php

/**
 * Work [case-study]:  text media block
 *
 * @package BBWP
 */

$sector_info_title  = get_sub_field('title');
$sector_info_text   = get_sub_field('text');
$sector_text_image  = get_sub_field('image');
?>


<div class="text-block">

    <div class="rich-text">
        <div class="title-image">
            <h2 class="title"><?php echo $sector_info_title; ?></h2>
            <?php echo wp_get_attachment_image($sector_text_image, 'full'); ?>
        </div>
        <div class="text">
            <?php echo $sector_info_text; ?>
        </div>
    </div>

    <ul class="stats">
        <?php if (have_rows('stats')) :
            while (have_rows('stats')) : the_row();
                $stat = get_sub_field('stat');
                $description = get_sub_field('description');
        ?>
                <li>
                    <span class="stat"><?php echo $stat; ?></span>
                    <p class="description"><?php echo $description; ?></p>
                </li>
        <?php endwhile;
        endif; ?>
    </ul>

</div>