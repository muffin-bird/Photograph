<?php

function post_has_archive($args, $post_type) { // 投稿内容変更
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'news';
        $args['label'] = 'News';
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10,2);

add_theme_support('post-thumbnails'); // アイキャッチ有効化