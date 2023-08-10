<?php

/**
 * Work [case-study]: More like this
 *
 * @package BBWP
 */

$featured_posts = get_sub_field('related_posts');

?>

<div class="more-like-this">

    <div class="contain">
        <div class="container-top">
            <h2 class="title">More like this</h2>
            <a href="/our-work/" class="link">All work</a>
        </div>

        <ul class="related">
            <?php foreach ($featured_posts as $post) :
                setup_postdata($post); ?>
                <li>
                    <article>
                        <figure>
                            <?php the_post_thumbnail(); ?>
                        </figure>
                        <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </article>
                </li>
            <?php endforeach; ?>
        </ul>

        <?php wp_reset_postdata(); ?>
    </div>

</div>