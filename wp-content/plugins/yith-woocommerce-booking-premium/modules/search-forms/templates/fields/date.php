<?php
/**
 * Booking Search Form Field Date with Time daily
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/booking/search-form/fields/date.php.
 *
 * @var YITH_WCBK_Search_Form $search_form
 * @package YITH\Booking\Modules\SearchForms\Templates
 */

defined( 'YITH_WCBK' ) || exit;

$current_id = $search_form->get_unique_id();
$from_time = yith_wcbk_get_query_string_param( 'from_time' ) ?: '00:00';
$to_time = yith_wcbk_get_query_string_param( 'to_time' ) ?: '23:59';
?>
<div class="yith-wcbk-booking-search-form__row yith-wcbk-booking-search-form__row--start-date">
    <label class="yith-wcbk-booking-search-form__row__label" for="yith-wcbk-booking-search-form-date-day-start-date-<?php echo esc_attr( $current_id ); ?>">
        <?php echo esc_html( yith_wcbk_get_label( 'start-date' ) ); ?>
    </label>
    <div class="yith-wcbk-booking-search-form__row__content yith-wcbk-booking-search-form__row__content--datetime">
        <?php
        // Date field
        yith_wcbk_print_field(
            array(
                'type'  => 'datepicker',
                'id'    => 'yith-wcbk-booking-search-form-date-day-start-date-' . $current_id,
                'name'  => 'from',
                'class' => 'yith-wcbk-booking-field yith-wcbk-booking-date yith-wcbk-booking-start-date',
                'data'  => apply_filters(
                    'yith_wcbk_search_form_start_date_input_data',
                    array(
                        'min-date'       => '+0D',
                        'related-to'     => '#yith-wcbk-booking-search-form-date-day-end-date-' . $current_id,
                        'on-select-open' => '#yith-wcbk-booking-search-form-date-day-end-date-' . $current_id,
                    ),
                    $search_form
                ),
                'value' => yith_wcbk_get_query_string_param( 'from' ),
            )
        );
        ?>
    </div>
</div>

<div class="yith-wcbk-search-form-field">
    <label for="yith_wcbk_time"><?php _e('Select Time', 'yith-woocommerce-booking'); ?></label>
    <select name="yith_wcbk_time" id="time_from" class="yith-wcbk-time-picker">
        <option value=""><?php _e('Select a time', 'yith-woocommerce-booking'); ?></option>
        <?php
        // Example: Generate time slots from 9:00 AM to 5:00 PM with 30-minute intervals
        $start_time = strtotime('09:00');
        $end_time   = strtotime('17:00');
        $interval   = 30 * 60; // 30 minutes in seconds
        while ($start_time <= $end_time) {
            $time_value = date('H:i', $start_time);
            echo '<option value="' . esc_attr($time_value) . '">' . esc_html(date('h:i A', $start_time)) . '</option>';
            $start_time += $interval;
        }
        ?>
    </select>
</div>

<div class="yith-wcbk-booking-search-form__row yith-wcbk-booking-search-form__row--end-date">
    <label class="yith-wcbk-booking-search-form__row__label" for="yith-wcbk-booking-search-form-date-day-end-date-<?php echo esc_attr( $current_id ); ?>">
        <?php echo esc_html( yith_wcbk_get_label( 'end-date' ) ); ?>
    </label>
    <div class="yith-wcbk-booking-search-form__row__content yith-wcbk-booking-search-form__row__content--datetime">
        <?php
        // Date field
        yith_wcbk_print_field(
            array(
                'type'  => 'datepicker',
                'id'    => 'yith-wcbk-booking-search-form-date-day-end-date-' . $current_id,
                'name'  => 'to',
                'class' => 'yith-wcbk-booking-field yith-wcbk-booking-date yith-wcbk-booking-end-date',
                'data'  => apply_filters(
                    'yith_wcbk_search_form_end_date_input_data',
                    array(
                        'type'         => 'to',
                        'min-date'     => '+0D',
                        'related-from' => '#yith-wcbk-booking-search-form-date-day-start-date-' . $current_id,
                    )
                ),
                'value' => yith_wcbk_get_query_string_param( 'to' ),
            )
        );
        ?>
    </div>
</div>
