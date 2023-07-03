<?

/**
 * Testimonial media block
 *
 * @package BBWP
 */


$testimonial_author = get_sub_field('author');
$testimonial_role = get_sub_field('role');
$testimonial_organisation = get_sub_field('organisation');
$testimonial_quote = get_sub_field('testimonial');
?>

<div class="testimonial">
    <div class="container">

        <div class="author-meta">
            <span class="author"><?php echo $testimonial_author; ?></span>
            <span class="role"><?php echo $testimonial_role; ?></span>
            <span class="organisation"><?php echo $testimonial_organisation; ?></span>
        </div>

        <blockquote class="text"><?php echo $testimonial_quote; ?></blockquote>
    </div>
</div>