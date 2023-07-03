<?php

/**
 * Work text media block
 *
 * @package BBWP
 */

$sector_info_title  = get_sub_field('title');
$sector_info_text   = get_sub_field('text');
?>

<section class="rich-text">
    <div class="container__centered">
        <h2 class="title"><?php echo $sector_info_title; ?></h2>
        <div class="text">
            <?php echo $sector_info_text; ?>
        </div>
    </div>
</section>