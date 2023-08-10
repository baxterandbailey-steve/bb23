<?php

/**
 * Work [case-study]: special thanks block
 *
 * @package BBWP
 */


$sector_info_text   = get_sub_field('text');
$sector_text_image  = get_sub_field('image');
?>




<div class="text-block">

    <div class="rich-text">
        <div class="title-image">

            <h2 class="title">Special Thanks</h2>

            <?php echo wp_get_attachment_image($sector_text_image, 'full'); ?>
        </div>
        <div class="text">
            <?php echo $sector_info_text; ?>
        </div>
    </div>

    <div class="collaborators-block">

        <h3>Collaborators</h3>php

        <ul class="collaborators">
            <?php if (have_rows('collaborators')) :
                while (have_rows('collaborators')) : the_row();
                    $name = get_sub_field('name');
                    $url = get_sub_field('url'); ?>
                    <li>
                        <span class="name"><a href="<?php echo $url; ?>"><?php echo $name; ?></a></span>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>

</div>