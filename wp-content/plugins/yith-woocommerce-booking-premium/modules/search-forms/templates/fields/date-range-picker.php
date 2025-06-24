<?php
/**
 * Booking Search Form Field Date daily
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/booking/search-form/fields/date-range-picker.php.
 *
 * @var YITH_WCBK_Search_Form $search_form
 * @package YITH\Booking\Modules\SearchForms\Templates
 */

defined( 'YITH_WCBK' ) || exit;

$current_id = $search_form->get_unique_id();
?>
<div class="yith-wcbk-booking-search-form__row yith-wcbk-booking-search-form__row--start-date">
	<label class="yith-wcbk-booking-search-form__row__label">
		<?php echo esc_html( yith_wcbk_get_label( 'dates' ) ); ?>
	</label>
	<div class="yith-wcbk-booking-search-form__row__content">
		<div class="yith-wcbk-date-range-picker yith-wcbk-clearfix">
			<?php
			yith_wcbk_print_field(
				array(
					'type'              => 'text',
					'id'                => 'yith-wcbk-booking-search-form-date-day-start-date-' . $current_id,
					'name'              => 'from',
					'class'             => 'yith-wcbk-date-picker yith-wcbk-booking-date yith-wcbk-booking-start-date',
					'data'              => apply_filters(
						'yith_wcbk_search_form_start_date_input_data',
						array(
							'type'           => 'from',
							'min-date'       => '+0D',
							'related-to'     => '#yith-wcbk-booking-search-form-date-day-end-date-' . $current_id,
							'on-select-open' => '#yith-wcbk-booking-search-form-date-day-end-date-' . $current_id,
						),
						$search_form
					),
					'custom_attributes' => 'placeholder="' . esc_attr( yith_wcbk_get_label( 'start-date' ) ) . '" readonly',
					'value'             => yith_wcbk_get_query_string_param( 'from' ),
				)
			);

			yith_wcbk_print_field(
				array(
					'type'              => 'text',
					'id'                => 'yith-wcbk-booking-search-form-date-day-start-date-' . $current_id . '--formatted',
					'name'              => '',
					'class'             => 'yith-wcbk-date-picker--formatted yith-wcbk-booking-date yith-wcbk-booking-start-date',
					'custom_attributes' => 'placeholder="' . esc_attr( yith_wcbk_get_label( 'start-date' ) ) . '" readonly',
				)
			);

			?>
			<span class="yith-wcbk-date-range-picker__arrow yith-icon yith-icon-arrow-right"></span>
			<?php

			yith_wcbk_print_field(
				array(
					'type'              => 'text',
					'id'                => 'yith-wcbk-booking-search-form-date-day-end-date-' . $current_id,
					'name'              => 'to',
					'class'             => 'yith-wcbk-date-picker yith-wcbk-booking-date yith-wcbk-booking-end-date',
					'data'              => apply_filters(
						'yith_wcbk_search_form_end_date_input_data',
						array(
							'type'         => 'to',
							'min-date'     => '+0D',
							'related-from' => '#yith-wcbk-booking-search-form-date-day-start-date-' . $current_id,
						),
						$search_form
					),
					'custom_attributes' => 'placeholder="' . esc_attr( yith_wcbk_get_label( 'end-date' ) ) . '" readonly',
					'value'             => yith_wcbk_get_query_string_param( 'to' ),
				)
			);

			yith_wcbk_print_field(
				array(
					'type'              => 'text',
					'id'                => 'yith-wcbk-booking-search-form-date-day-end-date-' . $current_id . '--formatted',
					'name'              => '',
					'class'             => 'yith-wcbk-date-picker--formatted yith-wcbk-booking-date yith-wcbk-booking-end-date',
					'custom_attributes' => 'placeholder="' . esc_attr( yith_wcbk_get_label( 'end-date' ) ) . '" readonly',
				)
			);
			?>

			<?php
			yith_wcbk_print_field(
				array(
					'type'              => 'time',
					'id'                => 'yith-wcbk-booking-search-form-from-time-' . $current_id,
					'name'              => 'from_time',
					'class'             => 'yith-wcbk-time-picker yith-wcbk-booking-time yith-wcbk-booking-from-time',
					'custom_attributes' => 'placeholder="' . esc_attr( __( 'Start Time', 'your-text-domain' ) ) . '"',
					'value'             => yith_wcbk_get_query_string_param( 'from_time' ),
				)
			);
			yith_wcbk_print_field(
				array(
					'type'              => 'time',
					'id'                => 'yith-wcbk-booking-search-form-to-time-' . $current_id,
					'name'              => 'to_time',
					'class'             => 'yith-wcbk-time-picker yith-wcbk-booking-time yith-wcbk-booking-to-time',
					'custom_attributes' => 'placeholder="' . esc_attr( __( 'End Time', 'your-text-domain' ) ) . '"',
					'value'             => yith_wcbk_get_query_string_param( 'to_time' ),
				)
			);
			
			?>
			
			<div class="yith-wcbk-search-form-field">
				<label for="yith_start_time"><?php _e('Select Time', 'yith-woocommerce-booking'); ?></label>
				<select name="yith_start_time" id="time_from" class="yith-wcbk-time-picker">
					<option value=""><?php _e('Start time', 'yith-woocommerce-booking'); ?></option>
					<?php
					$start_time = strtotime('09:00');
					$end_time   = strtotime('17:00');
					$interval   = 60 * 60;
					while ($start_time <= $end_time) {
						$time_value = date('H:i', $start_time);
						echo '<option value="' . esc_attr($time_value) . '">' . esc_html(date('h:i A', $start_time)) . '</option>';
						$start_time += $interval;
					}
					?>
				</select>
				<label for="yith_end_time"><?php _e('Select Time', 'yith-woocommerce-booking'); ?></label>
				<select name="yith_end_time" id="time_to" class="yith-wcbk-time-picker">
					<option value=""><?php _e('End time', 'yith-woocommerce-booking'); ?></option>
					<?php
					$start_time = strtotime('09:00');
					$end_time   = strtotime('17:00');
					$interval   = 60 * 60;
					while ($start_time <= $end_time) {
						$time_value = date('H:i', $start_time);
						echo '<option value="' . esc_attr($time_value) . '">' . esc_html(date('h:i A', $start_time)) . '</option>';
						$start_time += $interval;
					}
					?>
				</select>
			</div>
		</div>
	</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
	const submitButton = document.querySelector('.yith-wcbk-booking-search-form-submit');
	console.log(submitButton)
	if (submitButton) {
		submitButton.addEventListener('click', function(e) {
	console.log('Submit button clicked.');

	const fromEl = document.querySelector('#yith-wcbk-booking-search-form-date-day-start-date-<?php echo $current_id; ?>');
	const toEl = document.querySelector('#yith-wcbk-booking-search-form-date-day-end-date-<?php echo $current_id; ?>');
	const yithStartEl = document.querySelector('#time_from');
	const yithEndEl = document.querySelector('#time_to');

	if (!fromEl) console.warn('❌ Missing element: fromEl');
	if (!toEl) console.warn('❌ Missing element: toEl');

	if (!yithStartEl) console.warn('❌ Missing element: yithStartEl');
	if (!yithEndEl) console.warn('❌ Missing element: yithEndEl');

	const searchData = {
		from: fromEl ? fromEl.value : '',
		to: toEl ? toEl.value : '',
		from_time: yithStartEl ? yithStartEl.value : '',
		to_time: yithEndEl ? yithEndEl.value : ''
	};

	console.log('Collected search data:', searchData);

	localStorage.setItem('bookingSearchData', JSON.stringify(searchData));

	console.log('Search data stored in localStorage:', localStorage.getItem('bookingSearchData'));
});

	}
});
</script>