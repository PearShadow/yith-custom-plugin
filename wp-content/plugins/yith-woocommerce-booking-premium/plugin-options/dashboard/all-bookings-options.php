<?php
/**
 * All Bookings options
 *
 * @package YITH\Booking\Options
 */

defined( 'YITH_WCBK' ) || exit(); // Exit if accessed directly.

return array(
	'dashboard-all-bookings' => array(
		'dashboard-all-bookings-list' => array(
			'type'                  => 'post_type',
			'post_type'             => YITH_WCBK_Post_Types::BOOKING,
			'wp-list-style'         => 'classic',
			'wp-list-auto-h-scroll' => true,
		),
	),
);

