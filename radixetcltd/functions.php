<?php
/**
 * Radixetcltd functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Radixetcltd
 * @since 1.0
 */
/**
 * Radixetcltd only works in WordPress 4.7 or later.
 */
if (version_compare($GLOBALS['wp_version'], '4.7-alpha', '<')) {
    require get_template_directory() . '/inc/back-compat.php';
    return;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function radixetcltd_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/radixetcltd
     * If you're building a theme based on Radixetcltd, use a find and replace
     * to change 'radixetcltd' to the name of your theme in all the template files.
     */
    load_theme_textdomain('radixetcltd');

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
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    add_image_size('radixetcltd-featured-image', 2000, 1200, true);
    add_image_size('radixetcltd-image', 350, 350, true);
    add_image_size('radixetcltd-thumbnail-250', 400, 250, true);
    add_image_size('radixetcltd-thumbnail-avatar', 100, 100, true);

    // Set the default content width.
    $GLOBALS['content_width'] = 525;

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus(
            array(
                'main-menu' => __('Top Menu', 'radixetcltd'),
                'social-menu' => __('Social Links Menu', 'radixetcltd'),
            )
    );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
            'html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
            )
    );

    /*
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
    add_theme_support(
            'post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',
            )
    );

    // Add theme support for Custom Logo.
    add_theme_support(
            'custom-logo', array(
        'width' => 250,
        'height' => 250,
        'flex-width' => true,
            )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /*
     * This theme styles the visual editor to resemble the theme style,
     * specifically font, colors, and column width.
     */
    add_editor_style(array('assets/css/editor-style.css', radixetcltd_fonts_url()));

    // Load regular editor styles into the new block-based editor.
    add_theme_support('editor-styles');

    // Load default block styles.
    add_theme_support('wp-block-styles');

    // Add support for responsive embeds.
    add_theme_support('responsive-embeds');

    // Define and register starter content to showcase the theme on new sites.
    $starter_content = array(
        'widgets' => array(
            // Place three core-defined widgets in the sidebar area.
            'sidebar-1' => array(
                'text_business_info',
                'search',
                'text_about',
            ),
            // Add the core-defined business info widget to the footer 1 area.
            'sidebar-2' => array(
                'text_business_info',
            ),
            // Put two core-defined widgets in the footer 2 area.
            'sidebar-3' => array(
                'text_about',
                'search',
            ),
        ),
        // Specify the core-defined pages to create and add custom thumbnails to some of them.
        'posts' => array(
            'home',
            'about' => array(
                'thumbnail' => '{{image-sandwich}}',
            ),
            'contact' => array(
                'thumbnail' => '{{image-espresso}}',
            ),
            'blog' => array(
                'thumbnail' => '{{image-coffee}}',
            ),
            'homepage-section' => array(
                'thumbnail' => '{{image-espresso}}',
            ),
        ),
        // Create the custom image attachments used as post thumbnails for pages.
        'attachments' => array(
            'image-espresso' => array(
                'post_title' => _x('Espresso', 'Theme starter content', 'radixetcltd'),
                'file' => 'assets/images/espresso.jpg', // URL relative to the template directory.
            ),
            'image-sandwich' => array(
                'post_title' => _x('Sandwich', 'Theme starter content', 'radixetcltd'),
                'file' => 'assets/images/sandwich.jpg',
            ),
            'image-coffee' => array(
                'post_title' => _x('Coffee', 'Theme starter content', 'radixetcltd'),
                'file' => 'assets/images/coffee.jpg',
            ),
        ),
        // Default to a static front page and assign the front and posts pages.
        'options' => array(
            'show_on_front' => 'page',
            'page_on_front' => '{{home}}',
            'page_for_posts' => '{{blog}}',
        ),
        // Set the front page section theme mods to the IDs of the core-registered pages.
        'theme_mods' => array(
            'panel_1' => '{{homepage-section}}',
            'panel_2' => '{{about}}',
            'panel_3' => '{{blog}}',
            'panel_4' => '{{contact}}',
        ),
        // Set up nav menus for each of the two areas registered in the theme.
        'nav_menus' => array(
            // Assign a menu to the "top" location.
            'top' => array(
                'name' => __('Top Menu', 'radixetcltd'),
                'items' => array(
                    'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
                    'page_about',
                    'page_blog',
                    'page_contact',
                ),
            ),
            // Assign a menu to the "social" location.
            'social' => array(
                'name' => __('Social Links Menu', 'radixetcltd'),
                'items' => array(
                    'link_yelp',
                    'link_facebook',
                    'link_twitter',
                    'link_instagram',
                    'link_email',
                ),
            ),
        ),
    );

    /**
     * Filters Radixetcltd array of starter content.
     *
     * @since Radixetcltd 1.1
     *
     * @param array $starter_content Array of starter content.
     */
    $starter_content = apply_filters('radixetcltd_starter_content', $starter_content);

    add_theme_support('starter-content', $starter_content);
}

add_action('after_setup_theme', 'radixetcltd_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function radixetcltd_content_width() {

    $content_width = $GLOBALS['content_width'];

    // Get layout.
    $page_layout = get_theme_mod('page_layout');

    // Check if layout is one column.
    if ('one-column' === $page_layout) {
        if (radixetcltd_is_frontpage()) {
            $content_width = 644;
        } elseif (is_page()) {
            $content_width = 740;
        }
    }

    // Check if is single post and there is no sidebar.
    if (is_single() && !is_active_sidebar('sidebar-1')) {
        $content_width = 740;
    }

    /**
     * Filter Radixetcltd content width of the theme.
     *
     * @since Radixetcltd 1.0
     *
     * @param int $content_width Content width in pixels.
     */
    $GLOBALS['content_width'] = apply_filters('radixetcltd_content_width', $content_width);
}

add_action('template_redirect', 'radixetcltd_content_width', 0);

/**
 * Register custom fonts.
 */
function radixetcltd_fonts_url() {
    $fonts_url = '';

    /*
     * Translators: If there are characters in your language that are not
     * supported by Libre Franklin, translate this to 'off'. Do not translate
     * into your own language.
     */
    $libre_franklin = _x('on', 'Libre Franklin font: on or off', 'radixetcltd');

    if ('off' !== $libre_franklin) {
        $font_families = array();

        $font_families[] = 'Libre Franklin:300,300i,400,400i,600,600i,800,800i';

        $query_args = array(
            'family' => urlencode(implode('|', $font_families)),
            'subset' => urlencode('latin,latin-ext'),
        );

        $fonts_url = add_query_arg($query_args, 'https://fonts.googleapis.com/css');
    }

    return esc_url_raw($fonts_url);
}

/**
 * Add preconnect for Google Fonts.
 *
 * @since Radixetcltd 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function radixetcltd_resource_hints($urls, $relation_type) {
    if (wp_style_is('radixetcltd-fonts', 'queue') && 'preconnect' === $relation_type) {
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin',
        );
    }

    return $urls;
}

add_filter('wp_resource_hints', 'radixetcltd_resource_hints', 10, 2);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function radixetcltd_widgets_init() {
    register_sidebar(
            array(
                'name' => __('Blog Sidebar', 'radixetcltd'),
                'id' => 'sidebar-1',
                'description' => __('Add widgets here to appear in your sidebar on blog posts and archive pages.', 'radixetcltd'),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget' => '</section>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>',
            )
    );

    register_sidebar(
            array(
                'name' => __('Footer 1', 'radixetcltd'),
                'id' => 'sidebar-2',
                'description' => __('Add widgets here to appear in your footer.', 'radixetcltd'),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget' => '</section>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>',
            )
    );

    register_sidebar(
            array(
                'name' => __('Footer 2', 'radixetcltd'),
                'id' => 'sidebar-3',
                'description' => __('Add widgets here to appear in your footer.', 'radixetcltd'),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget' => '</section>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>',
            )
    );
}

add_action('widgets_init', 'radixetcltd_widgets_init');

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since Radixetcltd 1.0
 *
 * @param string $link Link to single post/page.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function radixetcltd_excerpt_more($link) {
    if (is_admin()) {
        return $link;
    }

    $link = sprintf(
            '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>', esc_url(get_permalink(get_the_ID())),
            /* translators: %s: Name of current post */ sprintf(__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'radixetcltd'), get_the_title(get_the_ID()))
    );
    return ' &hellip; ' . $link;
}

add_filter('excerpt_more', 'radixetcltd_excerpt_more');

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Radixetcltd 1.0
 */
function radixetcltd_javascript_detection() {
    echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}

add_action('wp_head', 'radixetcltd_javascript_detection', 0);

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function radixetcltd_pingback_header() {
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">' . "\n", esc_url(get_bloginfo('pingback_url')));
    }
}

add_action('wp_head', 'radixetcltd_pingback_header');

/**
 * Display custom color CSS.
 */
function radixetcltd_colors_css_wrap() {
    if ('custom' !== get_theme_mod('colorscheme') && !is_customize_preview()) {
        return;
    }

    require_once( get_parent_theme_file_path('/inc/color-patterns.php') );
    $hue = absint(get_theme_mod('colorscheme_hue', 250));

    $customize_preview_data_hue = '';
    if (is_customize_preview()) {
        $customize_preview_data_hue = 'data-hue="' . $hue . '"';
    }
    ?>
    <style type="text/css" id="custom-theme-colors" <?php echo $customize_preview_data_hue; ?>>
    <?php echo radixetcltd_custom_colors_css(); ?>
    </style>
    <?php
}

add_action('wp_head', 'radixetcltd_colors_css_wrap');

/**
 * Enqueues scripts and styles.
 */
function radixetcltd_scripts() {
    wp_enqueue_style('radixetcltd-style', get_stylesheet_uri());
    // Add custom fonts, used in the main stylesheet.
    wp_enqueue_style('radixetcltd-fonts', radixetcltd_fonts_url(), array(), null);
    // Theme stylesheet.
    
    // Theme block stylesheet.
    wp_enqueue_style('radixetcltd-bootstrap-min', get_theme_file_uri('/assets/css/bootstrap.min.css'), array('radixetcltd-style'), 'v3.3.5');
       
// Theme block stylesheet.
    wp_enqueue_style('radixetcltd-bootstrap-theme-min', get_theme_file_uri('/assets/css/bootstrap-theme.min.css'), array('radixetcltd-style'), 'v3.3.5');
    // Theme block stylesheet.
    wp_enqueue_style('radixetcltd-animate-style', get_theme_file_uri('/assets/css/animate.css'), array('radixetcltd-style'), '3.5.1');

    wp_enqueue_style('radixetcltd-custom-style', get_theme_file_uri('/assets/css/custom-style.css'), array('radixetcltd-style'), '0.0.1');
    // Theme block stylesheet.
    wp_enqueue_style('radixetcltd-block-style', get_theme_file_uri('/assets/css/blocks.css'), array('radixetcltd-style'), '1.1');
    
    wp_enqueue_style('radixetcltd-block-style', get_theme_file_uri('/assets/css/blocks.css'), array('radixetcltd-style'), '1.1');

    

    // Load the dark colorscheme.
    if ('dark' === get_theme_mod('colorscheme', 'light') || is_customize_preview()) {
        wp_enqueue_style('radixetcltd-colors-dark', get_theme_file_uri('/assets/css/colors-dark.css'), array('radixetcltd-style'), '1.0');
    }

    // Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
    if (is_customize_preview()) {
        wp_enqueue_style('radixetcltd-ie9', get_theme_file_uri('/assets/css/ie9.css'), array('radixetcltd-style'), '1.0');
        wp_style_add_data('radixetcltd-ie9', 'conditional', 'IE 9');
    }

    // Load the Internet Explorer 8 specific stylesheet.
    wp_enqueue_style('radixetcltd-ie8', get_theme_file_uri('/assets/css/ie8.css'), array('radixetcltd-style'), '1.0');
    wp_style_add_data('radixetcltd-ie8', 'conditional', 'lt IE 9');

    // Load the html5 shiv.
    wp_enqueue_script('html5', get_theme_file_uri('/assets/js/html5.js'), array(), '3.7.3');
    wp_script_add_data('html5', 'conditional', 'lt IE 9');

    wp_enqueue_script('radixetcltd-skip-link-focus-fix', get_theme_file_uri('/assets/js/skip-link-focus-fix.js'), array(), '1.0', true);

    $radixetcltd_l10n = array(
        'quote' => radixetcltd_get_svg(array('icon' => 'quote-right')),
    );

    if (has_nav_menu('top')) {
        wp_enqueue_script('radixetcltd-navigation', get_theme_file_uri('/assets/js/navigation.js'), array('jquery'), '1.0', true);
        $radixetcltd_l10n['expand'] = __('Expand child menu', 'radixetcltd');
        $radixetcltd_l10n['collapse'] = __('Collapse child menu', 'radixetcltd');
        $radixetcltd_l10n['icon'] = radixetcltd_get_svg(
                array(
                    'icon' => 'angle-down',
                    'fallback' => true,
                )
        );
    }

    wp_enqueue_script('radixetcltd-global', get_theme_file_uri('/assets/js/global.js'), array('jquery'), '1.0', true);

    wp_enqueue_script('jquery-scrollto', get_theme_file_uri('/assets/js/jquery.scrollTo.js'), array('jquery'), '2.1.2', true);


    wp_enqueue_script('jquery-jquery-2-2-0-min', get_theme_file_uri('/assets/js/jquery-2.2.0.min.js'), array('jquery'), 'v2.2.0', true);
    wp_enqueue_script('jquery-jquery-ui-js', get_theme_file_uri('/assets/js/jquery-ui.js'), array('jquery'), 'v1.12.1', true);
    wp_enqueue_script('jquery-bootstrap.min-js', get_theme_file_uri('/assets/js/bootstrap.min.js'), array('jquery'), 'v3.3.5', true);
    wp_enqueue_script('jquery-theme', get_theme_file_uri('/assets/js/theme.js'), array('jquery'), '0.0.1', true);
    wp_enqueue_script('jquery-custom', get_theme_file_uri('/assets/js/custom.js'), array('jquery'), '0.0.1', true);
//    zoom
    wp_enqueue_script('jquery-xzoom.min', get_theme_file_uri('/assets/zoom/xzoom.min.js'), array('jquery'), '0.0.1', true);
    wp_enqueue_script('jquery-xzoom', get_theme_file_uri('/assets/zoom/xzoom.js'), array('jquery'), '0.0.1', true);
    wp_enqueue_script('jquery-setup', get_theme_file_uri('/assets/zoom/setup.js'), array('jquery'), '0.0.1', true);


    wp_localize_script('radixetcltd-skip-link-focus-fix', 'radixetcltdScreenReaderText', $radixetcltd_l10n);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
     
}

add_action('wp_enqueue_scripts', 'radixetcltd_scripts', 99);

/**
 * Enqueues styles for the block-based editor.
 *
 * @since Radixetcltd 1.8
 */
function radixetcltd_block_editor_styles() {
    // Block styles.
    wp_enqueue_style('radixetcltd-block-editor-style', get_theme_file_uri('/assets/css/editor-blocks.css'), array(), '1.1');
    // Add custom fonts.
    wp_enqueue_style('radixetcltd-fonts', radixetcltd_fonts_url(), array(), null);
}

add_action('enqueue_block_editor_assets', 'radixetcltd_block_editor_styles');

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images.
 *
 * @since Radixetcltd 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function radixetcltd_content_image_sizes_attr($sizes, $size) {
    $width = $size[0];

    if (740 <= $width) {
        $sizes = '(max-width: 706px) 89vw, (max-width: 767px) 82vw, 740px';
    }

    if (is_active_sidebar('sidebar-1') || is_archive() || is_search() || is_home() || is_page()) {
        if (!( is_page() && 'one-column' === get_theme_mod('page_options') ) && 767 <= $width) {
            $sizes = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
        }
    }

    return $sizes;
}

add_filter('wp_calculate_image_sizes', 'radixetcltd_content_image_sizes_attr', 10, 2);

/**
 * Filter the `sizes` value in the header image markup.
 *
 * @since Radixetcltd 1.0
 *
 * @param string $html   The HTML image tag markup being filtered.
 * @param object $header The custom header object returned by 'get_custom_header()'.
 * @param array  $attr   Array of the attributes for the image tag.
 * @return string The filtered header image HTML.
 */
function radixetcltd_header_image_tag($html, $header, $attr) {
    if (isset($attr['sizes'])) {
        $html = str_replace($attr['sizes'], '100vw', $html);
    }
    return $html;
}

add_filter('get_header_image_tag', 'radixetcltd_header_image_tag', 10, 3);

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails.
 *
 * @since Radixetcltd 1.0
 *
 * @param array $attr       Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size       Registered image size or flat array of height and width dimensions.
 * @return array The filtered attributes for the image markup.
 */
function radixetcltd_post_thumbnail_sizes_attr($attr, $attachment, $size) {
    if (is_archive() || is_search() || is_home()) {
        $attr['sizes'] = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
    } else {
        $attr['sizes'] = '100vw';
    }

    return $attr;
}

add_filter('wp_get_attachment_image_attributes', 'radixetcltd_post_thumbnail_sizes_attr', 10, 3);

/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 * @since Radixetcltd 1.0
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */
function radixetcltd_front_page_template($template) {
    return is_home() ? '' : $template;
}

add_filter('frontpage_template', 'radixetcltd_front_page_template');

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Radixetcltd 1.4
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function radixetcltd_widget_tag_cloud_args($args) {
    $args['largest'] = 1;
    $args['smallest'] = 1;
    $args['unit'] = 'em';
    $args['format'] = 'list';

    return $args;
}

add_filter('widget_tag_cloud_args', 'radixetcltd_widget_tag_cloud_args');

/**
 * Get unique ID.
 *
 * This is a PHP implementation of Underscore's uniqueId method. A static variable
 * contains an integer that is incremented with each call. This number is returned
 * with the optional prefix. As such the returned value is not universally unique,
 * but it is unique across the life of the PHP process.
 *
 * @since Radixetcltd 2.0
 * @see wp_unique_id() Themes requiring WordPress 5.0.3 and greater should use this instead.
 *
 * @staticvar int $id_counter
 *
 * @param string $prefix Prefix for the returned ID.
 * @return string Unique ID.
 */
function radixetcltd_unique_id($prefix = '') {
    static $id_counter = 0;
    if (function_exists('wp_unique_id')) {
        return wp_unique_id($prefix);
    }
    return $prefix . (string) ++$id_counter;
}

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path('/inc/custom-header.php');

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path('/inc/template-tags.php');

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path('/inc/template-functions.php');

/**
 * Customizer additions.
 */
require get_parent_theme_file_path('/inc/customizer.php');

/**
 * SVG icons functions and filters.
 */
require get_parent_theme_file_path('/inc/icon-functions.php');
require 'inc/custom_post.php';

function wpdocs_excerpt_more($more) {
    return '<a href="' . get_the_permalink() . '" rel="nofollow" class="readMore"> Read More...</a>';
}

add_filter('excerpt_more', 'wpdocs_excerpt_more');

function tn_custom_excerpt_length($length) {
    return 14;
}

add_filter('excerpt_length', 'tn_custom_excerpt_length', 999);

// Add term page
function pippin_taxonomy_add_new_meta_field() {
    // this will add the custom meta field to the add new term page
    ?>
    <div class="form-field">
        <label for="term_meta[custom_term_meta]"><?php _e('Example meta field', 'pippin'); ?></label>
        <input type="text" name="term_meta[custom_term_meta]" id="term_meta[custom_term_meta]" value="">
        <p class="description"><?php _e('Enter a value for this field', 'pippin'); ?></p>
    </div>
    <?php
}

add_action('category_add_form_fields', 'pippin_taxonomy_add_new_meta_field', 10, 2);
