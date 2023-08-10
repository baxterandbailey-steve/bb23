<?php

/**
 * What we do: testimonial block
 *
 * @package BBWP
 */

$testimonial_author = get_sub_field('author');
$testimonial_role = get_sub_field('role');
$testimonial_organisation = get_sub_field('organisation');
$testimonial_quote = get_sub_field('quote');

?>

<div class="testimonial contain">

    <div class="lh-col">
        <span class="author"><?php echo $testimonial_author; ?></span>

        <?php if (get_sub_field('role')) : ?>
            <span class="role"><?php echo $testimonial_role; ?></span>
        <?php endif ?>

        <?php if (get_sub_field('organisation')) : ?>
            <span class="organisation"><?php echo $testimonial_organisation; ?></span>
        <?php endif ?>
    </div>

    <p class="quote"><?php echo $testimonial_quote; ?></p>

</div>