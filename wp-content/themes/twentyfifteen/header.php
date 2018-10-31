<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="keywords" content="">
	<meta name="description" content="<?php echo get_bloginfo('description', 'display').'|'.get_bloginfo('name');?>">

	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<script type="text/javascript">
		function liaoliao(){
			window.open('');
		}
	</script>

	<!-- 引入bootstrap -->
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>

<!-- 顶部黑色线条 -->
<div id="topper" class="container-fluid bg-dark">
	<div class="container d-flex justify-content-between">
		<p class="text-white">欢迎登陆安徽海荣通讯科技有限公司</p>
		<p class="text-white">
			<span>登陆</span>
			<span>注册</span>
			<span>微信在线</span>
		</p>
	</div>
</div>

<!-- navigation -->
<nav id="navi" class="container d-flex justify-content-between">
	<img class="navi-logo" src="<?php echo get_template_directory_uri().'/images/logo.png';?>" alt="<?php echo get_bloginfo('name');?>">

	<ul class="nav">
		<li class="nav-item border-left border-right">
			<a class="nav-link active" href="<?php echo site_url();?>">
				<span>首页</span><br>
				<span class="navi-en">INDEX</span>
			</a>
		</li>

		<li class="nav-item border-right">
			<a class="nav-link active" href="#">
				<span>产品中心</span><br>
				<span class="navi-en">PRODUCTS</span>
			</a>
		</li>

		<li class="nav-item border-right">
			<a class="nav-link active" href="#">
				<span>新闻资讯</span><br>
				<span class="navi-en">NEWS</span>
			</a>
		</li>

		<li class="nav-item border-right">
			<a class="nav-link active" href="#">
				<span>关于海荣</span><br>
				<span class="navi-en">ABOUT</span>
			</a>
		</li>

		<li class="nav-item border-right">
			<a class="nav-link active" href="#">
				<span>联系海荣</span><br>
				<span class="navi-en">CONTACT</span>
			</a>
		</li>
	</ul>
</nav>

<!-- banner -->
<div id="banner" class="container-fluid p-0 carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="<?php echo get_template_directory_uri().'/images/banner-1.jpg';?>" alt="<?php echo get_bloginfo('name');?>">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="<?php echo get_template_directory_uri().'/images/banner-2.jpg';?>" alt="<?php echo get_bloginfo('name');?>">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="<?php echo get_template_directory_uri().'/images/banner-3.jpg';?>" alt="<?php echo get_bloginfo('name');?>">
		</div>
	</div>
</div>
