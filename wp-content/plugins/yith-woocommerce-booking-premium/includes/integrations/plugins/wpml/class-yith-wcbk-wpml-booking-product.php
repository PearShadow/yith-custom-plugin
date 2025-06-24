<?php
/**
 * Class YITH_WCBK_Wpml_Booking_Product
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\Booking
 */

defined( 'YITH_WCBK' ) || exit;

/**
 * Class YITH_WCBK_Wpml_Booking_Product
 *
 * @since   1.0.3
 */
class YITH_WCBK_Wpml_Booking_Product extends YITH_WCBK_Wpml_Integration_Helper {
	/**
	 * Constructor
	 *
	 * @param YITH_WCBK_Wpml_Integration $wpml_integration WPML Integration instance.
	 */
	protected function __construct( $wpml_integration ) {
		parent::__construct( $wpml_integration );

		// Get the parent id of the booking product to associate it to the Booking object.
		add_filter( 'yith_wcbk_booking_product_id_to_translate', array( 'YITH_WCBK_Wpml_Integration', 'get_parent_id' ) );

		add_filter( 'yith_wcbk_request_confirmation_product_id', array( 'YITH_WCBK_Wpml_Integration', 'get_parent_id' ) );

		add_filter( 'yith_wcbk_booking_form_block_product_id', array( $this->wpml_integration, 'get_current_language_id' ), 10, 1 );

		// Get the parent id of the booking product for cache data.
		add_filter( 'yith_wcbk_cache_get_object_data_product_id', array( 'YITH_WCBK_Wpml_Integration', 'get_parent_id' ) );

		add_action( 'wcml_after_load_lock_fields_js', array( $this, 'enqueue_lock_fields_js' ) );
	}

	/**
	 * Enqueue lock fields JS.
	 *
	 * @return void
	 */
	public function enqueue_lock_fields_js() {
		$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
		wp_enqueue_script( 'yith-wcbk-wpml-integration-admin-product-lock-fields', YITH_WCBK_ASSETS_URL . '/js/integrations/wpml/admin-product-lock-fields' . $suffix . '.js', array( 'jquery' ), YITH_WCBK_VERSION, true );
	}
}
