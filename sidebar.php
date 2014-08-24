<div class = "col-sm-4">
    <div class="panel panel-default panel-body">
    <div class="list-group">
        <?php
            $args=array('orderby' => 'name','order' => 'ASC');
            $categories=get_categories($args);
            foreach($categories as $category) { 
                echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" class="list-group-item"' . '><b>' . $category->name.'</b></a>';
            } ?>
    </div>
    </div>
</div>
