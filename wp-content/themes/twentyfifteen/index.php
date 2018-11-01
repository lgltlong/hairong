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

	<div class="cont-body d-flex justify-content-between">
		<div  class="news-album border-primary">
			<img id="news-album" src="<?php echo get_the_post_thumbnail_url();?>" alt='<?php the_title();?>'>
		</div>

		<ul class="news-list">
		<?php
			$argv = array(
				'cat' => '2',
				'posts_per_page' => 5
			);
			query_posts( $argv );

			$count = 1;
			if( have_posts() ) : while( have_posts() ) : the_post();
		?>
			<li class="news-item-<?php echo $count;?> p-1 <?php if( $count==1 ){
				echo 'news-active';
			}?>" onmouseover="showme(<?php echo $count;?>, '<?php echo get_the_post_thumbnail_url();?>')">
				<h3 class="text-primary"><?php the_title();?></h3>
				<p class="text-secondary"><?php echo get_the_date( the_ID() );?></p>
			</li>	
		<?php
			$count++;
			//end loop
			endwhile;
		endif;
		?>
		</ul>
		<script type="text/javascript">
			function showme( cur, url ){
				for( n=1; n<6; n++ ){
					if( n==cur ){
						$('.news-item-'+n).addClass('news-active');
						$('#news-album').attr('src', url);
					}else{
						$('.news-item-'+n).removeClass('news-active');
					}
				}
			}
		</script>
	</div>
</div>

<!-- 视频宣传板块 -->
<div id="videos" class="container-fluid bg-primary">
	<div class="container p-0 d-flex justify-content-between">
		<video autoplay="autoplay" controls="controls" width="720" height="408">
			<source src="<?php imgUrl('5g.Ogg');?>" type="video/ogg">
		</video>

		<!-- 板块标题 -->
		<div class="cont-head">
			<h1 class="text-white">VIDEO</h1>
			<h2 class="text-white">5G未来</h2>
		</div>
	</div>
</div>

<!-- products -->
<div id="products" class="container d-flex justify-content-between">
	<!-- 板块标题 -->
	<div class="cont-head">
		<h1 class="text-primary">PRODUCT</h1>
		<h2 class="text-secondary">产品中心</h2>
	</div>

	<div class="cont-body">
		<!-- one line -->
		<div class="cont-item d-flex justify-content-between mb-2 border-bottom">
			<div class="cont-item-icon">
				<img src="<?php imgUrl('icon/ico1_8.png');?>" alt="安徽海荣通讯">			
			</div>

			<div class="cont-item-infos">
				<h1 class="text-primary">5G基站</h1>
				<p class="text-secondary">5G基站基于多天线Massive MIMO（大规模输入输出）、新型编码LDPC/Polar等5G先进新技术，具备超大带宽，体验速率可达1Gbps，相当于4G的100倍，峰值速率更是可达20Gbps，相当于4G的200倍。</p>
			</div>

			<div class="cont-item-arti d-flex justify-content-between">
				<div>
					<img src="<?php imgUrl('img-6.jpg');?>" alt="5G基站">
					<p class="text-secondary">5G 核心网</p>
				</div>

				<div>
					<img src="<?php imgUrl('img-1.jpg');?>" alt="5G基站">
					<p class="text-secondary">通讯能源</p>
				</div>
			</div>
		</div>

		<!-- one line -->
		<div class="cont-item d-flex justify-content-between mb-2 border-bottom">
			<div class="cont-item-icon">
				<img src="<?php imgUrl('icon/ico1_9.png');?>" alt="安徽海荣通讯">			
			</div>

			<div class="cont-item-infos">
				<h1 class="text-primary">铁塔建设</h1>
				<p class="text-secondary">可生产包括接插式单管塔、法兰式单管塔、景观塔、仿生树、美化灯杆、三管塔、角钢塔、增高架、小微站、通信拖车等多种产品。</p>
			</div>

			<div class="cont-item-arti d-flex justify-content-between">
				<div>
					<img src="<?php imgUrl('img-5.jpg');?>" alt="5G基站">
					<p class="text-secondary">非单管塔</p>
				</div>

				<div>
					<img src="<?php imgUrl('img-4.jpg');?>" alt="5G基站">
					<p class="text-secondary">单管塔</p>
				</div>
			</div>
		</div>

		<!-- one line -->
		<div class="cont-item d-flex justify-content-between mb-2 border-bottom">
			<div class="cont-item-icon">
				<img src="<?php imgUrl('icon/ico1_10.png');?>" alt="安徽海荣通讯">			
			</div>

			<div class="cont-item-infos">
				<h1 class="text-primary">多元产品</h1>
				<p class="text-secondary">多元化经营企业为管理者创造了一个协调管理不同经营业务的机会，因此，其运行将比专业化经营企业更有效率，能获取更高的投资报酬</p>
			</div>

			<div class="cont-item-arti d-flex justify-content-between">
				<div>
					<img src="<?php imgUrl('img-2.jpg');?>" alt="5G基站">
					<p class="text-secondary">基站</p>
				</div>

				<div>
					<img src="<?php imgUrl('img-3.jpg');?>" alt="5G基站">
					<p class="text-secondary">数据通讯</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
