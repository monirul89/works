<?php
	/**
	 * The template for displaying any single post.
	 *
	 */

	// Count view
	wpb_set_post_views(get_the_ID());
	// Get the full screen image layout
	$full_screen_featured_image = true;
	// Get the page layout
	$layout_class = ' col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1';
	$post_layout = !get_post_meta( $post->ID, 'bluth_post_layout', true ) ? bl_utilities::get_option('bl_post_page_layout', 'right_side') : get_post_meta( $post->ID, 'bluth_post_layout', true );

	if($post_layout == 'left_side'){
		$layout_class = ' pull-right col-xs-12 col-sm-12 col-md-9 col-lg-9';
	}elseif($post_layout == 'right_side'){
		$layout_class = ' col-xs-12 col-sm-12 col-md-9 col-lg-9';
	}

	// Advert above content
	$ad_content_placement 	= of_get_option('ad_content_placement', array('home' => true,'pages' => true,'posts' => true));
	$ad_content_mode 		= of_get_option('ad_content_mode', 'none');
	$ad_content_box 		= of_get_option('ad_content_box', true);	
	$ad_content_padding 	= of_get_option('ad_content_padding', true);

	get_header();	

	// check if there's a thumbnail or not, if not then add a class to the share buttons
	$share_class = has_post_thumbnail() ? 'has-thumbnail' : 'no-thumbnail';
	if($ad_content_mode != 'none' and $ad_content_placement['posts'] == true){
		echo '<div class="above_content'.(($ad_content_box) ? ' box' : '').(($ad_content_padding) ? ' pad15' : '').'">';
			if($ad_content_mode == 'image'){
				echo '<a href="'.of_get_option('ad_content_image_link').'" target="_blank"><img src="'.of_get_option('ad_content_image').'"></a>';
			}elseif($ad_content_mode == 'html'){
				echo apply_filters('shortcode_filter',do_shortcode(of_get_option('ad_content_code')));
			}
		echo '</div>';
	}

	$image_comment_class = bl_utilities::get_option('bl_image_comments') ? 'image-comment-on' : ''; ?>
		<div id="content" class="<?php echo $image_comment_class.$layout_class; ?> " role="main"> <?php 
			if ( have_posts() ){
		 		while ( have_posts() ) : the_post();  ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="post-meta <?php echo $share_class; ?>">
							<?php get_template_part( 'inc/meta-top' ); ?>
						</div>
						<div class="escape-container"><?php
							get_template_part( 'inc/posts/post-thumbnail' ); ?>
						</div>
						<div class="entry-container box clearfix <?php echo $margin_class . ' ' . $layout; ?>">

							<div class="post-title">
								<h1 class="entry-title"><?php the_title(); ?></h1>

								<span class="author"><?php the_author_posts_link(); ?></span>
							</div> 
							<div class="entry-content">
								<div class="entry-audio"><?php
								if(get_post_format() == 'audio'){
									$audio_url = get_post_meta( $post->ID, 'blu_audio_url', true );
									$audio_embed = get_post_meta( $post->ID, 'blu_audio_iframe', true );
									if(strpos($audio_url,'.mp3') !== false){ echo do_shortcode('[audio mp3="'.$audio_url.'"][/audio]'); }
									else{ echo apply_filters( 'the_content', $audio_url); }
									echo html_entity_decode($audio_embed);
								} ?>
								</div><?php
								the_content(); 
						      	// paginated posts
						       	wp_link_pages( array( 'before' => '<div class="page-links"><h4>'.__( 'Pages:', 'bluth' ).'</h4>', 'link_before' => '<span>', 'after' => '</div>', 'link_after' => '</span>', 'pagelink' => '%')); ?>
								<footer class="entry-meta clearfix">
									<?php get_template_part( 'inc/meta-bottom' ); ?>
								</footer><!-- .entry-meta -->
							</div><!-- .entry-content -->  
						</div><!-- .entry-container -->
					</article><!-- #post-<?php the_ID(); ?> --><?php		
				endwhile;				
				// show related posts by tag
				if(bl_utilities::get_option('bl_related_posts')){ 
				 	get_template_part( 'inc/related-posts' ); 
				}
			}else{

				get_template_part( 'inc/posts/post-404' );

			} ?>
		</div><!-- #content .site-content --><?php
		if($post_layout == 'left_side' || $post_layout == 'right_side'){ ?>
			<aside id="side-bar" class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
				<div class="clearfix">
					<?php dynamic_sidebar( 'post_sidebar'); ?>
					<div id="post_sidebar_sticky" class="sticky_sidebar">
						<?php dynamic_sidebar( 'post_sidebar_sticky'); ?>
					</div>
				</div>
			</aside> <?php 
		} ?>
	</div><!-- #primary -->
</div><!-- #main .site-main --> <?php


if ( comments_open() ){ ?>
	<div class="comments row-fluid"><?php
		comments_template( '', true ); ?>
	</div><?php
}

get_footer(); // This fxn gets the footer.php file and renders it ?>
