<!DOCTYPE html>
<html>
    <head>
        <title><?php if ( is_home() ) {
                bloginfo('name'); echo " - "; bloginfo('description');
            } elseif ( is_category() ) {
                single_cat_title(); echo " - "; bloginfo('name');
            } elseif (is_single() || is_page() ) {
                single_post_title();
            } elseif (is_search() ) {
                echo "搜索"; echo " - "; bloginfo('name');
            } elseif (is_404() ) {
                echo '页面不存在!';
            } else {
                wp_title('',true);
            } ?></title>        
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
        <?php wp_enqueue_script("jquery"); ?>
        <?php wp_head(); ?>
    </head>
    <body>
        <nav class = "navbar navbar-default container"  role="navigation">
                <div class = "navbar-header">
                    <a href="<?php bloginfo('url'); ?>" class = "navbar-brand"><?php bloginfo('name'); ?></a>
                </div>
                <div>
                    <ul class = "nav navbar-nav">
                        <li><a href="http://www.judymax.com/%e5%85%b3%e4%ba%8e">关于</a></li>
                        <li><a href="http://www.judymax.com/%e5%bd%92%e6%a1%a3">归档</a></li>
                   </ul>
                </div>
        </nav>
        <div class = "container">
