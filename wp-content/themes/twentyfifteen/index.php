<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<!-- 关于我们 -->
<div id="abouts" class="container d-flex justify-content-between p-0">
	<!-- 板块标题 -->
	<div class="cont-head">
		<h1 class="text-primary">ABOUT US</h1>
		<h2 class="text-secondary">关于我们</h2>
	</div>

	<div class="cont-body d-flex justify-content-between">
		<div class="card pb-3">
			<img class="card-img-top" src="<?php imgUrl('img-1.jpg');?>" alt="安徽海荣通讯">
			<div class="card-body">
				<h1 class="card-title">公司概况</h1>
				<p class="card-text text-secondary">公司以5G通讯铁塔建设为依托，立足于宁夏海荣通讯代建运营。为宁夏自治区5G网络的普及和建设架桥铺路。</p>
			</div>

			<a class="btn bg-primary text-white m-3" href="#">查看更多</a>
		</div>

		<div class="card pb-3">
			<img class="card-img-top" src="<?php imgUrl('img-2.jpg');?>" alt="安徽海荣通讯">
			<div class="card-body">
				<h1 class="card-title">发展历程</h1>
				<p class="card-text text-secondary">公司成立于2017年12月21日，是一家集通讯运营，通信工程投资建设为一体的高科技项目公司。</p>
			</div>

			<a class="btn bg-primary text-white m-3" href="#">查看更多</a>
		</div>

		<div class="card pb-3">
			<img class="card-img-top" src="<?php imgUrl('img-6.jpg');?>" alt="安徽海荣通讯">
			<div class="card-body">
				<h1 class="card-title">企业文化</h1>
				<p class="card-text text-secondary">坚持“科学管理，坚守信誉”,争取优质的质量方针，把海荣公司打造成为一个资质全面，敢打硬仗的品牌企业。</p>
			</div>

			<a class="btn bg-primary text-white m-3" href="#">查看更多</a>
		</div>
	</div>
</div>

<!-- news 新闻资讯 -->
<div id="news" class="container p-0 d-flex justify-content-between">
	<!-- 板块标题 -->
	<div class="cont-head">
		<h1 class="text-primary">NEWS</h1>
		<h2 class="text-secondary">新闻资讯</h2>
	</div>
</div>

<?php get_footer(); ?>
