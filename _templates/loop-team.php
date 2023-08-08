<?php
$args = new WP_Query(array(
    'post_type' => 'bbwp_cpt_team',
    'order' => 'DSC'
)); ?>

<div class="team-members contain">
    <?php if (have_posts()) :
        while ($args->have_posts()) : $args->the_post();

            $team_title = get_field('team_title');
            $team_bio = get_field('team_bio');
            $team_linkedin = get_field('team_linkedin');
            $team_favourite = get_field('favourite_project');
            $favourite_description = get_field('favourite_description');
    ?>
            <div class="team-member">
                <figure class="team-member-image">
                    <a href="#">
                        <?php the_post_thumbnail(); ?>
                    </a>
                </figure>
                <h3 class="name">
                    <?php the_title(); ?>
                </h3>
                <span class="role"><?php the_field('team_title'); ?></span>
            </div>


            <div class="team-member__overlay">

                <div class="container">
                    <div class="profile-top">
                        <button class="close-modal"></button>
                    </div>

                    <div class="profile">
                        <figure class="image">
                            <?php the_post_thumbnail(); ?>
                        </figure>

                        <div class="description">
                            <h1 class="team-member-name"><?php the_title(); ?></h1>
                            <span class="role"><?php echo $team_title; ?></span>
                            <?php echo $team_bio; ?>

                            <?php if (get_field('team_linkedin')) : ?>
                                <a href="<?php echo $team_linkedin; ?>" class="linkedin">linkedin</a>
                            <?php endif ?>
                        </div>
                    </div>

                    <div class="project">
                        <?php foreach ($team_favourite as $post) :
                            setup_postdata($post); ?>

                            <figure>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                            </figure>

                            <div class="project-info">
                                <h2 class="favourite">Favourite Project</h2>
                                <span class="project-title"><?php the_title(); ?></span>
                                <span class="category">Category</span>
                                <p><?php echo $favourite_description; ?></p>
                                <a href="<?php the_permalink(); ?>" class="link">View Case Study</a>
                            </div>
                        <?php endforeach; ?>

                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>


    <?php endwhile;
        wp_reset_postdata();
    endif; ?>
</div>