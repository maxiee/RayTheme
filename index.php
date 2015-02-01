<?php get_header(); ?>
	<?php include "leftsidebar.php"; ?>
    <div class = "row">
        <div class = "col-md-6 col-lg-6">
            <div>
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- 响应式Banner -->
				<ins class="adsbygoogle"
					 style="display:block"
					 data-ad-client="ca-pub-8746515866560942"
					 data-ad-slot="8385910003"
					 data-ad-format="auto"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
            </div>
            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                <div class="well">
                    <div class="post-header"><h2><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <span>
                            <?php _e('分类:'); ?>
                            <?php the_category(','); ?>
                            <?php _e('作者:'); ?>
                            <?php the_author(','); ?>
                            <?php edit_post_link('编辑',' '); ?>
                            <?php comments_popup_link('无评论', '1条评论', '%条评论'); ?>
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
