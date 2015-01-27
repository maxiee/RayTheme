<?php

function load_style_and_scripts() {
	wp_enqueue_style('bootstrap-styles', 'http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css');
	wp_enqueue_style('ripples-styles', 'http://cdn.bootcss.com/bootstrap-material-design/0.2.1/css/ripples.min.css');
	wp_enqueue_style('material-styles', 'http://cdn.bootcss.com/bootstrap-material-design/0.2.1/css/material-wfont.min.css');
	//wp_enqueue_style('my-style', ***);
	wp_enqueue_script( 'bootstrap-js', 'http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js');
	wp_enqueue_script( 'ripples-js', 'http://cdn.bootcss.com/bootstrap-material-design/0.2.1/js/ripples.min.js');
	wp_enqueue_script( 'material-js', 'http://cdn.bootcss.com/bootstrap-material-design/0.2.0/js/material.min.js');
}
add_action( 'wp_enqueue_scripts', 'load_style_and_scripts' );

?>