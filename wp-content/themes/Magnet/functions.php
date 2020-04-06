<?php

//カスタムメニュー
register_nav_menus( 
 array(
 'place_global' => 'グローバル',  
 'place_utility' => 'ユーティリティ',
 'place_sidebar' => 'サイドメニュー',
 'place_footer' => 'フッター',
 )
); 

add_theme_support('post-thumbnails');

//$thumbnail_id = get_post_thumbnail_id();
//$eye_img = the_post_thumbnail_url('medium');
?>