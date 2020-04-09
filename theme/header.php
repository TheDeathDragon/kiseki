<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="author" content="Rin" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" media="all" href="//cdn.jsdelivr.net/gh/FortAwesome/Font-Awesome@v5.13.0/css/all.min.css">
	<link href="//wit.im/static/fonts.css?family=Noto+Serif+SC|Open+Sans&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<!-- 框架开始 .gwrap -->

<body class="gwrap" <?php
					//body_class(); 
					?>>
	<!-- 边框开始 .fixed-frame -->
	<div class="fixed-frame">
		<div class="border b-h b-btm"></div>
		<div class="border b-h b-top"></div>
		<div class="border b-r b-right"></div>
		<div class="border b-r b-left"></div>
		<div class="t-left">The Legend of Heroes: Sora No KISEKI</div>
		<div class="t-right">This is the End, as well as the Beginning ─

		</div>
	</div>
	<!-- 边框结束 .fixed-frame -->

	<!-- 菜单按钮 .gnav-trigger-wrap -->
	<div class="gnav-trigger-wrap" style="display: block;">
		<a class="menu-trigger" href="#">
			<span></span>
			<span></span>
			<span></span>
		</a>
		<div class="text">MENU</div>
	</div>
	<!-- 菜单按钮结束 .gnav-trigger-wrap -->

	<!-- 菜单覆盖层开始 .gnav-wrap -->
	<div class="gnav-wrap" style="display: none;">
		<div class="container-inner">
			<div class="title-logo"><img src="wp-content/themes/kiseki/img/sora.png" alt="英雄伝説 空の軌跡">
			</div>

			<nav class="gnav close" id="gnav">
				<ul>
					<li>
						<a href="/wp-admin/" class="">
							<div class="text">仪表盘<span>- 点击进入网站后台 -</span></div>
							<div class="border"><span></span><span></span><span></span><span></span></div>
						</a>
					</li>
					<li>
						<a href="#" class="">
							<div class="text">时光轴<span>- 菜单2子标题 -</span></div>
							<div class="border"><span></span><span></span><span></span><span></span></div>
						</a>
					</li>
					<li>
						<a href="#" class="">
							<div class="text">归&nbsp;&nbsp;&nbsp;档<span>- 菜单3子标题 -</span></div>
							<div class="border"><span></span><span></span><span></span><span></span></div>
						</a>
						<ul>
							<li>
								<a href="#" class="">
									<div class="text"><i class="fas fa-circle"></i>技术</div>
								</a>
							</li>
							<li>
								<a href="#" class="new">
									<div class="text"><i class="fas fa-circle"></i>日常</div>
									<div class="new">NEW</div>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" class="new">
							<div class="text">友人帐<span>- 海内存知己，天涯若比邻。 -</span></div>
							<div class="border"><span></span><span></span><span></span><span></span></div>
							<div class="new">NEW</div>
						</a>
					</li>
					<li>
						<a href="#" class="">
							<div class="text">关于我<span>- 人生如逆旅，我亦是行人。 -</span></div>
							<div class="border"><span></span><span></span><span></span><span></span></div>
						</a>
					</li>
				</ul>

			</nav>

			<div class="gnav-block" id="site-config">
				<div class="title"><i class="fas fa-cog"></i>背景设置</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						自动切换
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<button id="btn-three-off" class="btn-three active">ON</button>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<button id="btn-three-on" class="btn-three">OFF</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- 菜单覆盖层结束 .gnav-wrap -->

	<!-- 站点Logo开始 .g-headlogo -->
	<div class="g-headlogo">
		<a href="/"><img src="wp-content/themes/kiseki/img/sora.png" alt="英雄伝説 空の軌跡" class="fv" importance="high"></a>
	</div>
	<!-- 站点Logo结束 .g-headlogo -->

	<!-- 框架结束 .gwrap -->

	<!-- header.php 结束 -->

	<!-- 主体内容开始 -->



	<?php
	//edit_post_link( 'Edit', '<p class="edit-button">', '</p>' ); 
	?>