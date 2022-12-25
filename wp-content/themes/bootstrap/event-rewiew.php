<?php
/*
Template Name: Event Rewiew
Template Post Type: post
 */

get_header();

/* Start the Loop */
while (have_posts()) :
    the_post();
    ?>
    <div class="entry-content">
        <p> Begin Date: <?php the_field('begin_date'); ?></p>
        <p> Expiration Date: <?php the_field('expiration_date'); ?></p>
        <p> Price: <?php the_field('price'); ?></p>
    </div>
    <?php
    // If comments are open or there is at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()) {
        comments_template();
    }
endwhile; // End of the loop.

get_footer();

