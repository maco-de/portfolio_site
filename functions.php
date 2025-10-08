<?php


/* ベーシック認証 */

function basic_auth($auth_list, $realm = "Restricted Area", $failed_text = "認証に失敗しました")
{
    if (isset($_SERVER['PHP_AUTH_USER']) and isset($auth_list[$_SERVER['PHP_AUTH_USER']])) {
        if ($auth_list[$_SERVER['PHP_AUTH_USER']] == $_SERVER['PHP_AUTH_PW']) {
            return $_SERVER['PHP_AUTH_USER'];
        }
    }
    header('WWW-Authenticate: Basic realm="' . $realm . '"');
    header('HTTP/1.0 401 Unauthorized');
    header('Content-type: text/html; charset=' . mb_internal_encoding());
    die($failed_text);
}


function add_files()
{
    /* CSSを読み込む */

    wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css');
    wp_enqueue_style('slick_theme', get_template_directory_uri() . '/css/slick-theme.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');

    if (is_page('dental_clinic', 'nail', 'inquiry')) {
        wp_dequeue_style('style', get_template_directory_uri() . '/css/style.css');
    }

    /* JS（jQuery）を読み込む */

    wp_enqueue_script('new_jquery', 'https://code.jquery.com/jquery-3.7.1.min.js');
    wp_enqueue_script('slick_min', get_template_directory_uri() . '/js/slick.min.js');
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js');

    if (is_page('dental_clinic', 'nail', 'inquiry')) {
        wp_dequeue_style('script', get_template_directory_uri() . '/js/script.js');
    }
}
add_action('wp_enqueue_scripts', 'add_files');


/* サイドバーを使用する設定 */

function widgetarea_init()
{
    register_sidebar(array(
        'name' => 'サイドバー',
        'id' => 'side-widget',
        'before_widget' => '<div id="%1$s" class="%2$s sidebar-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="sidebar-title">',
        'after_title' => '</h4>'
    ));
}
add_action('widgets_init', 'widgetarea_init');


/* 投稿のアーカイブページを作成する */

function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'news'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


/* カスタム投稿の追加 */

add_action('init', 'create_post_type');
function create_post_type()
{
    register_post_type( // カスタム投稿タイプの追加関数
        'works', //カスタム投稿タイプ名（半角英数字の小文字）
        array( //オプション（以下）
            'label' => '制作実績', // 管理画面上の表示（日本語でもOK）
            'public' => true, // 管理画面に表示するかどうかの指定
            'has_archive' => true, // 投稿した記事の一覧ページを作成する
            'menu_position' => 5, // 管理画面メニューの表示位置（投稿の下に追加）
            'show_in_rest' => true, // Gutenbergの有効化
            'supports' => array( // サポートする機能（以下）
                'title',  // タイトル
                'editor', // エディター
                'thumbnail', // アイキャッチ画像
                'revisions' // リビジョンの保存
            ),
        )
    );
}


/* メールフォームの textarea にひらがなが無ければ送信できない（contact form7） */
add_filter('wpcf7_validate_textarea', 'wpcf7_validation_textarea_hiragana', 10, 2);
add_filter('wpcf7_validate_textarea*', 'wpcf7_validation_textarea_hiragana', 10, 2);

function wpcf7_validation_textarea_hiragana($result, $tag)
{
    $name = $tag['name'];
    $value = (isset($_POST[$name])) ? (string) $_POST[$name] : '';

    if ($value !== '' && !preg_match('/[ぁ-ん]/u', $value)) {
        $result['valid'] = false;
        $result['reason'] = array($name => 'エラー / この内容は送信できません。');
    }

    return $result;
}


/* Contact Form 7の自動pタグ無効 */

add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
    return false;
}
