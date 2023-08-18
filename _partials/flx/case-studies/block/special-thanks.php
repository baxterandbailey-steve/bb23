<?php

/**
 * Work [case-study]: special thanks block
 *
 * @package BBWP
 */

$sector_text_image  = get_sub_field('image');
$sector_info_text   = get_sub_field('text');

?>

<div class="text-block">

    <div class="rich-text">
        <div class="title-image">
            <h2 class="title">Special Thanks</h2>
            <?php if (get_sub_field('image')) : ?>
                <?php echo wp_get_attachment_image($sector_text_image, 'full'); ?>
            <?php endif; ?>
        </div>
        <div class="text">
            <?php if (get_sub_field('text')) : ?>
                <?php echo $sector_info_text; ?>
            <?php endif; ?>



            <?php if (have_rows('collaborators')) : ?>
                <div class="collaborators-block">
                    <h3 class="title">Collaborators</h3>
                    <ul class="collaborators">
                        <?php while (have_rows('collaborators')) : the_row();
                            $name = get_sub_field('name');
                            $url = get_sub_field('url'); ?>

                            <li><a href="<?php echo $url; ?>" class="name"><?php echo $name; ?></a></li>

                        <?php endwhile; ?>
                    </ul>
                </div>
            <?php endif; ?>

        </div>

    </div>
</div>