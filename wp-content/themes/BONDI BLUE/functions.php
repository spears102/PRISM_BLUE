<?php

//---------------------------------------------------------------------------
//スマホならtrueを返すis_mobile関数作成
//---------------------------------------------------------------------------
function is_mobile(){
    $useragents = array(
		'iPhone',          // iPhone
		'iPod',            // iPod touch
		'Android',         // 1.5+ Android
		'dream',           // Pre 1.5 Android
		'CUPCAKE',         // 1.5+ Android
		'blackberry9500',  // Storm
		'blackberry9530',  // Storm
		'blackberry9520',  // Storm v2
		'blackberry9550',  // Storm v2
		'blackberry9800',  // Torch
		'webOS',           // Palm Pre Experimental
		'incognito',       // Other iPhone browser
		'webmate'          // Other iPhone browser
	);
	$pattern = '/'.implode('|', $useragents).'/i';
	return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}
//---------------------------------------------------------------------------
//タブレットならtrueを返すis_tablet関数作成
//---------------------------------------------------------------------------
function is_tablet(){
    $useragents = array(
		'iPad',            // iPad
		'tablet',          // tablet
		'kindle',          // kindle
		'silk',            // silk
		'playbook'         // playbook
	);
	$pattern = '/'.implode('|', $useragents).'/i';
	return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}
//---------------------------------------------------------------------------
//オプションページ追加
//---------------------------------------------------------------------------
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title'    => 'customize',
		'menu_title'	=> 'BEAST',
		'menu_slug'     => 'theme-options',
		'capability'	=> 'edit_posts',
		'parent_slug'	=> '',
		'position'	    => false,
		'redirect'	    => false,
	));
}
//---------------------------------------------------------------------------
//管理画面カスタマイズcss追加
//---------------------------------------------------------------------------
function wp_custom_admin_css() {
    echo "\n" . '<link href="' .get_bloginfo('template_directory'). '/css/wp-admin.css' . '" rel="stylesheet" type="text/css" />' . "\n";
}
add_action( 'admin_head', 'wp_custom_admin_css', 100);

//---------------------------------------------------------------------------
//ACFの読み込み
//---------------------------------------------------------------------------

include_once get_template_directory() . '/include-acf.php';

//---------------------------------------------------------------------------
//acf-chestの読み込み
//---------------------------------------------------------------------------

include_once( get_stylesheet_directory() . '/acf/acf-chest.php' );


//---------------------------------------------------------------------------
//ACFのオプション管理画面を追加
//----------------------------------------------------------------------------


if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'WD2Themes',
		'menu_title'	=> 'WD2Themes',
		'menu_slug' 	=> 'theme-options',
		'capability'	=> 'edit_posts',
		'parent_slug'	=> '',
		'position'	=> false,
		'redirect'	=> false,
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> '1. All Page',
		'menu_title'	=> '1. All Page',
		'menu_slug' 	=> 'theme-options-allpage',
		'capability'	=> 'edit_posts',
		'parent_slug'	=> 'theme-options',
		'position'	=> false,
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> '2. Home',
		'menu_title'	=> '2. Home',
		'menu_slug' 	=> 'theme-options-home',
		'capability'	=> 'edit_posts',
		'parent_slug'	=> 'theme-options',
		'position'	=> false,
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> '3. About',
		'menu_title'	=> '3. About',
		'menu_slug' 	=> 'theme-options-about',
		'capability'	=> 'edit_posts',
		'parent_slug'	=> 'theme-options',
		'position'	=> false,
	));

 	acf_add_options_sub_page(array(
		'page_title' 	=> '4. Gallery',
		'menu_title'	=> '4. Gallery',
		'menu_slug' 	=> 'theme-options-Gallery',
		'capability'	=> 'edit_posts',
		'parent_slug'	=> 'theme-options',
		'position'	=> false,
	));
}
//---------------------------------------------------------------------------
//相対パス
//----------------------------------------------------------------------------

function replaceImagePath($arg) {
    $content = str_replace('"images/', '"' . get_stylesheet_directory_uri() . '/images/', $arg);
        return $content;
}
add_action('the_content', 'replaceImagePath');

//---------------------------------------------------------------------------
//アイキャッチを許可
//----------------------------------------------------------------------------

 add_theme_support('post-thumbnails');
