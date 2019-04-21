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


/**
 * Load scripts and style sheets
 */
function load_scripts(){
  wp_enqueue_script(
    'fancyboxs', // ハンドル名
    get_template_directory_uri() . '/js/main.js',
    array( 'jquery' ), // 先に読み込まれているべきScript（ハンドル名）
    filemtime( get_template_directory() . '/js/mainjs' ), // バージョン情報
    false // Bodyタグの最後でロードしますか？
  );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );
