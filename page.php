<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class = "col-sm-8">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                    <span class = "label"><?php the_time(n . '-' .d); ?></span>
                    <span class = "label"><?php the_category(',') ?></span>
                    <span class = "label"><?php the_author_posts_link(); ?></span>
                    <span class = "lebel"><?php the_views(); ?></span>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>
