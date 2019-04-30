<!DOCTYPE html>
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<?php
	// check if SEO plugin support is active
	if ( of_get_option('seo_plugin') ){ ?>
		<title><?php wp_title( '|', true, 'right' ); ?></title><?php
	}

/* Apple touch icon */
echo bl_utilities::get_option('bl_apple_touch_icon', false) ? '<link rel="apple-touch-icon" href="' . bl_utilities::get_option('bl_apple_touch_icon') . '" />' : ''; ?>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php
//render google tracking code if present
$google_analytics = of_get_option('google_analytics', false);
if($google_analytics){
	echo (strpos($google_analytics, '<script') === false) ? '<script>'.of_get_option('google_analytics').'</script>' : of_get_option('google_analytics');
}

// get the layout of the page
$layout = of_get_option('side_bar', 'right_side');

global $blu_css_options; ?>


<?php wp_head(); ?>
</head>
<body <?php body_class( 'menu-'.bl_utilities::get_option('bl_menu_type') ); ?>><?php
	if(bl_utilities::get_option('bl_background_stripe', false)){ ?> 
		<div id="stripe"></div><?php
	} 
	// Facebook Javascript SDK
	if(of_get_option('facebook_app_id')){ ?>
		<div id="fb-root"></div>
		<script>
		function get_facebook_sdk(){
			(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=<?php echo of_get_option('facebook_app_id'); ?>";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		}
		jQuery(function(){
			get_facebook_sdk();
		});
		</script>
	<?php }	 
?>
<?php
	// Advert above header
	$ad_header_mode = of_get_option('ad_header_mode', 'none');

	if($ad_header_mode != 'none'){
		echo '<div class="above_header">';
			if($ad_header_mode == 'image'){
				echo '<a href="'.of_get_option('ad_header_image_link').'" target="_blank"><img src="'.of_get_option('ad_header_image').'"></a>';
			}elseif($ad_header_mode == 'html'){
				echo apply_filters('shortcode_filter',do_shortcode(of_get_option('ad_header_code')));
			}
		echo '</div>';
	}
?>

<div id="page" class="site">
	<?php do_action( 'before' ); ?>
	<div id="masthead" class="masthead-container <?php echo bl_utilities::get_option('bl_fixed_header') ? 'fixed' : ''; ?>">
		<header>
			<ul id="menu-main" class="menu-main clearfix"><?php
				if(has_nav_menu('primary')){ ?>
			        <li class="menu-trigger">		
			        	<a href="#" class="open-menu"><i class="fa fa-bars"></i></a>
						<nav class="menu-wrapper"> 
							<div class="menu-scroller"><?php
						        if(bl_utilities::get_option('bl_menu_search')){ ?>
							        <div class="menu-search">
										<i class="fa fa-search sub-menu-icon"></i><?php echo get_search_form(); ?>
									</div><?php 
								}
					            wp_nav_menu( array(
					                'theme_location'    => 'primary',
					                'depth'             => 2,
					                'container'         => 'div',
					                // 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					                'fallback_cb'       => '',
					                'walker'            => new wp_bootstrap_navwalker())
					            ); 
								if(has_nav_menu('top-header')){ ?>
									<div class="visible-xs visible-sm"> <?php
							            wp_nav_menu( array(
							                'theme_location'    => 'top-header',
							                'depth'             => 2,
							                'container'         => 'div',
						                	'walker'            => new wp_bootstrap_navwalker())
							            ); ?>
						            </div><?php
						        } ?>
					        </div>
						</nav> 
					</li><?php
	        	}else if(has_nav_menu('top-header')){ ?>
		        	<li class="menu-trigger visible-xs visible-sm">	
			        	<a href="#" class="open-menu"><i class="fa fa-bars"></i></a>
						<nav class="menu-wrapper"> 
							<div class="menu-scroller"><?php
						        if(bl_utilities::get_option('bl_menu_search')){ ?>
							        <div class="menu-search">
										<i class="fa fa-search sub-menu-icon"></i><?php echo get_search_form(); ?>
									</div><?php 
								} ?>
								<div class="visible-xs visible-sm"> <?php
						            wp_nav_menu( array(
						                'theme_location'    => 'top-header',
						                'depth'             => 2,
						                'container'         => 'div',
					                	'walker'            => new wp_bootstrap_navwalker())
						            ); ?>
					            </div>
					        </div>
						</nav> 	
					</li><?php
	        	} ?>
				<li class="brand"><?php 
					$logo = bl_utilities::get_option('bl_logo');
					if ( !empty( $logo ) ) { ?>
						<a class="menu-brand brand-image" href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo $logo; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a><?php if( bl_utilities::get_option('bl_header_description') ){ ?><small class="hidden-xs"><?php bloginfo( 'description' ); ?></small><?php } ?><?php 
					}else{ ?>
						<a class="menu-brand brand-text" href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><h1><?php bloginfo( 'name' ); ?></h1></a><?php if( bl_utilities::get_option('bl_header_description') ){ ?><small class="hidden-xs"><?php bloginfo( 'description' ); ?></small><?php } ?><?php 
					}
					if(has_nav_menu('top-header')){?>
						<div class="visible-md visible-lg"> <?php
				            wp_nav_menu( array(
				                'theme_location'    => 'top-header',
				                'depth'             => 2,
				                'container'         => 'div',
				                'container_class' 	=> 'blu-top-header',
				                'walker'            => '')
				            ); ?>
						</div> <?php
		        	} ?>
				</li>
				<!-- <li><a href="http://bluthemes.com">Bluthemes</a></li> -->
			</ul>
			<!-- </div> -->
		</header><!-- #masthead .site-header -->
		

	</div>

	<div id="main">
			
			<script type="text/javascript">

				/* fix the padding on main depending on the situation */
				if(jQuery('body').hasClass('menu-center')){
				    jQuery('#main').css('padding-top', (jQuery('#menu-main').height()+30) + 'px');
				} 

			</script><?php
			// if it's a single post and the full screen featured image is turned on, then display it here! 
			if(is_single() and get_post_format() != 'status' and get_post_format() != 'quote' and get_post_format() != 'link'){
				$full_screen_featured_image = get_post_meta( $post->ID, 'bluth_full_screen_featured_image', true ) ? get_post_meta( $post->ID, 'bluth_full_screen_featured_image', true ) : bl_utilities::get_option('bl_full_screen_featured_image', false);
				$full_screen_featured_image_height = get_post_meta( $post->ID, 'bluth_full_screen_featured_image_height', true ) ? get_post_meta( $post->ID, 'bluth_full_screen_featured_image_height', true ) : bl_utilities::get_option('bl_full_screen_featured_image_height', 400);
				if(has_post_thumbnail() and $full_screen_featured_image == 'on'){ ?>
					<div class="full-screen-featured-image" style="height: <?php echo $full_screen_featured_image_height; ?>px; background-image:url('<?php echo get_post_image(get_the_ID(), 'original'); ?>');"> </div><?php
				}
			} ?> 
		<div class="container">
			<div id="primary" class="row <?php echo $layout; ?>">