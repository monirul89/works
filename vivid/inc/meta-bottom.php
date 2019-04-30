
<?php
if((is_single() && in_array(bl_utilities::get_option('bl_enable_post_footer_on', 'all'), array('all','only_posts','only_posts_front','only_posts_pages'))) or (is_page() && in_array(bl_utilities::get_option('bl_enable_post_footer_on', 'all'), array('all','only_pages','only_pages_front','only_posts_pages'))) or (is_home() or is_front_page()) && in_array(bl_utilities::get_option('bl_enable_post_footer_on', 'all'), array('all','only_front','only_posts_front','only_pages_front'))){ ?>

	<ul class="post-tags clearfix">
		<?php if(has_tag() && bl_utilities::get_option('bl_show_tags')){ the_tags('<li>',' ','</li>'); } ?>
	</ul><?php
}	
/*

	NEXT POST

*/
if(bl_utilities::get_option('bl_next_article') and is_single()){
	$next_post = get_adjacent_post( false, '', false ); 
	if( $next_post ): 
		$next_post_url = $next_post->guid;  ?>
		<a href="<?php echo $next_post_url; ?>" class="single-pagination box" style="position: relative; z-index: 100; background-image: url('<?php echo get_post_image( $next_post->ID, 'original', false ); ?>');">
			<h3><small><?php _e('Next Article', 'bluth'); ?></small><?php echo $next_post->post_title; ?></h3>
		</a> <?php 
	endif;	
} 

// check if footer is enabled on this page
if((is_single() && in_array(bl_utilities::get_option('bl_enable_post_footer_on', 'all'), array('all','only_posts','only_posts_front','only_posts_pages'))) or (is_page() && in_array(bl_utilities::get_option('bl_enable_post_footer_on', 'all'), array('all','only_pages','only_pages_front','only_posts_pages'))) or (is_home() or is_front_page()) && in_array(bl_utilities::get_option('bl_enable_post_footer_on', 'all'), array('all','only_front','only_posts_front','only_pages_front'))){ ?>
	<div class="row"><?php
		if(bl_utilities::get_option('bl_author_footer')){ ?>
			<div class="col-sm-12 col-md-6 col-lg-6 author-area">
				<span class="vcard author">
					<span class="fn">
						<img class="author-image" src="<?php echo get_avatar_url(get_avatar( get_the_author_meta( 'ID' ) , 80 ) ); ?>"> 
						<h4><?php the_author_posts_link(); ?></h4>
						<p><?php the_author_meta('description'); ?></p>
					</span>
				</span>
			</div><?php
		}
		?>
		<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 article-info-area">
			<ul>
				<li><i class="fa fa-clock-o"></i><time class="entry-date updated" datetime="<?php echo get_the_date( 'c' ); ?>"><?php echo get_the_date( 'd') . ' ' . get_the_date('M'); echo bl_utilities::get_option('bl_enable_show_year') ? '. ' . get_the_date('Y') : ''; ?></time></li>		
				<li class="post-comments"><i class="fa fa-comment-o"></i><a href="<?php the_permalink(); ?>#comments"><?php comments_number(); ?></a></li><?php
				$categories = get_the_category();
				$firstcategory = true;
				foreach($categories as $category) { ?>
				<li class="post-meta-category"><?php if($firstcategory){ ?><i class="fa fa-folder-open-o"></i><?php }else{ ?><i style="display: inline-block; margin-right: 5px; width: 1.4em;">&nbsp;</i><?php } ?><a href="<?php echo get_category_link( $category->term_id ); ?>" title="<?php _e('View all posts in', 'bluth'); ?> <?php esc_attr( $category->name); ?>"><?php echo $category->cat_name; ?></a></li> <?php
				$firstcategory = false;
				} ?>
			</ul>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 article-like-area"><?php 
			if(bl_utilities::get_option('bl_social_footer')){ ?>
				<iframe src="//www.facebook.com/plugins/like.php?href=<?php urlencode(the_permalink()); ?>&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21&amp;appId=605249542856548" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>
				<!-- <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div> -->
				<div class="twitter-button"><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>">Tweet</a></div>
				<div class="google-plus-button"><div class="g-plusone" data-size="medium" data-href="<?php the_permalink(); ?>"></div></div><?php
			} ?>

		</div>
	</div><?php
}