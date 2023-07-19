<?php

/**
 * Work [case-study]:  text media block
 *
 * @package BBWP
 */

$sector_info_title  = get_sub_field('title');
$sector_info_text   = get_sub_field('text');
?>


<div class="text-block">

    <div class="rich-text">
        <h2 class="title"><?php echo $sector_info_title; ?></h2>
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
                    <span class="description"><?php echo $description; ?></span>
                </li>
        <?php endwhile;
        endif; ?>
    </ul>

</div>