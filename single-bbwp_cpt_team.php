<?php

/**
 * Team CPT: Single
 *
 * @package BBWP
 */

$team_title = get_field('team_title');
$team_bio = get_field('team_bio');
$team_linkedin = get_field('team_linkedin');

?>

<div class="team-member">
    <code>this is single-team.php</code>

    <?php the_title(); ?>
    <?php echo $team_title; ?>
    <?php echo $team_bio; ?>
</div>