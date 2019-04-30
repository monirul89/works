<?php

// make a new customizer settings object
$bl_customizer_settings = new bl_customizer_settings();
 // read the sidebars
$currentSidebars = array();

/*  ----------------------------------------------------------------------------
    Template options
 */

$sidebars_array[''] = 'Default sidebar';
if (!empty($currentSidebars)) {
    foreach ($currentSidebars as $sidebar) {
        $sidebars_array[$sidebar] = $sidebar;
    }
}


$bl_sidebar_pos = array(
    '' => 'Sidebar right',
    'sidebar_left' => 'Sidebar left',
    'no_sidebar' => 'No sidebar',
);

/*  ------------------------------------------
    THEME OPTIONS
 */
$bl_customizer_settings->add_section('General');
$bl_customizer_settings->add_input('Theme Container Width', 'layout_width', 1280);
$bl_customizer_settings->add_bl_description('The maximum width of your website layout in pixels.', '1');
$bl_customizer_settings->add_image_upload('Favicon', 'favicon');
$bl_customizer_settings->add_image_upload('Apple Touch Icon (On iOS devices)', 'apple_touch_icon');
$bl_customizer_settings->add_bl_description('The icon that\'s displayed when your page is bookmarked on iOS devices', '2');
/*  ------------------------------------------
    HEADER OPTIONS
 */
$bl_customizer_settings->add_section('Header');
$bl_customizer_settings->add_image_upload('Logo', 'logo');
$bl_customizer_settings->add_input('Menu Height', 'menu_height', 60);


$bl_customizer_settings->add_select('Menu Type', 'menu_type', array(
    false               => 'Normal',
    'center'            => 'Center Aligned',
));
$bl_customizer_settings->add_select('Show Header Description', 'header_description', array(
    true => 'On',
    false => 'Off'
));
$bl_customizer_settings->add_bl_description('The maximum width of your website layout in pixels.', '1');
$bl_customizer_settings->add_select('Show Search in Menu', 'menu_search', array(
    true => 'On',
    false => 'Off'
));
$bl_customizer_settings->add_select('Enable Fixed Header', 'fixed_header', array(
    true => 'On',
    false => 'Off'
));
/*  ------------------------------------------
    BACKGROUND OPTIONS
 */
$bl_customizer_settings->add_section('Background');
$bl_customizer_settings->add_image_upload('Background Image', 'background_image');
$bl_customizer_settings->add_select('Background Stripe Overlay', 'background_stripe', array(
    false => 'Off',
    true => 'On'
));
$bl_customizer_settings->add_image_upload('Background Pattern (Custom)', 'background_pattern_custom');
$bl_customizer_settings->add_radio('Background Pattern', 'background_pattern', array(
    false => 'Off',
    'az_subtle' => 'Subtle',
    'cloth_alike' => 'Cloth',
    'cream_pixels' => 'Cream Pixels',
    'gray_jean' => 'Grey Jean',
    'grid' => 'Grid',
    'light_noise_diagonal' => 'Light Noise',
    'noise_lines' => 'Noise Lines',
    'pw_pattern' => 'PW Pattern',
    'shattered' => 'Shattered',
    'squairy_light' => 'Squairy Light',
    'textured_paper' => 'Textured Paper'
));

/*  ------------------------------------------
    COLOR OPTIONS
 */
$bl_customizer_settings->add_section('Colors & Icons');

$bl_customizer_settings->add_bl_separator('THEME COLORS<small>Main theme colors</small>', 'theme_colors_separator');
$bl_customizer_settings->add_color('Theme Color', 'theme_color', '#4db2ec');
$bl_customizer_settings->add_color('Background Color', 'background_color', '#EEEEEE');
$bl_customizer_settings->add_color('Header Background', 'header_color', '#ffffff');
$bl_customizer_settings->add_color('Header Font', 'header_font_color', '#5F6F81');
$bl_customizer_settings->add_color('Header Hover Background', 'header_hover_background_color', '#5F6F81');
$bl_customizer_settings->add_color('Header Hover Font', 'header_hover_font_color', '#ffffff');
$bl_customizer_settings->add_color('Widget Header Titles', 'widget_header_font_color', '#333333');
$bl_customizer_settings->add_color('Comments Background', 'comments_background_color', '#444444');
$bl_customizer_settings->add_color('Comments Titles', 'comments_title_font_color', '#ffffff');
$bl_customizer_settings->add_color('Footer Background', 'footer_background_color', '#333333');
$bl_customizer_settings->add_color('Footer Titles', 'footer_header_font_color', '#ffffff');
$bl_customizer_settings->add_color('Footer Font', 'footer_font_color', '#ffffff');

$bl_customizer_settings->add_bl_separator('POST FORMAT COLORS<small>Colors for specific post formats</small>', 'post_format_colors_separator');
$bl_customizer_settings->add_color('Standard Post Color', 'standard_post_color', '#556270');
$bl_customizer_settings->add_color('Gallery Post Color', 'gallery_post_color', '#4ECDC4');
$bl_customizer_settings->add_color('Link Post Color', 'link_post_color', '#FF6B6B');
$bl_customizer_settings->add_color('Quote Post Color', 'quote_post_color', '#C44D58');
$bl_customizer_settings->add_color('Audio Post Color', 'audio_post_color', '#5EBCF2');
$bl_customizer_settings->add_color('Video Post Color', 'video_post_color', '#A576F7');
$bl_customizer_settings->add_color('Status Post Color', 'status_post_color', '#556270');
$bl_customizer_settings->add_color('Sticky Post Color', 'sticky_post_color', '#90DB91');

$bl_customizer_settings->add_bl_separator('POST FORMAT ICONS<small>Icons for specific post formats</small>', 'post_format_icons_separator');
$bl_customizer_settings->add_bl_icon('Standard Post Icon', 'standard_post_icon', 'fa fa-calendar');
$bl_customizer_settings->add_bl_icon('Gallery Post Icon', 'gallery_post_icon', 'fa fa-picture-o');
$bl_customizer_settings->add_bl_icon('Link Post Icon', 'link_post_icon', 'fa fa-external-link');
$bl_customizer_settings->add_bl_icon('Quote Post Icon', 'quote_post_icon', 'fa fa-quote-left');
$bl_customizer_settings->add_bl_icon('Audio Post Icon', 'audio_post_icon', 'fa fa-volume-up');
$bl_customizer_settings->add_bl_icon('Video Post Icon', 'video_post_icon', 'fa fa-play');
$bl_customizer_settings->add_bl_icon('Status Post Icon', 'status_post_icon', 'fa fa-file-text-o');
$bl_customizer_settings->add_bl_icon('Facebook Post Icon', 'facebook_status_icon', 'fa fa-facebook');
$bl_customizer_settings->add_bl_icon('Twitter Post Icon', 'twitter_status_icon', 'fa fa-tumblr-square');
$bl_customizer_settings->add_bl_icon('Google Post Icon', 'google_status_icon', 'fa fa-google-plus');
$bl_customizer_settings->add_bl_icon('Sticky Post Icon', 'sticky_post_icon', 'fa fa-anchor');

/*  ------------------------------------------
    FONTS OPTIONS
 */
$bl_customizer_settings->add_section('Fonts');
$bl_customizer_settings->add_bl_font('Heading font', 'heading_font', 'Montserrat:400&subset=latin');
$bl_customizer_settings->add_bl_font('Main font', 'main_font', 'Lato:300,400,400italic,700,900');
$bl_customizer_settings->add_bl_font('Menu links font', 'menu_font', 'Lato:300,400,400italic,700,900');
$bl_customizer_settings->add_bl_font('Brand font', 'brand_font', 'Montserrat:400&subset=latin');
$bl_customizer_settings->add_select('Heading Font Line Spacing', 'heading_font_letter_spacing', array(
    '0em' => 'Normal',
    '-0.075em' => 'Tighten - 3',
    '-0.05em' => 'Tighten - 2',
    '-0.025em' => 'Tighten - 1',
    '0.025em' => 'Apart + 1',
    '0.05em' => 'Apart + 2',
    '0.075em' => 'Apart + 3'
));
$bl_customizer_settings->add_bl_description('The spacing between each letter on all headers', '1565467');
$bl_customizer_settings->add_select('Main Font Size', 'main_font_size', array(
    '18px' => '18px',
    '12px' => '12px',
    '14px' => '14px',
    '16px' => '16px',
    '20px' => '20px',
    '22px' => '22px',
    '24px' => '24px',
));
$bl_customizer_settings->add_bl_description('The size of the main text ( the content )', '156577');
$bl_customizer_settings->add_select('Main Font Line Height', 'main_font_line_height', array(
    '1.5'   => '1.5',
    '1.6'   => '1.6',
    '1.7'   => '1.7',
    '1.8'   => '1.8',
    '1.9'   => '1.9',
    '2'     => '2',
    '2.1'   => '2.1',
    '2.2'   => '2.2',
    '2.3'   => '2.3',
    '2.4'   => '2.4',
    '2.5'   => '2.5',
));
$bl_customizer_settings->add_bl_description('The spacing between each line of the text in posts', '1565741');

/*  ------------------------------------------
    BLOG OPTIONS
 */
$bl_customizer_settings->add_section('Blog');
$bl_customizer_settings->add_select('Blog Layout', 'blog_layout', array(
    'right_side' => 'Sidebar Right',
    'left_side' => 'Sidebar Left',
    'single' => 'Single'
));
$bl_customizer_settings->add_select('Blog Style', 'blog_style', array(
    false => 'Normal',
    'twocolumn' => 'Two Columns',
    'threecolumn' => 'Three Columns',
    'fourcolumn' => 'Four Columns',
    'fivecolumn' => 'Five Columns'
));
/*  ------------------------------------------
    POSTS & PAGES OPTIONS
 */
$bl_customizer_settings->add_section('Posts & Pages');
$bl_customizer_settings->add_bl_separator('POST OPTIONS<small>Custom options for posts</small>', 'post_options_separator');
$bl_customizer_settings->add_select('Post & Page Layout', 'post_page_layout', array(
    'right_side' => 'Sidebar Right',
    'left_side' => 'Sidebar Left',
    'single' => 'Single'
));
$bl_customizer_settings->add_bl_description('The default layout for Posts & Pages', '165467');
$bl_customizer_settings->add_select('Enable Excerpt:', 'enable_excerpt', array(
    false => 'Off',
    true => 'On',
));
$bl_customizer_settings->add_bl_description('Enable excerpt on posts (only on the front page)', '1778467');
$bl_customizer_settings->add_input('Excerpt Length', 'excerpt_length', 55);
$bl_customizer_settings->add_bl_description('Custom Excerpt Length (Default 55)', '1378467');
$bl_customizer_settings->add_select('Show Continue Reading:', 'show_continue_reading', array(
    true => 'On',
    false => 'Off',
));
$bl_customizer_settings->add_select('Show year in post date:', 'enable_show_year', array(
    false => 'Off',
    true => 'On',
));

$bl_customizer_settings->add_bl_separator('POST HEADER AREA<small>The Post Header Area (featured images/videos)</small>', 'post_header_separator');
$bl_customizer_settings->add_select('Full Screen Featured Image:', 'full_screen_featured_image', array(
    false => 'Off',
    'on' => 'On',
));
$bl_customizer_settings->add_bl_description('Set the default featured image type to full width (applies to posts not already saved using the theme)', '1371167');
$bl_customizer_settings->add_input('Full Screen Featured Image Height', 'full_screen_featured_image_height', 400);
$bl_customizer_settings->add_bl_description('Set the default height for the full screen featured image', '1471167');
$bl_customizer_settings->add_select('Show Share buttons:', 'show_share_buttons', array(
    true => 'On',
    false => 'Off',
));
$bl_customizer_settings->add_select('Show Facebook Share:', 'show_share_buttons_facebook', array(
    true => 'On',
    false => 'Off',
));
$bl_customizer_settings->add_select('Show Twitter Share:', 'show_share_buttons_twitter', array(
    true => 'On',
    false => 'Off',
));
$bl_customizer_settings->add_select('Show Google+ Share:', 'show_share_buttons_google', array(
    true => 'On',
    false => 'Off',
));
$bl_customizer_settings->add_select('Show LinkedIn Share:', 'show_share_buttons_linkedin', array(
    true => 'On',
    false => 'Off',
));
$bl_customizer_settings->add_select('Show Email Share:', 'show_share_buttons_email', array(
    true => 'On',
    false => 'Off',
));

$bl_customizer_settings->add_select('Show Share buttons On:', 'show_share_buttons_on', array(
    'all' => 'All',
    'only_front' => 'Only Front Page',
    'only_posts' => 'Only in Posts',
    'only_pages' => 'Only on Pages',
    'only_posts_front' => 'Only on Posts & Front Page',
    'only_pages_front' => 'Only on Pages & Front Page',
    'only_posts_pages' => 'Only on Posts & Pages',
));
$bl_customizer_settings->add_select('Display video thumbnail:', 'display_video_thumbnail', array(
    true => 'On',
    false => 'Off',
));
$bl_customizer_settings->add_bl_description('Check this to display a thumbnail of youtube videos instead of the video player on the front page', '1378887');
$bl_customizer_settings->add_select('Enable Image Comments:', 'image_comments', array(
    true => 'On',
    false => 'Off',
));
$bl_customizer_settings->add_select('Enable cropping of featured images on:', 'enable_cropping_on', array(
    'all' => 'All',
    'only_front' => 'Only Front Page',
    'only_posts' => 'Only in Posts',
    'only_pages' => 'Only on Pages',
    'only_posts_front' => 'Only on Posts & Front Page',
    'only_pages_front' => 'Only on Pages & Front Page',
    'only_posts_pages' => 'Only on Posts & Pages',
    'none' => 'None',
));

$bl_customizer_settings->add_bl_separator('POST FOOTER<small>The Post Footer area</small>', 'footer_separator');
$bl_customizer_settings->add_select('Show Tags:', 'show_tags', array(
    true => 'On',
    false => 'Off',
));
$bl_customizer_settings->add_bl_description('Show the tags associated with the post', '215567');
$bl_customizer_settings->add_select('Next Article:', 'next_article', array(
    true => 'On',
    false => 'Off',
));
$bl_customizer_settings->add_bl_description('Show the next article button inside posts', '215467');
$bl_customizer_settings->add_select('Author in footer:', 'author_footer', array(
    true => 'On',
    false => 'Off',
));
$bl_customizer_settings->add_bl_description('Author information at the bottom of each article', '115467');
$bl_customizer_settings->add_select('Social sharing in footer:', 'social_footer', array(
    true => 'On',
    false => 'Off',
));
$bl_customizer_settings->add_bl_description('Like, Tweet and +1 buttons at the bottom of each article', '115567');
$bl_customizer_settings->add_select('Related Posts:', 'related_posts', array(
    true => 'On',
    false => 'Off',
));
$bl_customizer_settings->add_bl_description('Show the related posts below the article', '115567');
$bl_customizer_settings->add_select('Show Regular Comments:', 'post_comments', array(
    true => 'On',
    false => 'Off',
));
$bl_customizer_settings->add_select('Show Facebook Comments:', 'facebook_comments', array(
    true => 'On',
    false => 'Off',
));
$bl_customizer_settings->add_select('Enable post footer on:', 'enable_post_footer_on', array(
    'all' => 'All',
    'only_front' => 'Only Front Page',
    'only_posts' => 'Only in Posts',
    'only_pages' => 'Only on Pages',
    'only_posts_front' => 'Only on Posts & Front Page',
    'only_pages_front' => 'Only on Pages & Front Page',
    'only_posts_pages' => 'Only on Posts & Pages',
    'none' => 'None',
));

$bl_customizer_settings->add_bl_separator('PAGE OPTIONS<small>Options for all pages</small>', 'page_options_separator');
$bl_customizer_settings->add_select('Page Comments:', 'page_comments', array(
    true => 'On',
    false => 'Off',
));
$bl_customizer_settings->add_bl_description('Enable Page Comments', '315567');

/*  ------------------------------------------
    SHARING OPTIONS
 */
$bl_customizer_settings->add_section('Sharing');

/*  ------------------------------------------
    CUSTOM CSS OPTIONS
 */
$bl_customizer_settings->add_section('Custom CSS & Javascript');
$bl_customizer_settings->add_bl_textarea('Custom CSS', 'custom_css', '');
$bl_customizer_settings->add_bl_textarea('Custom Javascript', 'custom_javascript', '');

/*  ------------------------------------------
    FOOTER OPTIONS
 */
$bl_customizer_settings->add_section('Footer');
$bl_customizer_settings->add_bl_textarea('Footer Text', 'footer_text', 'Copyright {year} · Theme design by the Bluthemes · www.bluthemes.com');

//add the global instance
bl_utilities::$bl_customizer_settings = $bl_customizer_settings;

?>
