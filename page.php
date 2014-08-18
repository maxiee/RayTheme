<?php get_header(); ?>
    <div class="container">
        <div class = "col-xs-8">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
            <div class = "container">
                <span class = "label"><?php the_time(n . '-' .d); ?></span>
                <span class = "label"><?php the_category(',') ?></span>
                <span class = "label"><?php the_author_posts_link(); ?></span>
                <span class = "lebel"><?php the_views(); ?></span>
            </div>
            <div class = "container">
                <?php the_content(); ?>
            </div>
        <?php endwhile; endif; ?>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
