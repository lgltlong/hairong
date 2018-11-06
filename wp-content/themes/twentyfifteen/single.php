<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<!-- single -->
<div id="single" class="container p-0 d-flex justify-content-between">
	<?php get_sidebar(); ?>

	<!-- 文章主体 -->
	<div class="cont-body">
		<div class="breadcrumb p-0 m-0 pl-4 bg-white">
			<?php
				if( function_exists( 'single_breadcrumb' ) ){
					echo single_breadcrumb( get_the_ID() );
				}
			?>
		</div>

		<div class="cont-title p-4 border-bottom">
			<h1 class="text-primary"><?php the_title();?></h1>
			<p class="text-secondary"><?php the_date( get_the_ID() );?></p>
		</div>

		<div class="cont-main mt-4">
			<?php
				// the_content();
				echo get_post( get_the_ID() )->post_content;
			?>
		</div>

		<div class="sin-more pt-4 border-top">
			<p><?php previous_post_link( '上一篇: %link' );?></p>
			<p><?php next_post_link( '下一篇: %link' );?></p>
		</div>
	</div>
</div>

<?php get_footer(); ?>
