<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<footer class="container-fluid">
	<div class="container ft-infos d-flex justify-content-between">
		<div class="ft-logo">
			<img class="mb-4" src="<?php imgUrl('logo.png');?>" alt="<?php echo get_bloginfo('name');?>">	
			<p class="text-white ft-location">
				<img src="<?php imgUrl('icon/icon-1.png');?>">
				安徽省亳州市经济开发区希夷大道汇金广场A座1407-1411
			</p>
			<p class="text-white ft-phone">
				<img src="<?php imgUrl('icon/icon-8.png');?>">
				151-7807-9336
			</p>
			<p class="text-white ft-email">
				<img src="<?php imgUrl('icon/icon-6.png');?>">
				hairong@shunliban.cn
			</p>
		</div>

		<!-- 微信二维码 -->
		<div class="ft-weixin">
			<img class="" src="<?php imgUrl('web.png');?>">
			<p class="text-white">扫码即可手机浏览</p>
		</div>

		<!-- footer 相关链接 -->
		<div class="ft-links d-flex justify-content-between">
			<ul class="mr-4">
				<li class="border-bottom mb-3">关于我们</li>
				<li><a href="#">公司简介</a></li>
				<li><a href="#">品牌文化</a></li>
			</ul>

			<ul class="mr-4">
				<li class="border-bottom mb-3">产品中心</li>
				<li><a href="#">5G基站</a></li>
				<li><a href="#">铁塔建设</a></li>
				<li><a href="#">多元产品</a></li>
			</ul>

			<ul class="mr-4">
				<li class="border-bottom mb-3">支持服务</li>
				<li><a href="#">服务团队</a></li>
			</ul>

			<ul>
				<li class="border-bottom mb-3">加入我们</li>
				<li><a href="#">员工成长</a></li>
				<li><a href="#">校园招聘</a></li>
				<li><a href="#">社会招聘</a></li>
			</ul>
		</div>
	</div>
</footer>

<!-- copyright -->
<div id="copyright" class="container-fluid bg-dark">
	<div class="container d-flex justify-content-between">
		<p class="text-white m-0">Copyright ©2018 安徽海荣通讯工程有限公司. | 宁ICP备18001253号-1</p>		
		<p class="cop-dev text-white m-0">技术支持：亳州高航企业服务有限公司</p>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
