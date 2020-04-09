<?php get_header(); ?>
<div id="barba-wrapper">
	<!-- 文章主体内容开始 .article-content -->
	<div class="article-content">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				if ( get_post_format() == false ) {
					get_template_part( 'content', 'single' );
				} else {
					get_template_part( 'content', get_post_format() );
				}
		endwhile;
		else :
			get_template_part( 'content', 'none' );
		endif;
		?>
	</div>
	<!-- 文章内容结束 .article-content -->
</div>
<!-- 主体内容结束 -->
</div>
<?php get_footer(); ?>
