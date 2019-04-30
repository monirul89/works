<div class="comments-area container">
<?php

    if(bl_utilities::get_option('bl_post_comments')){

        if ( post_password_required() )
            return; ?>
        <div id="comments"><?php
          $commenter = wp_get_current_commenter();
          $req = get_option( 'require_name_email' );
          // $comment_meta = get_comment_meta( get_comment_ID(), 'image_location', true );
          $aria_req = ( $req ? " aria-required='true'" : '' );

          $args = array(
            'id_form'           => 'commentform',
            'id_submit'         => 'submit',
            'title_reply'       => __( 'Leave a Reply' , 'bluth' ),
            'title_reply_to'    => __( 'Leave a Reply to %s' , 'bluth' ),
            'cancel_reply_link' => __( 'Cancel Reply' , 'bluth' ),
            'label_submit'      => __( 'Post Comment' , 'bluth' ),

            'comment_field' =>  '<div id="comment-textfield-area"><div id="image-comment-placeholder"></div><textarea id="comment" name="comment" cols="45" rows="5" aria-required="true">' .
              '</textarea></div><input type="hidden" id="comment_image_location" name="image_location" value="" /><input type="hidden" id="blu_comment_score" name="blu_comment_score" value="0" />',

            'must_log_in' => '<p class="must-log-in">' .
              sprintf(
                __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
                wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
              ) . '</p>',

            'logged_in_as' => '<p class="logged-in-as">' .
              sprintf(
              __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
                admin_url( 'profile.php' ),
                $user_identity,
                wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
              ) . '</p>',

            'comment_notes_before' => '',

            'comment_notes_after' => '',

            'fields' => apply_filters( 'comment_form_default_fields', array(

              'author' =>
                '<p class="comment-form-author">' .
                // '<label for="author">' . __( 'Name', 'bluth' ) . '</label> ' .
                // ( $req ? '<span class="required">*</span>' : '' ) .
                '<input id="author" name="author" placeholder="' . __( 'Name', 'bluth' ) . ( $req ? '*' : '' ) . '" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                '" size="30"' . $aria_req . ' /></p>',

              'email' =>
                '<p class="comment-form-email">'.
                // '<label for="email">' . __( 'Email', 'bluth' ) . '</label> ' .
                // ( $req ? '<span class="required">*</span>' : '' ) .
                '<input id="email" name="email" placeholder="' . __( 'Email', 'bluth' ) . ( $req ? '*' : '' ) . '"type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                '" size="30"' . $aria_req . ' /></p>',
              )
            ),
          );

            comment_form($args);  
            if ( have_comments() ){ ?>
              <h3 class="comments-title">  <?php printf( _n('%d comment', '%d comments', get_comments_number(), 'bluth' ), number_format_i18n( get_comments_number() ) );  ?></h3>
              <ol class="commentlist"> <?php  wp_list_comments( array( 'callback' => 'blu_comment' ) ); ?> </ol><!-- .commentlist --> <?php 

              if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ){ // are there comments to navigate through? If so, show navigation ?>
                <nav role="navigation" id="comment-nav-below" class="site-navigation comment-navigation clearfix">
                    <div class="nav-previous"><i class="icon-left-open"></i>&nbsp;<?php echo get_previous_comments_link( __( 'Older Comments', 'bluth' ) ); ?></div>
                    <div class="nav-next"><?php echo get_next_comments_link( __( 'Newer Comments', 'bluth' ) ); ?>&nbsp;<i class="icon-right-open"></i></div>
                </nav><!-- #comment-nav-below .site-navigation .comment-navigation --><?php 
              }
            } // have_comments()  
            // If comments are closed and there are comments, let's leave a little note, shall we?
            if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ){ ?>
              <p class="nocomments"><?php _e( 'Comments are closed.', 'bluth' ); ?></p> <?php 
            } ?>
    </div><!-- .row --> <?php 
    } 

    if(of_get_option('facebook_app_id') and bl_utilities::get_option('facebook_comments')){
        echo '<div id="fb-comments" class="comments-area comments-area-facebook pad-xs-5 pad-sm-10 pad-md-20 pad-lg-20">';
        echo '<div class="fb-comments" data-href="'.get_permalink().'" data-width="470" data-num-posts="10"></div>';
        echo '</div>';
    } ?>
</div><!-- #comments .comments-area -->