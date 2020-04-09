<?php get_header(); ?>
<!-- 首页内容开始 -->
<div id="barba-wrapper">

	<div class="page-content">
		<!-- 头部标题开始 -->
		<div class="page-head">
			<div class="g-headline pl-15 pr-15">
				<h1>Rin's Blog</h1>
				<div>
					Break the barrier and live in this age with hope.
				</div>
			</div>
		</div>
		<!-- 头部标题结束 -->
		<div class="page-content-container">
			<?php
			if (have_posts()) :
				while (have_posts()) :
			?>
					<article class="page-content-article">
						<div class="page-content-bg">
							<?php
							the_post();
							get_template_part('content', get_post_format());
							?>
						</div>
					</article>
			<?php
				endwhile;
			else :
				get_template_part('content', 'none');
			endif;
			?>
		</div>
	</div>
</div>
<!-- 首页内容结束 -->
<?php get_footer(); ?>