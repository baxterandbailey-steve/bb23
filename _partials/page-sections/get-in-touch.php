<?php
$newsletter_image = get_field('opt_newsletter_image', 'options');
$newsletter_title = get_field('opt_newsletter_title', 'options');
$newsletter_text = get_field('opt_newsletter_text', 'options');
?>

<aside class="get-in-touch">
    <div class="container">

        <figure class="image">
            <img src=" <?php echo $newsletter_image; ?>">
        </figure>

        <div class="rich-text">
            <h2 class="title"><?php echo $newsletter_title;  ?></h2>
            <?php echo $newsletter_text; ?>

            <form>
                <label for="get_in_touch"></label>
                <input type="email" id="get_in_touch" name="get_in_touch" placeholder="Your email address" class="input-email">
                <label for="subscribe_button"></label>
                <input type="submit" id="subscribe_button" name="subscribe_button" value="subscribe" class="input-subscribe">
            </form>
        </div>

    </div>
</aside>