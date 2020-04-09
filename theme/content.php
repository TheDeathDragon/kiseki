<!-- 文章缩略图 -->
<?php if (has_post_thumbnail()) {
	echo "<div class=\"post-thumb\"><a href=\"";
	the_permalink();
	echo "\">";
	the_post_thumbnail();
	echo "</a></div>";
} ?>
<!-- 文章标题与摘要 -->
<div class="post-inner" style="width:<?php if (!has_post_thumbnail()) {
											echo "100%";
										} ?>">
	<!-- 文章标题 -->
	<div class="post-title">
		<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a>
	</div>
	<!-- 文章摘要 -->
	<div class="post-abstract"><?php echo get_the_excerpt(); ?></div>
</div>
<!-- 文章日期与分类浏览点赞 -->
<div class="post-meta">
	<!-- 文章日期 -->
	<span class="post-date"><?php the_date('Y-m-d'); ?></span>
	&nbsp;
	<?php
	$categories = get_the_category();

	if ($categories) : ?>
		<!-- 文章分类 -->
		<span class="post-cat" style="display: none">
			<i class="fas fa-th-large"></i>&nbsp;
			<?php echo $categories[0]->cat_name; ?>
		</span>
	<?php endif; ?>
	<!-- 文章标签 -->
	<?php
	if (get_the_tag_list()) {
		echo get_the_tag_list('<span class="post-tag"><i class="fas fa-tags"></i>&nbsp;', '</span>&nbsp;<span class="post-tag">', '</span>');
	}
	?>
	<span class="post-info-more"><i class="fas fa-chevron-circle-right"></i>&nbsp;<a href="<?php the_permalink(); ?>">阅读全文</a></span>
</div>