<?php

/**
 * Case-study: related-posts 
 * Notes: this is the 'more like this' related posts block that sits at the bottom of the page
 * 
 * @package BBWP
 */

?>

<?php if (get_field('related_posts')) : ?>
    <div class="more-like-this">
        <div class="container-top">
            <h2 class="title">More like this</h2>
            <a a href="/our-work/" class="link">All work</a>
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
                        <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </article>
                </li>
            <?php endforeach; ?>
        </ul>

        <?php wp_reset_postdata(); ?>
    </div>
<?php endif; ?>