<?php
/**
 * radixetcltd NUX Guided Tour Class
 *
 * @package  radixetcltd
 * @since    2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'radixetcltd_NUX_Guided_Tour' ) ) :

	/**
	 * The radixetcltd NUX Guided Tour class
	 */
	class radixetcltd_NUX_Guided_Tour {
		/**
		 * Setup class.
		 *
		 * @since 2.2.0
		 */
		public function __construct() {
			add_action( 'admin_init', array( $this, 'customizer' ) );
		}

		/**
		 * Customizer.
		 *
		 * @since 2.2.0
		 */
		public function customizer() {
			global $pagenow;

			if ( 'customize.php' === $pagenow && false === (bool) get_option( 'radixetcltd_nux_guided_tour', false ) ) {
				add_action( 'customize_controls_enqueue_scripts', array( $this, 'customize_scripts' ) );
				add_action( 'customize_controls_print_footer_scripts', array( $this, 'print_templates' ) );

				if ( current_user_can( 'manage_options' ) ) {

					// Set Guided Tour flag so it doesn't show up again.
					update_option( 'radixetcltd_nux_guided_tour', true );
				}
			}
		}

		/**
		 * Customizer enqueues.
		 *
		 * @since 2.2.0
		 */
		public function customize_scripts() {
			global $radixetcltd_version;

			$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

			wp_enqueue_style( 'sp-guided-tour', get_template_directory_uri() . '/assets/css/admin/customizer/customizer.css', array(), $radixetcltd_version, 'all' );
			wp_style_add_data( 'sp-guided-tour', 'rtl', 'replace' );

			wp_enqueue_script( 'sf-guided-tour', get_template_directory_uri() . '/assets/js/admin/customizer' . $suffix . '.js', array( 'jquery', 'wp-backbone' ), $radixetcltd_version, true );

			wp_localize_script( 'sf-guided-tour', '_wpCustomizeSFGuidedTourSteps', $this->guided_tour_steps() );
		}

		/**
		 * Template for steps.
		 *
		 * @since 2.2.0
		 */
		public function print_templates() {
			?>
			<script type="text/html" id="tmpl-sf-guided-tour-step">
				<div class="sf-guided-tour-step">
					<# if ( data.title ) { #>
						<h2>{{ data.title }}</h2>
					<# } #>
					{{{ data.message }}}
					<a class="sf-nux-button" href="#">
						<# if ( data.button_text ) { #>
							{{ data.button_text }}
						<# } else { #>
							<?php esc_attr_e( 'Next', 'radixetcltd' ); ?>
						<# } #>
					</a>
					<# if ( ! data.last_step ) { #>
						<a class="sf-guided-tour-skip" href="#">
						<# if ( data.first_step ) { #>
							<?php esc_attr_e( 'No thanks, skip the tour', 'radixetcltd' ); ?>
						<# } else { #>
							<?php esc_attr_e( 'Skip this step', 'radixetcltd' ); ?>
						<# } #>
						</a>
					<# } #>
				</div>
			</script>
			<?php
		}

		/**
		 * Guided tour steps.
		 *
		 * @since 2.2.0
		 */
		public function guided_tour_steps() {
			$steps = array();

			$steps[] = array(
				'title'       => __( 'Welcome to the Customizer', 'radixetcltd' ),
				/* translators: %s: 'End Of Line' symbol */
				'message'     => sprintf( __( 'Here you can control the overall look and feel of your store.%sTo get started, let\'s add your logo', 'radixetcltd' ), PHP_EOL . PHP_EOL ),
				'button_text' => __( 'Let\'s go!', 'radixetcltd' ),
				'section'     => '#customize-info',
			);

			if ( ! has_custom_logo() ) {
				$steps[] = array(
					'title'   => __( 'Add your logo', 'radixetcltd' ),
					'message' => __( 'Open the Site Identity Panel, then click the \'Select Logo\' button to upload your logo.', 'radixetcltd' ),
					'section' => 'title_tagline',
				);
			}

			$steps[] = array(
				'title'   => __( 'Customize your navigation menus', 'radixetcltd' ),
				'message' => __( 'Organize your menus by adding Pages, Categories, Tags, and Custom Links.', 'radixetcltd' ),
				'section' => 'nav_menus',
			);

			$steps[] = array(
				'title'   => __( 'Choose your accent color', 'radixetcltd' ),
				'message' => __( 'In the typography panel you can specify an accent color which will be applied to things like links and star ratings. We recommend using your brand color for this setting.', 'radixetcltd' ),
				'section' => 'radixetcltd_typography',
			);

			$steps[] = array(
				'title'   => __( 'Color your buttons', 'radixetcltd' ),
				'message' => __( 'Choose colors for your button backgrounds and text. Once again, brand colors are good choices here.', 'radixetcltd' ),
				'section' => 'radixetcltd_buttons',
			);

			$steps[] = array(
				'title'       => '',
				/* translators: 1: open <strong> tag, 2: close <strong> tag, 3: 'End Of Line' symbol */
				'message'     => sprintf( __( 'All set! Remember to %1$ssave & publish%2$s your changes when you\'re done.%3$sYou can return to your dashboard by clicking the X in the top left corner.', 'radixetcltd' ), '<strong>', '</strong>', PHP_EOL . PHP_EOL ),
				'section'     => '#customize-header-actions .save',
				'button_text' => __( 'Done', 'radixetcltd' ),
			);

			return $steps;
		}
	}

endif;

return new radixetcltd_NUX_Guided_Tour();
