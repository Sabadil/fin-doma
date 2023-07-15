<?php
/**
 * main-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package main-theme
 */

if ( ! function_exists( 'main_theme_setup' ) ) :
	function main_theme_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'menus' );
		add_theme_support( 'post-thumbnails' );
        //add_theme_support( 'wp-block-styles' );
	}
endif;
add_action( 'after_setup_theme', 'main_theme_setup' );


/**
 * Enqueue scripts and styles.
 */
function enqueue_versioned_script( $handle, $src = false, $deps = array(), $in_footer = false ) {
	wp_enqueue_script( $handle, get_stylesheet_directory_uri() . $src, $deps, filemtime( get_stylesheet_directory() . $src ), $in_footer );
}
function enqueue_versioned_style( $handle, $src = false, $deps = array(), $media = 'all' ) {
	wp_enqueue_style( $handle, get_stylesheet_directory_uri() . $src, $deps = array(), filemtime( get_stylesheet_directory() . $src ), $media );
}

function main_theme_scripts() {
	enqueue_versioned_style( 'main-theme-style', '/style.css' );

	wp_enqueue_style( 'slick.css', get_template_directory_uri() . '/slick/slick.css' );
	wp_enqueue_style( 'fancybox.css', get_template_directory_uri() . '/css/jquery.fancybox.min.css' );

	wp_enqueue_script( 'jquery-3.2.1', get_template_directory_uri() . '/js/jquery-3.2.1.min.js' );
	wp_enqueue_script( 'slick.min.js', get_template_directory_uri() . '/slick/slick.min.js' );
	wp_enqueue_script( 'fancybox.min.js', get_template_directory_uri() . '/js/jquery.fancybox.min.js' );
	wp_enqueue_script( 'maskedinput', get_template_directory_uri() . '/js/jquery.maskedinput.min.js' );
	enqueue_versioned_script( 'scripts','/js/script.js' );
}
add_action( 'wp_enqueue_scripts', 'main_theme_scripts' );


add_action( 'wp_footer', 'blankslate_footer' );
function blankslate_footer() {
    ?>
    <script>
        jQuery(document).ready(function($) {
            var deviceAgent = navigator.userAgent.toLowerCase();
            if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
                $("html").addClass("ios");
                $("html").addClass("mobile");
            }
            if (deviceAgent.match(/(Android)/)) {
                $("html").addClass("android");
                $("html").addClass("mobile");
            }
            if (navigator.userAgent.search("MSIE") >= 0) {
                $("html").addClass("ie");
            }
            else if (navigator.userAgent.search("Chrome") >= 0) {
                $("html").addClass("chrome");
            }
            else if (navigator.userAgent.search("Firefox") >= 0) {
                $("html").addClass("firefox");
            }
            else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
                $("html").addClass("safari");
            }
            else if (navigator.userAgent.search("Opera") >= 0) {
                $("html").addClass("opera");
            }
        });
    </script>
    <?php
}






// Страница опций
function ea_acf_options_page() {
	if ( function_exists( 'acf_add_options_page' ) ) {
        acf_add_options_page(array(
            'page_title'    => 'Настройки сайта',
            'menu_title'    => 'Настройки сайта',
            'menu_slug'     => 'site-general-settings',
            'capability'    => 'manage_options',
            'redirect'      => false
        ));
	}
}
add_action( 'init', 'ea_acf_options_page' );


function remove_menus(){
  remove_menu_page( 'index.php' );                  //Консоль
  remove_menu_page( 'edit-comments.php' );          //Комментарии
  remove_menu_page( 'tools.php' );                  //Инструменты
}
add_action( 'admin_menu', 'remove_menus' );


add_action('admin_head', 'moi_novii_style');
function moi_novii_style() {
	print '<style>
	/*Стили в админку*/
	#wp-admin-bar-updates, #wp-admin-bar-comments, #update-nag, .update-nag {display:none !important;}
	</style>';
}


// function cc_mime_types($mimes) {
// 	$mimes['svg'] = 'image/svg+xml';
// 	return $mimes;
// }
// add_filter('upload_mimes', 'cc_mime_types');



// Скрываем уведомления о новой версии WordPress
if ( 1 ) {

    // Общий счётчик обновлений в админ-баре
    add_action( 'admin_bar_menu', function ( $wp_adminbar ) {
        $wp_adminbar->remove_node( 'updates' );
    }, 999 );

    add_action( 'admin_menu', function () {

        // "Доступен WordPress X.X" в Консоле - Для Single установки
        remove_action( 'admin_notices', 'update_nag', 3 );

        // "Доступен WordPress X.X" в Консоле - Для Multisite установки
        remove_action( 'network_admin_notices', 'update_nag', 3 );

        // "Скачать версию X.X" в футере
        remove_action( 'update_footer', 'core_update_footer' );

        // Общий счётчик обновлений в админ-меню
        remove_submenu_page( 'index.php', 'update-core.php' );

        // Счётчик плагинов для обновления в админ-меню
        $GLOBALS['menu'][65][0] = __( 'Plugins' );

    }, 999 );

    // "Обновление до X.X" в виджете "На виду" в Консоле
    add_action( 'admin_head-index.php', function () {
        ?>
        <style>
            #wp-version-message .button {
                display: none;
            }
        </style>
        <?php
    } );

}


/**
 * Отключаем принудительную проверку новых версий WP, плагинов и темы в админке,
 * чтобы она не тормозила, когда долго не заходил и зашел...
 * Все проверки будут происходить незаметно через крон или при заходе на страницу: "Консоль > Обновления".
 *
 * @see https://wp-kama.ru/filecode/wp-includes/update.php
 * @author Kama (https://wp-kama.ru)
 * @version 1.1
 */
if( is_admin() ){
    // отключим проверку обновлений при любом заходе в админку...
    remove_action( 'admin_init', '_maybe_update_core' );
    remove_action( 'admin_init', '_maybe_update_plugins' );
    remove_action( 'admin_init', '_maybe_update_themes' );

    // отключим проверку обновлений при заходе на специальную страницу в админке...
    remove_action( 'load-plugins.php', 'wp_update_plugins' );
    remove_action( 'load-themes.php', 'wp_update_themes' );

    // оставим принудительную проверку при заходе на страницу обновлений...
    //remove_action( 'load-update-core.php', 'wp_update_plugins' );
    //remove_action( 'load-update-core.php', 'wp_update_themes' );

    // внутренняя страница админки "Update/Install Plugin" или "Update/Install Theme" - оставим не мешает...
    //remove_action( 'load-update.php', 'wp_update_plugins' );
    //remove_action( 'load-update.php', 'wp_update_themes' );

    // событие крона не трогаем, через него будет проверяться наличие обновлений - тут все отлично!
    //remove_action( 'wp_version_check', 'wp_version_check' );
    //remove_action( 'wp_update_plugins', 'wp_update_plugins' );
    //remove_action( 'wp_update_themes', 'wp_update_themes' );

    /**
     * отключим проверку необходимости обновить браузер в консоли - мы всегда юзаем топовые браузеры!
     * эта проверка происходит раз в неделю...
     * @see https://wp-kama.ru/function/wp_check_browser_version
     */
    add_filter( 'pre_site_transient_browser_'. md5( $_SERVER['HTTP_USER_AGENT'] ), '__return_empty_array' );
}


// отключаем авто-обновления по типу
add_filter( 'auto_update_core', '__return_false' );       // обновление ядра
add_filter( 'auto_update_theme', '__return_false' );      // обновление тем
add_filter( 'auto_update_plugin', '__return_false' );     // обновление плагинов
add_filter( 'auto_update_translation', '__return_false'); // обновление файлов перевода


// Отключаем дефолтные размеры wp
function dco_remove_default_image_sizes( $sizes) {
    return array_diff( $sizes, array(
        'thumbnail',
        'medium',
        'medium_large',
        'large',
    ) );
}
add_filter('intermediate_image_sizes', 'dco_remove_default_image_sizes');

// Размеры миниатюр
add_image_size( 'Фото 300px', 300, 9999 );
add_image_size( 'Фото 500px', 500, 9999 );
add_image_size( 'Фото 768px', 768, 9999 );
add_image_size( 'Фото 1024px', 1024, 9999 );