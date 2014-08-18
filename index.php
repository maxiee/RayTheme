<?php get_header(); ?>

    <div class = "row">
        <div class = "col-xs-8">
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
            <h2><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class = "postmetadata">
                <?php _e('Category&#58;'); ?>
                <?php the_category(','); ?>
                <?php _e('Author&#58;'); ?>
                <?php the_author(','); ?>
                <?php edit_post_link('Edit',' | '); ?><br />
                <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
            </p>
            <div><?php the_excerpt(100); ?></div>
            <?php endwhile; endif; ?>
            <?php posts_nav_link(); ?>
        </div>

        <?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>
