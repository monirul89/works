<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'radixetcltd' ); ?></h1>
				</header><!-- .page-header -->
				<div class="form-group">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'radixetcltd' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
			
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
