x<?php
/**
 * UI-only End Date field in booking form (for duration calculation)
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/booking-form/dates/ui-end-date.php
 *
 * @var WC_Product_Booking $product The booking product.
 * @var array              $date_info
 * @var array              $not_available_dates
 * @var string             $calendar_day_range_picker_class
 * @package YITH\Booking\Templates
 */

defined( 'YITH_WCBK' ) || exit;

$all_day_booking = $product->is_full_day();

list(
	$current_year,
	$current_month,
	$next_year,
	$next_month,
	$min_date,
	$min_date_timestamp,
	$max_date,
	$max_date_timestamp,
	$default_start_date,
	$default_end_date,
	$months_to_load,
	$ajax_load_months,
	$loaded_months
) = yith_plugin_fw_extract( $date_info, 'current_year', 'current_month', 'next_year', 'next_month', 'min_date', 'min_date_timestamp', 'max_date', 'max_date_timestamp', 'default_start_date', 'default_end_date', 'months_to_load', 'ajax_load_months', 'loaded_months' );

?>
<div class="yith-wcbk-form-section yith-wcbk-form-section-dates <?php echo esc_attr( $calendar_day_range_picker_class ); ?>">
    <label for="yith-wcbk-booking-ui-end-date-<?php echo esc_attr( $product->get_id() ); ?>" class='yith-wcbk-form-section__label yith-wcbk-booking-form__label'><?php echo esc_html( yith_wcbk_get_label( 'end-date' ) ); ?></label>
    <div class="yith-wcbk-form-section__content">
        <?php
        yith_wcbk_print_field(
            array(
                'type'  => yith_wcbk()->settings->display_date_picker_inline() ? 'datepicker-inline' : 'datepicker',
                'id'    => 'yith-wcbk-booking-ui-end-date-' . $product->get_id(),
                'name'  => 'ui-end-date', // Unique name to avoid conflicts with real end date
                'class' => 'yith-wcbk-booking-date yith-wcbk-booking-ui-end-date',
                'data'  => array(
                    'type'                => 'to',
                    'all-day'             => ! ! $all_day_booking ? 'yes' : 'no',
                    'ajax-load-months'    => ! ! $ajax_load_months ? 'yes' : 'no',
                    'min-duration'        => $product->get_minimum_duration(),
                    'month-to-load'       => $next_month,
                    'year-to-load'        => $next_year,
                    'min-date'            => $min_date,
                    'max-date'            => $max_date,
                    'not-available-dates' => $not_available_dates ? wp_json_encode( $not_available_dates ) : '',
                    'product-id'          => $product->get_id(),
                    'related-from'        => '#yith-wcbk-booking-start-date-' . $product->get_id(),
                    'allow-same-date'     => ! ! $all_day_booking ? 'yes' : 'no',
                    'allowed-days'        => wp_json_encode( $product->get_allowed_start_days() ),
                    'static'              => 'yes',
                    'loaded-months'       => wp_json_encode( $loaded_months ),
                    'months-to-load'      => $months_to_load,
                    'ui-only'             => 'yes', // Flag to identify UI-only component
                ),
                'value' => $default_end_date,
            )
        );

        yith_wcbk_print_field(
            array(
                'id'    => 'yith-wcbk-booking-hidden-ui-end-' . $product->get_id(),
                'type'  => 'hidden',
                'name'  => 'ui-end', // Unique name for hidden field
                'class' => 'yith-wcbk-booking-date yith-wcbk-booking-hidden-ui-end',
                'value' => $default_end_date,
            )
        );
        ?>
    </div>
</div>