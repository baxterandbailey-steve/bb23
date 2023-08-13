<?php

/**
 * Case-study: special thanks 
 * Notes: this is the special thanks section that sits at the bottom of the page, above more like this / related posts 
 * 
 * @package BBWP
 */

?>


<div class="special-thanks contain">
    <?php if (have_rows('special_thanks')) :
        while (have_rows('special_thanks')) : the_row();
            $thanks_text = get_sub_field('text'); ?>


            <div class="rich-text">
                <h2 class="title">Special Thanks</h2>
                <div class="text">
                    <?php echo $thanks_text; ?>
                    <div class="collaborator">
                        <h3>Collaborators</h3>
                        <ul>
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
            </div>


        <?php endwhile; ?>
    <?php endif; ?>
</div>