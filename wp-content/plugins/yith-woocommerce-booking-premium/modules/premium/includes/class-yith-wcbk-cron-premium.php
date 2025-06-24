<?php
/**
 * Cron class.
 * handle Cron processes.
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\Booking\Modules\Premium
 */

defined( 'YITH_WCBK' ) || exit;

if ( ! class_exists( 'YITH_WCBK_Cron_Premium' ) ) {
	/**
	 * Class YITH_WCBK_Cron_Premium
	 *
	 * @since 5.8.1 Premium class.
	 */
	class YITH_WCBK_Cron_Premium extends YITH_WCBK_Cron {

		/**
		 * The constructor.
		 */
		protected function __construct() {
			parent::__construct();

			add_action( 'yith_wcbk_check_reject_pending_confirmation_bookings', array( $this, 'check_reject_pending_confirmation_bookings' ) );
			add_action( 'yith_wcbk_check_complete_paid_bookings', array( $this, 'check_complete_paid_bookings' ) );
			add_action( 'yith_wcbk_schedule_booking_notifications', array( $this, 'schedule_booking_notifications' ) );
		}

		/**
		 * Schedule actions through the WooCommerce Action Scheduler.
		 */
		public function schedule_actions() {
			parent::schedule_actions();

			$site_tomorrow           = new DateTimeImmutable( 'tomorrow', wp_timezone() );
			$site_tomorrow_timestamp = $site_tomorrow->getTimestamp();

			if ( ! WC()->queue()->get_next( 'yith_wcbk_check_reject_pending_confirmation_bookings' ) ) {
				WC()->queue()->schedule_single( strtotime( 'tomorrow midnight' ), 'yith_wcbk_check_reject_pending_confirmation_bookings', array(), 'yith-booking' );
			}

			if ( ! WC()->queue()->get_next( 'yith_wcbk_check_complete_paid_bookings' ) ) {
				WC()->queue()->schedule_single( strtotime( 'tomorrow midnight' ), 'yith_wcbk_check_complete_paid_bookings', array(), 'yith-booking' );
			}

			if ( ! WC()->queue()->get_next( 'yith_wcbk_schedule_booking_notifications' ) ) {
				$timestamp = apply_filters( 'yith_wcbk_cron_schedule_booking_notifications_timestamp', $site_tomorrow_timestamp );
				WC()->queue()->schedule_single( $timestamp, 'yith_wcbk_schedule_booking_notifications', array(), 'yith-booking' );
			}
		}

		/**
		 * Check if reject pending confirmation bookings
		 */
		public function check_reject_pending_confirmation_bookings() {
			// TODO: the check should be made in batches of XX bookings (for example, by updating 20 bookings at time).
			$enabled = yith_wcbk()->settings->get_reject_pending_confirmation_bookings_enabled();
			$after   = yith_wcbk()->settings->get_reject_pending_confirmation_bookings_after();
			if ( $enabled && $after ) {
				$after_day = $after - 1;

				$args = array(
					'post_status' => array( 'bk-pending-confirm' ),
					'date_query'  => array(
						array(
							'before' => gmdate( 'Y-m-d H:i:s', strtotime( "now -$after_day day midnight" ) ),
						),
					),
				);

				$booking_ids = yith_wcbk_get_booking_post_ids( $args );
				$bookings    = array_filter( array_map( 'yith_get_booking', $booking_ids ) );

				if ( ! ! $bookings ) {
					foreach ( $bookings as $booking ) {
						$booking->update_status(
							'unconfirmed',
							sprintf(
							// translators: %s is the number of days.
								__( 'Automatically reject booking after %d day(s) from creating', 'yith-booking-for-woocommerce' ),
								$after
							)
						);
					}
				}
			}
		}

		/**
		 * Check if reject pending confirmation bookings
		 */
		public function check_complete_paid_bookings() {
			// TODO: the check should be made in batches of XX bookings (for example, by updating 20 bookings at time).
			if ( yith_wcbk()->settings->get_complete_paid_bookings_enabled() ) {
				$after     = yith_wcbk()->settings->get_complete_paid_bookings_after();
				$after_day = $after - 1;
				$sign      = $after_day < 0 ? '+' : '-';

				$bookings = yith_wcbk_get_bookings(
					array(
						'status'     => 'paid',
						'return'     => 'bookings',
						'data_query' => array(
							array(
								'key'      => 'to',
								'value'    => strtotime( "now {$sign}{$after_day} day midnight" ),
								'operator' => '<',
							),
						),
					)
				);

				if ( ! ! $bookings ) {
					foreach ( $bookings as $booking ) {
						if ( $booking instanceof YITH_WCBK_Booking ) {
							$booking->update_status(
								'completed',
								sprintf(
								// translators: %s is the number of days.
									__( 'Automatically complete booking after %d day(s) from End Date', 'yith-booking-for-woocommerce' ),
									$after
								)
							);
						}
					}
				}
			}
		}

		/**
		 * Schedule booking notifications.
		 */
		public function schedule_booking_notifications() {
			$email_actions = array(
				'YITH_WCBK_Email_Customer_Booking_Notification_Before_Start' => 'yith_wcbk_email_customer_notification_before_start_batch',
				'YITH_WCBK_Email_Customer_Booking_Notification_After_Start'  => 'yith_wcbk_email_customer_notification_after_start_batch',
				'YITH_WCBK_Email_Customer_Booking_Notification_Before_End'   => 'yith_wcbk_email_customer_notification_before_end_batch',
				'YITH_WCBK_Email_Customer_Booking_Notification_After_End'    => 'yith_wcbk_email_customer_notification_after_end_batch',
			);

			$mailer = WC()->mailer();
			$emails = $mailer->get_emails();
			$index  = 1;

			foreach ( $email_actions as $email_class => $action ) {
				$email = $emails[ $email_class ] ?? false;
				if ( $email && $email->is_enabled() ) {
					WC()->queue()->schedule_single( time() + ( $index * MINUTE_IN_SECONDS ), $action, array(), 'yith_wcbk_booking_notifications' );
				}
				$index++;
			}
		}
	}
}
