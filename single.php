<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 well">
                <?php if (have_posts()) : while (have_posts()): the_post(); ?>
                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <span class = "label"><?php the_time(n . '-' .d); ?></span>
                    <span class = "label"><?php the_category(',') ?></span>
                    <span class = "label"><?php the_author_posts_link(); ?></span>
                    <span class = "lebel"><?php the_views(); ?></span>
                    <div class="post-content">
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- 文章的开头 -->
                        <ins class="adsbygoogle"
                             style="display:inline-block;width:728px;height:90px"
                             data-ad-client="ca-pub-8746515866560942"
                             data-ad-slot="9805092404"></ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                        <?php the_content(); ?>
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- 文章的结尾 -->
                        <ins class="adsbygoogle"
                             style="display:inline-block;width:728px;height:90px"
                             data-ad-client="ca-pub-8746515866560942"
                             data-ad-slot="2281825600"></ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                <?php endwhile; endif; ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>
