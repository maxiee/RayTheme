<div class = "col-sm-4">
    <div>
       <iframe width="100%" height="140" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=550&fansRow=2&ptype=1&speed=0&skin=1&isTitle=1&noborder=1&isWeibo=0&isFans=0&uid=1240212845&verifier=8704b6ca&dpc=1"></iframe> 
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">最多阅读</div>
        <div class="panel-body list-group">
            <?php get_most_viewed(); ?>
        </div>
    </div> 
    <div class="panel panel-default panel-body">
        <div class="list-group">
            <?php
                $args=array('order' => 'ASC', 'parent' => 0, 'pad_counts' => true);
                $categories=get_categories($args);
                foreach($categories as $category) { 
                    echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) 
                        . '" class="list-group-item"' . '><b>' . $category->name 
                        .' ('.$category->count.')</b></a>';
                } ?>
        </div>
    </div>
    <div class="panel">
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- 大侧边栏 -->
	<ins class="adsbygoogle"
	     style="display:inline-block;width:336px;height:280px"
	     data-ad-client="ca-pub-8746515866560942"
	     data-ad-slot="6851626009"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
    </div>
</div>
