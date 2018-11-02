<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
global $category;
?>

<!-- sidebar-head -->
<div class="sidebar">
	<!-- 侧边栏头部 -->
	<div class="sidebar-head">
		<div class="sidebar-title bg-primary text-right p-4">
			<h1 class="text-white"><?php echo $category->name;?></h1>
		</div>

		<div class="sidebar-description bg-light pl-4">
			<p class="text-dark"><?php echo $category->description;?></p>
		</div>

		<div class="sidebar-icon rounded-circle bg-white ml-2 text-center align-middle">
			<img src="<?php imgUrl('icon/ico1_8.png');?>" alt="<?php echo $category->name;?>">
		</div>
	</div>

	<!-- 侧边栏文章分类 -->
	<div class="sidebar-cats mt-4">
		<a class="d-block" href="<?php echo site_url().'/category/abouts';?>">公司动态</a>
		<a class="d-block" href="<?php echo site_url().'/category/products';?>">产品中心</a>
		<a class="d-block" href="<?php echo site_url().'/category/news';?>">新闻资讯</a>
	</div>

	<!-- 侧边栏标签板块 -->
	<div class="sidebar-tags">
		
	</div>
	
</div>
