<?php
function wordpressify_resources()
{
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script('header_js', get_template_directory_uri() . '/js/header-bundle.js', null, 1.0, false);
	wp_enqueue_script('footer_js', get_template_directory_uri() . '/js/footer-bundle.js', null, 1.0, true);
}

add_action('wp_enqueue_scripts', 'wordpressify_resources');

// Customize excerpt word count length
function custom_excerpt_length()
{
	return 22;
}

add_filter('excerpt_length', 'custom_excerpt_length');

// Theme setup
function wordpressify_setup()
{
	// Handle Titles
	add_theme_support('title-tag');

	// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 320, 180, true);
	add_image_size('square-thumbnail', 300, 300, true);
	add_image_size('banner-image', 1024, 1024, true);
}

add_action('after_setup_theme', 'wordpressify_setup');

show_admin_bar(false);

// Checks if there are any posts in the results
function is_search_has_results()
{
	return 0 != $GLOBALS['wp_query']->found_posts;
}

// Add Widget Areas
function wordpressify_widgets()
{
	register_sidebar(
		array(
			'name'          => 'Sidebar',
			'id'            => 'sidebar1',
			'before_widget' => '<div class="widget-item">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action('widgets_init', 'wordpressify_widgets');

function performance()
{
	$stat = sprintf(
		'%d 次查询 耗时 %.3f seconds, 使用 %.2fMB 内存',
		get_num_queries(),
		timer_stop(0, 3),
		memory_get_peak_usage() / 1024 / 1024
	);
	echo $stat;
}
//兼容Webp
function mimvp_filter_mime_types( $array ) {

    $array['webp'] = 'image/webp';

    return $array;

}
//兼容Webp缩略图
add_filter( 'mime_types', 'mimvp_filter_mime_types', 10, 1 );
function mimvp_file_is_displayable_image($result, $path) {

    $info = @getimagesize( $path );

    if($info['mime'] == 'image/webp') {

        $result = true;

    }

    return $result;

}

add_filter( 'file_is_displayable_image', 'mimvp_file_is_displayable_image', 10, 2 );