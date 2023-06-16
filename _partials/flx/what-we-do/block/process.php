<section class="process">
    <div class="inner grid contain">
        <div class="rich-text">
            <style>
                .rich-text:after {
                    background-image: url('<?php the_sub_field('image'); ?>');
                }
            </style>
            <span class="meta"><?php the_sub_field('type'); ?></span>
            <h3 class="title"><?php the_sub_field('title'); ?></h3>
            <p class="description"><?php the_sub_field('description'); ?></p>
        </div>
    </div>
</section>