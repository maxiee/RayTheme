<?php get_header(); ?>
	<?php include "leftsidebar.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 well">
                <?php if (have_posts()) : while (have_posts()): the_post(); ?>
                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <span class = "label"><?php the_time(n . '-' .d); ?></span>
                    <span class = "label"><?php the_category(',') ?></span>
                    <span class = "label"><?php the_author_posts_link(); ?></span>
                    <span class = "lebel"><?php the_views(); ?></span>
                    <div class="post-content">
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- 响应式文章开头 -->
						<ins class="adsbygoogle"
							 style="display:block"
							 data-ad-client="ca-pub-8746515866560942"
							 data-ad-slot="5080373204"
							 data-ad-format="auto"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
                        <?php the_content(); ?>
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- 响应式文章结尾 -->
						<ins class="adsbygoogle"
							 style="display:block"
							 data-ad-client="ca-pub-8746515866560942"
							 data-ad-slot="8033839608"
							 data-ad-format="auto"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
                    </div>
                <?php endwhile; endif; ?>
            <?php comments_template(); ?>  
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>
