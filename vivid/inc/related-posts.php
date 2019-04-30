<?php
$orig_post = $post;
global $post;
	$tags = wp_get_post_tags($post->ID);

if($tags){
	$tag_ids = array();
	foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;

	$my_query = new wp_query( array(
	    'tag__in' => $tag_ids,
	    'post__not_in' => array($post->ID),
	    'posts_per_page'=>3,
			'tax_query' => array(
	        array(
	            'taxonomy' => 'post_format',
	            'field' => 'slug',
	            'terms' => array( 'post-format-link','post-format-quote' ),
	            'operator' => 'NOT IN'
	        )
	    	)
    ));

	if($my_query->have_posts()){ ?>
	    <div id="related-posts" class="clearfix">
	    	<p class="related-posts-title"><?php echo __('You might also like', 'bluth'); ?></p> 
	    	<div class="clearfix"> <?php 
		    	while($my_query->have_posts()){
				    $my_query->the_post(); 
				    $post_format = get_post_format();
				    $post_format = ($post_format) ? $post_format : 'standard';   ?>
				    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<a href="<?php echo get_permalink( $post->ID ); ?>" class="box shadow nav-previous"> <?php 
							$post_format = (get_post_format( $post->ID )) ? get_post_format( $post->ID ) : 'standard';  
							if( $post ){ ?>
								<h5><?php 
									echo bl_truncate( get_the_title( $post->ID ), 35, ' ', '...' );  ?>
								</h5>
								<p><?php 
									echo bl_truncate( get_the_excerpt(), 100, ' ', '...' );  ?>
								</p>
							<?php } ?>
							<div class="post-image" style="background-image: url('<?php echo get_post_image( $post->ID, "related-post" ); ?>'); "></div>
						</a>

					</div> <?php
				} ?>
			</div>
	    </div><?php
	}
}
$post = $orig_post;
wp_reset_query();