<!DOCTYPE html>
<html>
    <head>
        <title><?php wp_title(' | ', true, 'right'); ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body>
        <div class = "navbar navbar-default navbar-fixed-top"  role="navigation">
            <div class = "container">
                <a href = "#" class = "navbar-brand">Judymax</a>

                <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                </button>
            </div>
        </div>
        <div>
