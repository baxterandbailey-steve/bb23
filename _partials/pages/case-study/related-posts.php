<?php

/**
 * Case-study: related-posts 
 * Notes: this is the 'more like this' related posts block that sits at the bottom of the page
 * 
 * @package BBWP
 */

?>

<?php if (get_field('related_posts')) : ?>
    <div class="more-like-this contain">
        <div class="container-top">
            <h2 class="title">More like this</h2>
            <a a href="/work/" class="link">All work</a>
        </div>

        <ul class="related">
            <?php $featured_posts = get_field('related_posts'); ?>
            <?php foreach ($featured_posts as $post) :
                setup_postdata($post); ?>
                <li>
                    <article>
                        <figure>
                            <?php the_post_thumbnail(); ?>
                        </figure>
                        <h3 class="title"><?php the_title(); ?></h3>
                        <span class="meta">Lorem ipsum</span>
                        <a href="<?php the_permalink(); ?>" class="link"></a>
                    </article>
                </li>
            <?php endforeach; ?>
        </ul>

        <?php wp_reset_postdata(); ?>
    </div>
<?php endif; ?>