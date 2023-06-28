<?php
$sector_info_title  = get_sub_field('title');
$sector_info_text   = get_sub_field('text');
?>

<section class="sector-info">
    <div class="container">
        <div class="lh-col">
            <h2><?php echo $sector_info_title; ?></h2>
        </div>

        <div class="rh-col">
            <?php echo $sector_info_text; ?>
        </div>
    </div>
</section>