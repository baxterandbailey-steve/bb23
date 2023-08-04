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

            <div class="awards-inner container">
                <ul class="awards">
                    <?php
                    // Check rows existexists.
                    if (have_rows('awards')) :

                        // Loop through rows.
                        while (have_rows('awards')) : the_row();

                            // Load sub field value.
                            $award_name = get_sub_field('name');
                            $award_number = get_sub_field('number'); ?>

                            <li><?php echo $award_name; ?><span>x <?php echo $award_number; ?></span>
                            </li>
                    <?php
                        // End loop.
                        endwhile;
                    // Do something...
                    endif;
                    ?>
                </ul>
                <button class="awards-close" style="color: white;">close me</button>
            </div>
        </div>
    </div>
</div>