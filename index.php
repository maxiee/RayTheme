<?php get_header(); ?>

    <div class = "row">
        <div class = "col-sm-8">
            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                <div class="well">
                    <div class="post-header"><h2><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <span>
                            <?php _e('Category&#58;'); ?>
                            <?php the_category(','); ?>
                            <?php _e('Author&#58;'); ?>
                            <?php the_author(','); ?>
                            <?php edit_post_link('Edit',' | '); ?>
                            <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
                        </span>
                    </div>
                    <div class="post-content"><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 330,"..."); ?>
                    <span>[<a href="<?php the_permalink() ?>" title="Read more" rel="bookmark">Read More</a>]</span></div>
                </div>
                <?php endwhile; endif; ?>
                <?php posts_nav_link(); ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>
