<?php
$args = new WP_Query(array(
    'post_type' => 'bbwp_cpt_team',
    'order' => 'DSC'
)); ?>

<ul class="team-members contain">
    <?php if (have_posts()) :
        while ($args->have_posts()) : $args->the_post(); ?>
            <li class="team-member">
                <figure class="image" data-aos="fade-in">
                    <?php the_post_thumbnail(); ?>
                </figure>
                <h3 class="name" data-aos="fade-in">
                    <?php the_title(); ?>
                </h3>
                <span class="role" data-aos="fade-in">Lorem ipusm dolar</span>
            </li>
    <?php endwhile;
        wp_reset_postdata();
    endif; ?>
</ul>