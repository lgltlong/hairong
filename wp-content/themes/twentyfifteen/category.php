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

get_header(); 

// 准备数据
$category = current( get_the_category() );
?>

<!-- category main -->
<div id="category" class="container p-0 d-flex justify-content-between">
	<!-- 获取侧边栏 -->
	<?php get_sidebar();?>

	<div class="cont-body">
		<div class="breadcrumb p-0 m-0 pl-4 bg-white">
			<a class="bc-home">  </a>
			<a href="<?php echo site_url();?>">首页</a>
			<a>/</a>
			<a href="javascript:;"><?php echo $category->name;?></a>
		</div>

		<!-- 列表正文 -->
		<div class="cont-list">
			<?php
				$argv = array(
					'cat' => $category->term_id,
					'posts_per_page' => 5
				);
				query_posts( $argv );

				if( have_posts() ): while( have_posts() ): the_post();
			?>

			<div class="cont-item mt-4 p-4 d-flex justify-content-between border-bottom">
				<div class="cont-item-thumbnail">
					<img src="<?php echo  get_the_post_thumbnail_url();?>" alt="<?php the_title();?>">
				</div>

				<div class="cont-item-infos">
					<a href="<?php echo get_the_permalink();?>">
						<h1 class="text-primary">
							<?php the_title();?>
						</h1>
					</a>
					
					<p class="text-secondary"><?php the_excerpt();?></p>
					<p class="text-secondary text-right"><?php the_date();?></p>
				</div>
			</div>

			<?php endwhile; endif;?>

			<!-- page list -->
			<?php 
				$category = get_the_category();
				if( $category[0]->category_count >1 ):
			?>
			<div class="cat-page-list mt-4">
				<?php
					if( function_exists( 'show_paginate' ) ){
						show_paginate();
					}
				?>
			</div>
			<?php endif;?>
		</div>
	</div>
</div>

<?php get_footer();?>