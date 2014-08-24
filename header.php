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

        <?php
        if (!function_exists('utf8Substr')) {
         function utf8Substr($str, $from, $len)
         {
             return preg_replace('#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$from.'}'.
                  '((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$len.'}).*#s',
                  '$1',$str);
         }
        }
        if ( is_single() ){
            if ($post->post_excerpt) {
                $description  = $post->post_excerpt;
            } else {
           if(preg_match('/<p>(.*)<\/p>/iU',trim(strip_tags($post->post_content,"<p>")),$result)){
            $post_content = $result['1'];
           } else {
            $post_content_r = explode("\n",trim(strip_tags($post->post_content)));
            $post_content = $post_content_r['0'];
           }
                 $description = utf8Substr($post_content,0,220);  
          }
            $keywords = "";     
            $tags = wp_get_post_tags($post->ID);
            foreach ($tags as $tag ) {
                $keywords = $keywords . $tag->name . ",";
            }
        }
        ?>
        <?php echo "\n"; ?>
        <?php if ( is_single() ) { ?>
        <meta name="description" content="<?php echo trim($description); ?>" />
        <meta name="keywords" content="<?php echo rtrim($keywords,','); ?>" />
        <?php } ?>
        <?php if ( is_home() ) { ?>
        <meta name="description" content="<?php echo stripslashes(get_option('tang_description')); ?>" />
        <meta name="keywords" content="<?php echo stripslashes(get_option('tang_keywords')); ?>" />
        <?php } ?>


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
