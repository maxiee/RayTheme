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
                echo "¿?¿?¿?¿?"; echo " - "; bloginfo('name');
            } elseif (is_404() ) {
                echo '¿?¿?¿?¿?¿?!';
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
                        <?php wp_list_pages('depth=1&title_li=&sort_column=menu_order'); ?>
                   </ul>
                </div>
        </nav>
        <div class = "container">
