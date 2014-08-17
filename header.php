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
        <nav class = "navbar navbar-default"  role="navigation">
                <div class = "navbar-header">
                    <a href="<?php bloginfo('url'); ?>" class = "navbar-brand"><?php bloginfo('name'); ?></a>
                </div>
                <div>
                    <ul class = "nav navbar-nav">
                        <li class="active"><a href = "#">Home</a></li>
                        <li><a href = "#about">About</a></li>
                        <li><a href = "#contact">Contact</a></li>
                        <li class="dropdown">
                            <a href = "#" class="dropdown-toggle" data-toggle="dropdown">
                                Linux
                                <b class="caret"></b>
                            </a>
                            <ul class = "dropdown-menu">
                                <li><a href="#">Arch</a></li>
                                <li><a href="#">Gentoo</a></li>
                                <li><a href="#">Fedora</a></li>
                                <li><a href="#">Debian</a></li>
                                <li><a href="#">Deepin</a></li>
                            </ul>
                        </li>
                   </ul>
                </div>
        </nav>
        <div class = "container">
