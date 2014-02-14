<?php
if ( ! isset( $content_width ) )
	$content_width = 580;

add_action( 'after_setup_theme', 'mytheme_setup' );

if ( ! function_exists( 'mytheme_setup' ) ):
function mytheme_setup() {
	add_editor_style();
	add_theme_support( 'automatic-feed-links' );
}
endif;


//バージョンアップ通知を非表示にする
add_filter( 'pre_site_transient_update_core', '__return_zero' );
remove_action( 'wp_version_check', 'wp_version_check' );
remove_action( 'admin_init', '_maybe_update_core' );


//ショートコード：テンプレートURL
function shortcode_get_template_directory_uri() {
    return get_template_directory_uri();
}
add_shortcode( 'get_template_directory_uri', 'shortcode_get_template_directory_uri' );


//ショートコード：サイトURL
function shortcode_home_url() {
    return home_url();
}
add_shortcode( 'home_url', 'shortcode_home_url' );


//フィルターで抜粋の長さの変更 
function new_excerpt_length( $length ) {
	return 140;
}	
add_filter( 'excerpt_length', 'new_excerpt_length' );

function new_excerpt_mblength( $length ) {
	return 140;
}
add_filter( 'excerpt_mblength', 'new_excerpt_mblength' );

function new_excerpt_more( $more ) {
	return '&#046;&#046;&#046;';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

remove_filter('the_excerpt', 'wpautop');


//wp_headから不要なコードを削除する 
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rel_canonical' );


//記事内の画像を取得
function catch_that_image() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches [1] [0];

	if(empty($first_img)){ //Defines a default image
		$first_img = '';
	} else {
		$first_img = '<img src="' . $first_img . '" width="301" height="201" alt="" />';
	}

	return $first_img;
}


//記事内の画像IDを取得
function catch_that_image_id() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+class=[\'"].+wp-image-([0-9]+).*[\'"].*>/i', $post->post_content, $matches);
	$first_img_id = $matches [1] [0];

	if(empty($first_img_id)){ //Defines a default image
		$first_img_id = '';
	}

	return $first_img_id;
}


//子カテゴリー内の投稿かテストする 
function post_is_in_descendant_category( $cats, $_post = null )
{
	foreach ( (array) $cats as $cat ) {
		// get_term_children() accepts integer ID only
		$descendants = get_term_children( (int) $cat, 'category');
		if ( $descendants && in_category( $descendants, $_post ) )
			return true;
	}
	return false;
}

if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
};
