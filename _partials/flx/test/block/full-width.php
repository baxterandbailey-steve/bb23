<?php

/**
 * Test: full-width block
 *
 * @package BBWP
 */

$full_width_image = get_sub_field('image');
?>

<div class="contain">
    <h1>full width..</h1>
    <figure class>
        <?php echo wp_get_attachment_image($full_width_image, 'full'); ?>
    </figure>
</div>