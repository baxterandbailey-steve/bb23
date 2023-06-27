<div class="full-width__two-cols">
    <?php if (have_rows('lh_col')) : ?>

        <? while (have_rows('lh_col')) : the_row();
            $lh_video = get_sub_field('video');
            $lh_image = get_sub_field('image');
        ?>

            <?php if (get_sub_field('choice') == 'video') : ?>
                <video preload playsinline autoplay muted loop class="lh-video">
                    <source src="<?php echo $lh_video ?>" type="video/mp4">
                </video>
            <?php else : ?>
                <img src="<?php echo $lh_image; ?>" class="lh-image">
            <?php endif; ?>

        <? endwhile; ?>
    <? endif; ?>


    <?php if (have_rows('rh_col')) : ?>
        <? while (have_rows('rh_col')) : the_row();
            $rh_video = get_sub_field('video');
            $rh_image = get_sub_field('image');
        ?>

            <?php if (get_sub_field('choice') == 'video') : ?>

                <video preload playsinline autoplay muted loop class="rh-video">
                    <source src="<?php echo $rh_video ?>" type="video/mp4">
                </video>
            <?php else : ?>
                <img src="<?php echo $rh_image; ?>" class="rh-image">
            <?php endif; ?>

        <? endwhile; ?>
    <? endif; ?>

</div>