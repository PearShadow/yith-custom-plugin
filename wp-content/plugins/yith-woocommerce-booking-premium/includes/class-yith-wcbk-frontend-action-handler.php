<?php
/**
 * Class YITH_WCBK_Frontend_Action_Handler
 * handle all Frontend Actions (as request-confirmation)
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\Booking\Classes
 */

defined( 'YITH_WCBK' ) || exit;

if ( ! class_exists( 'YITH_WCBK_Frontend_Action_Handler' ) ) {
	/**
	 * Class YITH_WCBK_Frontend_Action_Handler
	 */
	class YITH_WCBK_Frontend_Action_Handler {

		/**
		 * Hook in methods.
		 */
		public static function init() {
			add_action( 'wp_loaded', array( __CLASS__, 'request_confirmation_action' ), 90 );
			add_action( 'wp_loaded', array( __CLASS__, 'cancel_booking_action' ), 90 );
			add_action( 'wp_loaded', array( __CLASS__, 'pay_confirmed_booking' ), 90 );
			add_filter( 'woocommerce_login_redirect', array( __CLASS__, 'login_redirect' ), 10, 1 );
			add_filter( 'woocommerce_registration_redirect', array( __CLASS__, 'login_redirect' ), 10, 1 );
		}

		/**
		 * Request confirm action.
		 * Checks for a valid request, does validation (via hooks) and then redirects if valid.
		 */
		public static function request_confirmation_action() {
			// phpcs:disable WordPress.Security.NonceVerification.Recommended
			if ( empty( $_REQUEST['booking-request-confirmation'] ) || ! is_numeric( $_REQUEST['booking-request-confirmation'] ) ) {
				return;
			}

			/**
			 * APPLY_FILTERS: yith_wcbk_request_confirmation_product_id
			 *
			 * Filters the product ID when creating a booking for a confirmation request.
			 *
			 * @param int $product_id The product ID.
			 *
			 * @return int
			 */
			$product_id = apply_filters( 'yith_wcbk_request_confirmation_product_id', absint( $_REQUEST['booking-request-confirmation'] ) );

			/**
			 * The booking product.
			 *
			 * @var WC_Product_Booking $product
			 */
			$product = wc_get_product( $product_id );

			if ( ! $product || ! yith_wcbk_is_booking_product( $product ) ) {
				return;
			}

			/**
			 * APPLY_FILTERS: yith_wcbk_request_confirmation_login_required
			 *
			 * Filters if the user need to be logged-in to make a confirmation request.
			 *
			 * @param bool $login_required True if the login is required; false otherwise.
			 *
			 * @return bool
			 */
			if ( apply_filters( 'yith_wcbk_request_confirmation_login_required', true ) && ! is_user_logged_in() ) {

				/**
				 * APPLY_FILTERS: yith_wcbk_notice_for_request_confirmation_login_required
				 *
				 * Filters the notice message shown when trying to request confirmation if login is required and the user is not logged-in.
				 *
				 * @param string $notice_message The notice message.
				 *
				 * @return string
				 */
				$notice = apply_filters( 'yith_wcbk_notice_for_request_confirmation_login_required', __( 'You must log in before asking for a booking confirmation', 'yith-booking-for-woocommerce' ) );
				if ( wc_get_page_id( 'myaccount' ) ) {
					$link_url = add_query_arg( array( 'yith-wcbk-product-redirect' => $product->get_id() ), wc_get_page_permalink( 'myaccount' ) );

					/**
					 * APPLY_FILTERS: yith_wcbk_button_text_for_request_confirmation_login_required
					 *
					 * Filters the button text shown when trying to request confirmation if login is required and the user is not logged-in.
					 *
					 * @param string $text The text.
					 *
					 * @return string
					 */
					$text = apply_filters( 'yith_wcbk_button_text_for_request_confirmation_login_required', __( 'Log in', 'yith-booking-for-woocommerce' ) );

					$notice .= "<a class='button' href='{$link_url}'>" . $text . '</a>';
				}

				/**
				 * APPLY_FILTERS: yith_wcbk_request_confirmation_login_required_notice
				 *
				 * Filters the notice shown when trying to request confirmation if login is required and the user is not logged-in.
				 *
				 * @param string             $notice  The notice.
				 * @param WC_Product_Booking $product The product.
				 *
				 * @return string
				 */
				$notice = apply_filters( 'yith_wcbk_request_confirmation_login_required_notice', $notice, $product );

				wc_add_notice( $notice, 'error' );

				return;
			}

			$args                = $_REQUEST;
			$args['add-to-cart'] = $product_id;

			$booking_data           = YITH_WCBK_Cart::get_booking_data_from_request( $args );
			$props                  = YITH_WCBK_Cart::get_booking_props_from_booking_data( $booking_data );
			$props['raw_title']     = $product->get_title();
			$props['product_id']    = $product_id;
			$props['status']        = 'bk-pending-confirm';
			$props['duration_unit'] = $product->get_duration_unit();

			if ( is_user_logged_in() ) {
				$props['user_id'] = get_current_user_id();
			}

			$booking = new YITH_WCBK_Booking();
			$booking->set_props( $props );

			/**
			 * APPLY_FILTERS: yith_wcbk_request_confirmation_booking_meta_data
			 *
			 * Filters the meta_data to be stored in the booking on request confirmation.
			 *
			 * @param array              $meta_data The meta data.
			 * @param array              $args      The request args.
			 * @param WC_Product_Booking $product   The bookable product.
			 *
			 * @return array
			 */
			$meta_data = apply_filters( 'yith_wcbk_request_confirmation_booking_meta_data', array(), $args, $product );
			if ( $meta_data ) {
				$booking->update_metas( $meta_data );
			}

			$booking->save();

			$success = $booking->is_valid();

			if ( $success ) {
				/**
				 * APPLY_FILTERS: yith_wcbk_request_confirmation_success_notice
				 *
				 * Filters the success notice shown on request confirmation.
				 *
				 * @param string $notice The notice.
				 *
				 * @return string
				 */
				$notice = apply_filters( 'yith_wcbk_request_confirmation_success_notice', __( 'Request for booking confirmation sent', 'yith-booking-for-woocommerce' ) );
				wc_add_notice( $notice );
			} else {
				/**
				 * APPLY_FILTERS: yith_wcbk_request_confirmation_error_notice
				 *
				 * Filters the error notice shown on request confirmation.
				 *
				 * @param string $notice The notice.
				 *
				 * @return string
				 */
				$notice = apply_filters( 'yith_wcbk_request_confirmation_error_notice', __( 'Error in requesting booking confirmation', 'yith-booking-for-woocommerce' ) );
				wc_add_notice( $notice, 'error' );
			}

			/**
			 * DO_ACTION: yith_wcbk_after_request_confirmation_action
			 * Hook to perform any action after request confirmation action.
			 *
			 * @param bool               $success True if the booking was correctly created; false otherwise.
			 * @param YITH_WCBK_Booking  $booking The booking.
			 * @param WC_Product_Booking $product The bookable product.
			 * @param array              $props   The booking props.
			 * @param array              $args    The request arguments.
			 */
			do_action( 'yith_wcbk_after_request_confirmation_action', $success, $booking, $product, $props, $args );

			/**
			 * APPLY_FILTERS: yith_wcbk_redirect_after_request_confirmation_action
			 *
			 * Filters the redirect URL after requesting confirmation.
			 *
			 * @param bool|string        $redirect_url The redirect URL.
			 * @param bool               $success      True if the booking was correctly created; false otherwise.
			 * @param YITH_WCBK_Booking  $booking      The booking.
			 * @param WC_Product_Booking $product      The bookable product.
			 * @param array              $props        The booking props.
			 * @param array              $args         The request arguments.
			 *
			 * @return bool|string specific redirect URL; False to set the default redirect.
			 */
			$redirect = apply_filters( 'yith_wcbk_redirect_after_request_confirmation_action', false, $success, $booking, $product, $props, $args );
			if ( $redirect ) {
				$redirect = esc_url_raw( $redirect );
				wp_safe_redirect( $redirect );
				exit;
			}

			// phpcs:enable
		}

		/**
		 * Cancel Booking
		 */
		public static function cancel_booking_action() {
			if (
				isset( $_REQUEST['cancel-booking'], $_REQUEST['security'] )
				&& wp_verify_nonce( wc_clean( wp_unslash( $_REQUEST['security'] ) ), 'cancel-booking' )
				&& is_numeric( $_REQUEST['cancel-booking'] )
				&& is_user_logged_in()
			) {
				$booking_id = absint( $_REQUEST['cancel-booking'] );
				$booking    = yith_get_booking( $booking_id );
				if ( ! $booking || ! $booking->is_valid() || $booking->get_user_id() !== get_current_user_id() || ! $booking->can_be( 'cancelled_by_user' ) ) {
					wc_add_notice( __( 'This booking cannot be cancelled. Contact us for more info', 'yith-booking-for-woocommerce' ), 'error' );

					return;
				}

				$booking->update_status( 'cancelled_by_user' );

				if ( $booking->has_status( 'cancelled' ) ) {
					// translators: %s is the booking title (including the booking ID).
					wc_add_notice( sprintf( __( 'Booking %s cancelled', 'yith-booking-for-woocommerce' ), $booking->get_title() ) );
				} else {
					// translators: %s is the booking title (including the booking ID).
					wc_add_notice( sprintf( __( 'Booking %s not cancelled', 'yith-booking-for-woocommerce' ), $booking->get_title() ), 'error' );
				}

				wp_safe_redirect( $booking->get_view_booking_url() );
				exit;
			}
		}

		/**
		 * Pay confirmed Booking
		 */
		public static function pay_confirmed_booking() {
			// phpcs:disable WordPress.Security.NonceVerification.Recommended
			if ( empty( $_REQUEST['pay-confirmed-booking'] ) || ! is_numeric( $_REQUEST['pay-confirmed-booking'] ) || ! is_user_logged_in() ) {
				return;
			}
			$error      = false;
			$booking_id = absint( $_REQUEST['pay-confirmed-booking'] );
			$booking    = yith_get_booking( $booking_id );

			if ( ! $booking || ! $booking->is_valid() || $booking->get_user_id() !== get_current_user_id() ) {
				$error = true;
			}

			$product_id = $booking ? $booking->get_product_id() : false;
			$product    = $booking ? $booking->get_product() : false;
			if ( ! $product ) {
				$error = true;
			}

			if ( $error ) {
				wc_add_notice( __( 'This booking cannot be paid. Contact us for more info', 'yith-booking-for-woocommerce' ), 'error' );

				return;
			}

			$cart = WC()->cart;
			$cart->empty_cart();

			$cart_item_data = array(
				'yith_booking_data' => YITH_WCBK_Cart::get_booking_data_from_booking( $booking ),
			);

			try {
				$cart->add_to_cart( $product_id, 1, 0, array(), $cart_item_data );
			} catch ( Exception $e ) {
				wc_add_notice( $e->getMessage(), 'error' );

				return;
			}

			wp_safe_redirect( wc_get_checkout_url() );
			exit;
			// phpcs:enable
		}

		/**
		 * Filter login redirect to allow custom redirect
		 *
		 * @param string $redirect Redirect URL.
		 *
		 * @return string
		 * @since 2.1.18
		 */
		public static function login_redirect( $redirect ) {
			$redirect_to_product_id = absint( $_REQUEST['yith-wcbk-product-redirect'] ?? 0 ); // phpcs:ignore WordPress.Security.NonceVerification.Recommended
			if ( $redirect_to_product_id ) {
				$product = wc_get_product( $redirect_to_product_id );
				if ( $product ) {
					$redirect = $product->get_permalink();
				}
			}

			return $redirect;
		}
	}
}
