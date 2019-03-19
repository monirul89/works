<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Radixetcltd
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<section>    
	<div class="site-section">        
		<div class="container">            
			<div class="row">                
				<div class="col-md-12 col-sm-12 col-xs-12">
					<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/page/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
