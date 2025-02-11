<?php get_header(); ?>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post(); 
             ?>
            <div class="content">
                <?php the_content(); ?>
            </div>
        <?php }
    } else { ?>
        <p>No content available.</p>
    <?php } ?>
<?php get_footer(); ?>
