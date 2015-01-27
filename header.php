<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<?php wp_head(); ?>
</head>
<body>
	<nav class = "navbar navbar-default navbar-fixed-top">
			<div class = "navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class = "navbar-brand" href="<?php bloginfo('url'); ?>" ><?php bloginfo('name'); ?></a>
			</div>
			<div>
				<ul class = "nav navbar-nav">
					<li><a href="http://www.judymax.com/%e5%85%b3%e4%ba%8e">关于</a></li>
					<li><a href="http://www.judymax.com/%e5%bd%92%e6%a1%a3">归档</a></li>
		<li><a href="<?php bloginfo('rss2_url'); ?>" title="RSS订阅本站">RSS订阅</a></li>
			   </ul>
			</div>
	</nav>
	<div class = "container">