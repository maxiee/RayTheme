<div class = "col-md-2 col-lg-2">	
	<div class="panel panel-material-teal">
        <div class="panel-heading">分类</div>
        <div class="panel-body list-group">
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
	<div class="panel panel-material-teal">
		<div class="panel-heading">广告</div>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- 响应式侧边栏 -->
		<ins class="adsbygoogle"
			 style="display:block"
			 data-ad-client="ca-pub-8746515866560942"
			 data-ad-slot="6858804406"
			 data-ad-format="auto"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
    </div>
</div>