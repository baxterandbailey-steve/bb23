<?php

/**
 * Page-section: Newsroom
 *
 * @package BBWP
 */

?>

<section class="newsroom">
    <div class="contain">
        <?php if (have_rows('newsroom')) :
            while (have_rows('newsroom')) : the_row();
                $newsroom_title = get_sub_field('title');
        ?>
                <h2 class="title" data-aos="fade-in"><?php echo $newsroom_title; ?></h2>

                <ul class="news">
                    <?php if (have_rows('news')) :
                        while (have_rows('news')) : the_row();
                            $news_category = get_sub_field('category');
                            $news_description = get_sub_field('description');
                            $news_link_url = get_sub_field('link_url');
                            $news_link_label = get_sub_field('link_label');
                    ?>
                            <li class="news-item">
                                <span class="meta" data-aos="fade-in"><?php echo $news_category; ?></span>
                                <h3 class="title" data-aos="fade-up"><?php echo $news_description; ?></h3>
                                <a href="<?php echo $news_link_url; ?>" class="link" data-aos="fade-in"><?php echo $news_link_label ?></a>
                            </li>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>