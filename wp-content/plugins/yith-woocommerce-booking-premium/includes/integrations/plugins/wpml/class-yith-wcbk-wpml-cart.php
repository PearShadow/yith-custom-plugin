<?php
/**
 * Class YITH_WCBK_Wpml_Cart
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\Booking
 */

defined( 'YITH_WCBK' ) || exit;

/**
 * Class YITH_WCBK_Wpml_Cart
 *
 * @since   1.0.11
 */
class YITH_WCBK_Wpml_Cart extends YITH_WCBK_Wpml_Integration_Helper {
	/**
	 * Constructor
	 *
	 * @param YITH_WCBK_Wpml_Integration $wpml_integration WPML Integration instance.
	 */
	protected function __construct( $wpml_integration ) {
		parent::__construct( $wpml_integration );

		add_filter( 'wcml_add_to_cart_sold_individually', array( $this, 'prevent_sold_individually_error_in_cart' ), 10, 4 );
	}

	/**
	 * Prevent sold-individually error in cart.
	 *
	 * @param bool  $value          Flag.
	 * @param array $cart_item_data Cart item data.
	 * @param int   $product_id     Product ID.
	 * @param int   $quantity       Quantity.
	 *
	 * @return bool
	 */
	public function prevent_sold_individually_error_in_cart( $value, $cart_item_data, $product_id, $quantity ) {
		if ( yith_wcbk_is_booking_product( $product_id ) ) {
			return false;
		}

		return $value;
	}
}
