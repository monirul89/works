<?php
$full_screen_featured_image = get_post_meta( $post->ID, 'bluth_full_screen_featured_image', true ) ? get_post_meta( $post->ID, 'bluth_full_screen_featured_image', true ) : bl_utilities::get_option('bl_full_screen_featured_image', false);
$featured_image_size = 'original';
$max_height = '';

// echo the sticky icon if it's a sticky
if(is_sticky() && (is_home() || is_front_page())){ ?> <a href="#" class="sticky-icon" title="<?php _e('Sticky Post', 'bluth'); ?>"><i class="<?php echo bl_utilities::get_option('bl_sticky_post_icon'); ?>"></i></a> <?php }
// if the conditions are right then disable cropping
if((is_single() && in_array(bl_utilities::get_option('bl_enable_cropping_on'), array('all','only_posts','only_posts_front','only_posts_pages'))) or (is_page() && in_array(bl_utilities::get_option('bl_enable_cropping_on'), array('all','only_pages','only_pages_front','only_posts_pages'))) or (is_home() or is_front_page()) && in_array(bl_utilities::get_option('bl_enable_cropping_on'), array('all','only_front','only_posts_front','only_pages_front'))){
	$featured_image_size = 'single-large';	
}else{
	$max_height = 'max-height: none;';
}

if(is_page() && has_post_thumbnail() && get_post_format() == ''){ ?>
	<div class="entry-image" style="<?php echo $max_height; ?>">
		<?php the_post_thumbnail( $featured_image_size ); ?>
	</div><?php
}
elseif ( has_post_thumbnail() || get_post_format() == 'video' || get_post_format() == 'gallery' || get_post_format() == 'status' || get_post_format() == 'link' ) {  
	
	/*
		VIDEO
	*/
	if(get_post_format() == 'video' and $video_url = get_post_meta( $post->ID, 'blu_video_url', true )){ ?>
		<div class="entry-video"><?php
			global $wp_embed;
			$video_url = html_entity_decode($video_url);
			$post_icon = bl_utilities::get_option('bl_video_icon', 'fa fa-youtube-play');
			
			if($video_url != strip_tags($video_url)){
				$content = preg_replace('#\<iframe(.*?)\ssrc\=\"(.*?)\"(.*?)\>#i', '<iframe$1 src="$2?wmode=opaque"$3>', $content);
				$content = preg_replace('#\<iframe(.*?)\ssrc\=\"(.*?)\?(.*?)\?(.*?)\"(.*?)\>#i', '<iframe$1 src="$2?$3&$4"$5>', $content);
			}else{ 
				$content = $wp_embed->run_shortcode('[embed]' . $video_url . '[/embed]' ); 
			}

			// GET VIDEO THUMBNAIL IF THAT OPTION IS CHECKED (AND IS ON FRONT PAGE)
			if(bl_utilities::get_option('bl_display_video_thumbnail') and (is_home() or is_front_page())){ ?>
				<div class="entry-image" style="<?php echo $max_height; ?>">
					<a href="<?php the_permalink(); ?>" class="image-comment" title="<?php the_title(); ?>" rel="bookmark">
						<i class="<?php echo $post_icon; ?>"></i>
						<img src="<?php echo get_post_video_thumbnail( $post->ID ); ?>">
						<input type="hidden" data-iframe="<?php echo $content; ?>">
					</a>
				</div><?php
			}else{
				echo $content;
			} ?>
		</div><?php	

	/*
		GALLERY
	*/
	}elseif(get_post_format() == 'gallery' and $images = get_post_meta( $post->ID, 'blu_gallery', true )){  ?>
			<div class="swiper-container swiper-gallery">
			    <a class="arrow-left" href="#"></a>
    			<a class="arrow-right" href="#"></a>
	    		<div class="swiper-pagination"></div>
				<div class="swiper-wrapper"><?php 
					foreach( $images as $image ){ ?> 
						<div class="swiper-slide swiper-slide-large" style="width:763px;"> 
							<div class="entry-head image-comment" data-original="<?php echo $image['gallery_src']; ?>"> <?php 
								if(is_single()){ $featured_image_size = 'original'; }
								$gallery_image = get_post_image( get_the_ID(), $featured_image_size, false, $image['gallery_id']);  ?>
								<img class="img-responsive" src="<?php echo $gallery_image[0]; ?>">
							</div>
						</div><?php 
					} ?>
				</div> <!-- swiper-wrapper -->
			</div> <!-- swiper-container --> <?php

	/*
		QUOTE
	*/
	}elseif(get_post_format() == 'quote'){ ?>
		<div class="entry-image" style="<?php echo $max_height; ?>"><?php
			$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false, '' ); 
			$quote_text = get_post_meta( $post->ID, 'blu_quote_text', true );
			$quote_author = get_post_meta( $post->ID, 'blu_quote_author', true );
			$quote_url = get_post_meta( $post->ID, 'blu_quote_src', true );

			if(!is_single()){ ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php
			} ?>
			
				<div class="quote-area">
					<h1 class="quote-text"><?php echo $quote_text; ?></h1>
					<div class="quote-author"><a href="<?php echo $quote_url; ?>"><?php echo $quote_author; ?></a></div>
				</div>
				<?php the_post_thumbnail( $featured_image_size ); 
			if(!is_single()){ ?>
			</a><?php
			} ?>
		</div>
		<a href="#" class="open-entry-image"><i class="fa fa-angle-down"></i></a><?php

	/*
		STATUS
	*/
	}elseif(get_post_format() == 'status'){
		$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false, '' ); 
		if(empty($src)){ $status_class = ''; }else{ $status_class = ' background '; }

		// if it's a facebook status
		if( get_post_meta( $post->ID, 'bluth_facebook_status', true ) ){
			$status_class .= 'bl_facebook';
			$post_icon = bl_utilities::get_option('bl_facebook_status_icon', 'fa fa-facebook');
			$post_icon_color = ' color: #3B5998; opacity: 1;';
		}
		else if( get_post_meta( $post->ID, 'bluth_twitter_status', true ) ){
			$status_class .= 'bl_twitter';
			$post_icon = bl_utilities::get_option('bl_twitter_status_icon', 'fa fa-twitter');
			$post_icon_color = ' color: #1DCAFF; opacity: 1;';
		}
		else if( get_post_meta( $post->ID, 'bluth_google_status', true ) ){
			$status_class .= 'bl_google';
			$post_icon = bl_utilities::get_option('bl_google_status_icon', 'fa fa-google-plus');
			$post_icon_color = ' color: #CD3C2A; opacity: 1;';
		} ?>

		<div class="entry-image <?php echo $status_class; ?>" style="<?php echo $max_height; ?> background-image:url('<?php echo $src[0]; ?>'); background-size: cover;"> <?php 
			if( get_post_meta( $post->ID, 'bluth_facebook_status', true ) ){
				if(is_single()){
					echo str_replace( '&#039;', '\'', html_entity_decode( get_post_meta( $post->ID, 'bluth_facebook_status', true ) ) );
				}else{
					$facebook_store = str_replace( '&#039;', '\'', html_entity_decode( get_post_meta( $post->ID, 'bluth_facebook_status', true ) ) );
					$facebook_store = htmlentities($facebook_store);
					echo '<div class="facebook-store" data-code="' . $facebook_store . '"></div>';
				}
			}
			else if( get_post_meta( $post->ID, 'bluth_twitter_status', true ) ){
				if(is_single()){
					echo html_entity_decode( get_post_meta( $post->ID, 'bluth_twitter_status', true ) );
				}else{
					$twitter_store = html_entity_decode( get_post_meta( $post->ID, 'bluth_twitter_status', true ) );
					$twitter_store = htmlentities($twitter_store);
					echo '<div class="twitter-store" data-code="' . $twitter_store . '"></div>';
				}
			}
			else if( get_post_meta( $post->ID, 'bluth_google_status', true ) ){
				if(is_single()){
					echo html_entity_decode( get_post_meta( $post->ID, 'bluth_google_status', true ) );
				}else{
					$google_store = html_entity_decode( get_post_meta( $post->ID, 'bluth_google_status', true ) );
					$google_store = htmlentities($google_store);
					echo '<div class="google-store" data-code="' . $google_store . '"></div>';
				}
			}?>
		</div>
		<a href="#" class="open-entry-image"><i class="fa fa-angle-down"></i></a><?php

	/*
		LINK
	*/
	}elseif(get_post_format() == 'link'){ 
		$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false, '' );
		if(empty($src)){ $link_class = ''; }else{ $link_class = 'background'; }
		$post_icon = bl_utilities::get_option('bl_link_icon', 'fa fa-link');
		$link_url = html_entity_decode( get_post_meta($post->ID, 'blu_link_url', true ) ); ?>

		<div class="entry-image <?php echo $link_class; ?>" style="<?php echo $max_height; ?> background-image:url('<?php echo $src[0]; ?>'); background-size: cover;">
			<a href="<?php echo $link_url; ?>" title="<?php the_title(); ?>" rel="bookmark" target="_blank">
				<h1><?php echo '<i class="'. $post_icon . '"></i> '; the_title(); ?></h1>
			</a>
		</div>
		<a href="#" class="open-entry-image"><i class="fa fa-angle-down"></i></a><?php

	/*
		STANDARD
	*/
	}elseif($full_screen_featured_image != 'on' or !is_single()){ ?>
		<div class="entry-image" style="<?php echo $max_height; ?>"><?php
			$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'original', false, '' ); 
			// if it's a single page then don't make the image a link
			if(is_single()){ ?>
				<div class="image-comment" rel="bookmark" data-href="<?php echo $src[0]; ?>">
					<?php the_post_thumbnail( $featured_image_size ); ?>
				</div><?php
			}else{ ?>
				<a href="<?php the_permalink(); ?>" class="image-comment" title="<?php the_title(); ?>" rel="bookmark">
					<?php the_post_thumbnail( $featured_image_size ); ?>
				</a><?php
			} ?>
		</div>
		<?php
	} 
} ?>