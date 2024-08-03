<?php

/**
 */
function twentyten_continue_reading_link() {
	return ' ' . __( '続きを読む <span class="meta-nav">&rarr;</span>', 'twentyten' ) . '';
}


//画像
//add_image_size( 'photo_a', 273, 164, true );
//add_image_size( 'photo_b', 846, 500, true );
//add_image_size( 'photo_c', 1000, 1000, false );


//スマホ切り分け
function is_mobile() {
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

//郵便番号
 add_action( 'wp_enqueue_scripts', 'my_ajaxzip3' ); function my_ajaxzip3() { wp_enqueue_script( 'ajaxzip3', 'https://ajaxzip3.github.io/ajaxzip3.js' ); } 
 
 //カスタムフィールドGoogleマップ
add_filter('acf/fields/google_map/api', function () {
    return array(
        'libraries' => 'places',
        'key'        => '', // Googleで発行したキーを用意する
        'client'     => ''
    );
});


//投稿の名称変更
function change_post_menu_label() {
	global $menu;
	global $submenu;
	$menu[5][0] = '新着情報';
	$submenu['edit.php'][5][0] = '新着情報一覧';
	$submenu['edit.php'][10][0] = '新規追加';
	$submenu['edit.php'][16][0] = 'タグ';
	//echo ”;
}
function change_post_object_label() {
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = '新着情報';
	$labels->singular_name = '新着情報';
	$labels->add_new = _x('作る', '新着情報');
	$labels->add_new_item = '新規追加';
	$labels->edit_item = '新着情報の編集';
	$labels->new_item = '新規追加';
	$labels->view_item = '新着情報を表示';
	$labels->search_items = '新着情報検索';
	$labels->not_found = '新着情報が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱の新着情報にも見つかりませんでした';
}

//外部確認有効期限
function my_nonce_life() {
	return 60 * 60 * 24 * 30;	// 30 日間（秒×分×時間×日）
}

add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );

/*アイキャッチ表示*/
add_theme_support('post-thumbnails');

/*レストラン予約フォーム*/
add_filter( 'mwform_value_mw-wp-form-9624', 'my_mwform_value', 10, 2 );
function custom_query_vars( $public_query_vars ) {
$public_query_vars[] = 'option_id';
    return $public_query_vars;
}
add_filter( 'query_vars', 'custom_query_vars' );


/*レストラン予約送信先振り分け*/

function autoback_my_mail( $Mail_raw, $values, $Data ) {
    if ($Data->get( 'ご予約レストラン' ) == '洋食レストラン デルソーレ'){
        $Mail_raw->to = 'delsole@h-kyocera.co.jp';
		$Mail_raw->cc = 'm-suzuki@h-kyocera.co.jp';
		$Mail_raw->bcc = 'okuda@arionet.jp';
		$Mail_raw->subject = '【ホテル京セラ】洋食レストラン デルソーレ予約';
    } else if ($Data->get( 'ご予約レストラン' ) == '日本料理 京はるか'){
        $Mail_raw->to = 'kyoharuka@h-kyocera.co.jp';
		$Mail_raw->cc = 'm-suzuki@h-kyocera.co.jp';
		$Mail_raw->bcc = 'okuda@arionet.jp';
		$Mail_raw->subject = '【ホテル京セラ】日本料理 京はるか予約';
    } else if ($Data->get( 'ご予約レストラン' ) == 'バー アモーレ'){
        $Mail_raw->to = 'amole@h-kyocera.co.jp';
        $Mail_raw->cc = 'd-yokoyama@h-kyocera.co.jp';
		$Mail_raw->bcc = 'okuda@arionet.jp';
		$Mail_raw->subject = '【ホテル京セラ】バー アモーレ予約';
    } else if ($Data->get( 'ご予約レストラン' ) == 'バイキングレストラン 夢の国'){
        $Mail_raw->to = 'yume@h-kyocera.co.jp';
		$Mail_raw->cc = 'm-suzuki@h-kyocera.co.jp';
		$Mail_raw->bcc = 'okuda@arionet.jp';
		$Mail_raw->subject = '【ホテル京セラ】バイキングレストラン 夢の国 予約';
    }
    return $Mail_raw;
}
add_filter( 'mwform_admin_mail_mw-wp-form-9624', 'autoback_my_mail', 10, 3 );

//更新日表示
function last_modified_admin_column( $columns ) {
 $columns['modified-last'] =__( '最終更新日', 'aco' );
 return $columns;
}
add_filter( 'manage_edit-post_columns', 'last_modified_admin_column' );
 
function sortable_last_modified_column( $columns ) {
 $columns['modified-last'] = 'modified';
 return $columns;
}
add_filter( 'manage_edit-post_sortable_columns', 'sortable_last_modified_column' );
 
function last_modified_admin_column_content( $column_name, $post_id ) {
 if ( 'modified-last' != $column_name )
 return;
  
 $modified_date = the_modified_date( 'Y年Md日Ag時i分' );
 echo $modified_date;
}
add_action( 'manage_posts_custom_column', 'last_modified_admin_column_content', 10, 2 );



// HEIYA ADD
// カスタムフィールドの結果をRESTに追加
function wp_rest_api_alter() {
  $params = array(
    'get_callback'    => function($data, $field, $request, $type) {

      if (function_exists('get_fields')) {

        return get_fields($data['id']);

      }
      return [];

    },
    'update_callback' => null,
    'schema'          => null,
  );


  $post_types = get_post_types( '', 'names' );

  foreach ( $post_types as $post_type ) {

    register_rest_field( $post_type, 'fields', $params );

  }
}
add_action( 'rest_api_init', 'wp_rest_api_alter');


add_filter( 'wpcf7_support_html5_fallback', '__return_true' );

// HEIYA ADD
// REST API 並び順でソートできるように
add_filter('rest_endpoints', 'my_modify_rest_routes');
function my_modify_rest_routes( $routes ) {
  array_push( $routes['/wp/v2/posts'][0]['args']['orderby']['enum'], 'menu_order' );
  array_push( $routes['/wp/v2/posts'][0]['args']['orderby']['enum'], 'sticky' );
  return $routes;
}

