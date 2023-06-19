<?php
$process_section_title = get_sub_field('section_title');
?>

<section class="processes">
    <div class="inner contain">
        <h2 class="title"><?php echo $process_section_title; ?></h2>

        <?php if (have_rows('process')) :
            while (have_rows('process')) : the_row();

                $process_type = get_sub_field('type');
                $process_title = get_sub_field('title');
                $process_description = get_sub_field('description');
                $process_image = get_sub_field('image');
        ?>

                <div class="process grid">
                    <!--
                        <style>
                            .process:after {
                                background-image: url('<?php echo $process_image; ?>');
                            }
                        </style>
                    -->
                    <div class="text">
                        <span class="meta"><?php echo $process_type; ?></span>
                        <h3 class="title"><?php echo $process_title; ?></h3>
                        <p class="description"><?php echo $process_description; ?></p>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

</section>