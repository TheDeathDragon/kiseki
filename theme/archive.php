<?php get_header(); ?>

<!-- 分类目录开始 -->
<div class="barba-wrapper">
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
		<!-- 分类目录主体 -->
		<div class="page-content-container">
			<?php if (have_posts()) : ?>
				<h1 class="page-title">
					<?php
					if (is_category()) {
						echo "分类：";
						single_cat_title();
					} elseif (is_tag()) {
						echo "标签：";
						single_tag_title();
					} elseif (is_author()) {
						the_post();
						echo 'Author Archives: ' . get_the_author();
						rewind_posts();
					} elseif (is_day()) {
						echo 'Daily Archives: ' . get_the_date();
					} elseif (is_month()) {
						echo 'Monthly Archives: ' . get_the_date('F Y');
					} elseif (is_year()) {
						echo 'Yearly Archives: ' . get_the_date('Y');
					} else {
						echo 'Archives:';
					}
					?>
				</h1>
				<?php while (have_posts()) : ?>
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
		<!-- 分类目录主体结束 -->
		<div class="pagination side">
			<!-- 分页链接 -->
			<?php echo paginate_links(); ?>
		</div>
		<?php //get_sidebar(); ?>
	</div>
	<!-- 分类目录结束 -->
</div>
<?php get_footer(); ?>