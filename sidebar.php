<div class = "col-sm-3">
    <div>
        <iframe width="100%" height="500" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=500&fansRow=1&ptype=1&speed=0&skin=5&isTitle=1&noborder=1&isWeibo=1&isFans=0&uid=1240212845&verifier=8704b6ca&colors=d6f3f7,ffffff,666666,0082cb,ecfbfd&dpc=1"></iframe>
    </div>
    <div class="panel panel-default panel-body">
        <div class="list-group">
            <?php
                $args=array('orderby' => 'id', 'order' => 'ASC', 'parent' => 0);
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
