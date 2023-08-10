<?php

/**
 * Who we are: awards [overlay] block
 *
 * @package BBWP
 */

?>

<div class="awards-container">
    <div class="awards-cta">
        <!-- <button class="awards-toggle">View full list of awards</button> -->
        <div class="awards-overlay">

            <?php if (have_rows('awards')) : ?>
                <div class="awards-inner container">
                    <ul class="awards">
                        <?php while (have_rows('awards')) : the_row();
                            $award_name = get_sub_field('name');
                            $award_number = get_sub_field('number'); ?>

                            <li><?php echo $award_name; ?><span>x <?php echo $award_number; ?></span></li>
                        <?php endwhile; ?>
                    </ul>
                    <button class="awards-close" style="color: white;">close me</button>
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>