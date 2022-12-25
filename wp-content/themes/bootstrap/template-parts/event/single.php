<article id="event-<?php the_ID(); ?>" <?php post_class(); ?> >
    <header class="entry-header alignwide">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

    </header>
    <div class="entry-content">
        <div class="post-taxonomies">
            <?php the_terms(get_the_ID(), 'event_category', '<span class="cat-links">', ',', '</span>'); ?>
        </div>
        <div class="entry-content">
            <p> Begin Date: <?php the_field('begin_date'); ?></p>
            <p> Expiration Date: <?php the_field('expiration_date'); ?></p>
            <p> Price: <?php the_field('price'); ?></p>
        </div>
        <?php the_content(); ?>
    </div>
</article>

