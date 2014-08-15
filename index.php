<?php get_header(); ?>

    <?php
        query_posts('posts_per_page=10');
            while(have_posts()) : the_post(); ?>

            <div class = "container">
                <h2><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class = "postmetadata">
                    <?php _e('Category&#58;'); ?>
                    <?php the_category(','); ?>
                    <?php _e('Author&#58;'); ?>
                    <?php the_author(','); ?>
                    <?php edit_post_link('Edit',' | '); ?><br />
                    <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
                </p>
                <p><?php the_excerpt(); ?></p>
            </div>

    <?php endwhile; wp_reset_query(); ?>

<?php get_footer(); ?>
