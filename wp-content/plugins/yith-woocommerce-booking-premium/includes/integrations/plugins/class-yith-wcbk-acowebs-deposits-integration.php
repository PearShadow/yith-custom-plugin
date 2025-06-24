<?php
/**
 * Class YITH_WCBK_Acowebs_Deposits_Integration
 * Integration with Deposits & Partial Payments for WooCommerce by Acowebs [unstable].
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\Booking
 */

defined( 'YITH_WCBK' ) || exit;

/**
 * Class YITH_WCBK_Acowebs_Deposits_Integration
 * [unstable]
 *
 * @since 5.14.0
 */
class YITH_WCBK_Acowebs_Deposits_Integration extends YITH_WCBK_Integration {
	use YITH_WCBK_Singleton_Trait;

	/**
	 * Init
	 */
	protected function init() {
		if ( $this->is_enabled() ) {
			add_filter( 'yith_wcbk_order_check_order_for_booking_order', array( $this, 'filter_order_when_checking_for_bookings' ) );
		}
	}

	/**
	 * Filter order when checking for bookings.
	 *
	 * @param WC_Order|false $order The order.
	 *
	 * @return WC_Order|false
	 */
	public function filter_order_when_checking_for_bookings( $order ) {
		if ( $order && $order->get_type() === 'awcdp_payment' ) {
			$order = wc_get_order( $order->get_parent_id() );
		}

		return $order;
	}

	/**
	 * Return true if WPML is active.
	 *
	 * @return bool
	 */
	public function is_enabled() {
		return true;
	}
}
