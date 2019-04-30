		</div><!-- #primary -->
	</div><!-- .container -->
</div><!-- #main .site-main --> 
			<?php 
		// if the comments are open and it's a single page then don't close the divs 
		if ( !comments_open() && !is_single() ){ ?>
		<?php
		}

	//get theme options
	$footer_text = of_get_option('footer_text', '' ); ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row-fluid" id="footer-body">
				<?php dynamic_sidebar('footer-widgets'); ?>
			</div>
		</div><!-- .site-info -->
		<?php if(bl_utilities::get_option('bl_footer_text', false)){?>
		<div class="row-fluid" id="footer-bottom">
			<?php echo html_entity_decode(str_replace("{year}", date('Y'), bl_utilities::get_option('bl_footer_text'))); ?>
		</div>	
		<?php } 
		?>
	</footer><!-- #colophon .site-footer -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>