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
				<label class="labe_time_picker" for="yith_start_time"><?php _e('Start Time', 'yith-woocommerce-booking'); ?></label>
				<select name="yith_start_time" id="time_from" class="yith-wcbk-time-picker">
					<option value=""><?php _e('Start time', 'yith-woocommerce-booking'); ?></option>
					<?php
						// Get current time + 1 hour for today's minimum
						$current_hour_plus_one = (int) date('H') + 3;
						echo date('H');
						$today_date = date('Y-m-d');

						// Generate hours starting from current hour + 1
						for ($hour = $current_hour_plus_one; $hour < 24; $hour++) {
							$time_value = sprintf('%02d:00', $hour);
							$display_time = date('h:i A', strtotime($time_value));
							
							echo '<option value="' . esc_attr($time_value) . '" data-hour="' . $hour . '">' . esc_html($display_time) . '</option>';
						}
					?>
				</select>
				<label class="labe_time_picker" for="yith_end_time"><?php _e('End Time', 'yith-woocommerce-booking'); ?></label>
				<select name="yith_end_time" id="time_to" class="yith-wcbk-time-picker">
					<option value=""><?php _e('End time', 'yith-woocommerce-booking'); ?></option>
					<?php
					// Generate all 24 hours for end time as well
					for ($hour = 0; $hour < 24; $hour++) {
						$time_value = sprintf('%02d:00', $hour);
						$display_time = date('h:i A', strtotime($time_value));
						
						echo '<option value="' . esc_attr($time_value) . '" data-hour="' . $hour . '">' . esc_html($display_time) . '</option>';
					}
					?>
				</select>
			</div>
		</div>
	</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const currentHourPlusOne = <?php echo $current_hour_plus_one; ?>;
    const todayDate = '<?php echo $today_date; ?>';
    
    const fromDateEl = document.querySelector('#yith-wcbk-booking-search-form-date-day-start-date-<?php echo $current_id; ?>');
    const toDateEl = document.querySelector('#yith-wcbk-booking-search-form-date-day-end-date-<?php echo $current_id; ?>');
    const timeFromEl = document.querySelector('#time_from');
    const timeToEl = document.querySelector('#time_to');
    
    // Normalize date to YYYY-MM-DD format
    function normalizeDate(dateStr) {
        try {
            const date = new Date(dateStr);
            if (isNaN(date.getTime())) {
                console.warn('Invalid date format:', dateStr);
                return dateStr;
            }
            return date.toISOString().split('T')[0]; // Returns YYYY-MM-DD
        } catch (e) {
            console.warn('Error parsing date:', dateStr, e);
            return dateStr;
        }
    }
    
    function updateTimeOptions() {
        if (!fromDateEl || !timeFromEl) {
            console.warn('Missing required elements: fromDateEl or timeFromEl');
            return;
        }
        
        const selectedFromDate = normalizeDate(fromDateEl.value);
        const selectedToDate = toDateDetails about the datepicker).
        // Debugging: Log date values
        console.log('todayDate:', todayDate, 'selectedFromDate:', selectedFromDate, 'isFromDateToday:', selectedFromDate === todayDate);
        
        // Reset all options to visible and enabled
        Array.from(timeFromEl.options).forEach(option => {
            if (option.value !== '') {
                option.style.display = '';
                option.disabled = false;
            }
        });
        
        if (timeToEl) {
            Array.from(timeToEl.options).forEach(option => {
                if (option.value !== '') {
                    option.style.display = '';
                    option.disabled = false;
                }
            });
        }
        
        // Check if selected start date is today
        const isFromDateToday = selectedFromDate === todayDate;
        const isToDateSameAsFrom = selectedToDate === selectedFromDate;
        
        // Apply restrictions only if start date is today
        if (isFromDateToday) {
            console.log('Applying time restrictions for today, currentHourPlusOne:', typeof currentHourPlusOne:', currentHourPlusOne);
            Array.from(timeFromEl.options).forEach(option => {
                if (option.value !== '') {
                    const optionHour = parseInt(option.getAttribute('data-hour'));
                    if (optionHour < currentHourPlusOne) {
                        option.style.display = 'none';
                        option.disabled = true;
                        console.log(`Hiding timeFrom option: ${option.value} (hour: ${optionHour})`);
                    }
                }
            });
            
            if (isToDateSameAsFrom && timeToEl) {
                Array.from(timeToEl.options).forEach(option => {
                    if (option.value !== '') {
                        const optionHour = parseInt(option.getAttribute('data-hour'));
                        if (optionHour < currentHourPlusOne) {
                            option.style.display = 'none';
                            option.disabled = true;
                            console.log(`Hiding timeTo option: ${option.value} (hour: ${optionHour})`);
                        }
                    }
                });
            }
        } else {
            console.log('No restrictions applied; all time slots (00:00-23:00) available for future date');
        }
        
        // Clear invalid selections
        if (timeFromEl.value && timeFromEl.selectedOptions[0] && timeFromEl.selectedOptions[0].disabled) {
            console.log('Clearing invalid timeFrom selection:', timeFromEl.value);
            timeFromEl.value = '';
        }
        if (timeToEl && timeToEl.value && timeToEl.selectedOptions[0] && timeToEl.selectedOptions[0].disabled) {
            console.log('Clearing invalid timeTo selection:', timeToEl.value);
            timeToEl.value = '';
        }
    }
    
    // Update time options when dates change
    if (fromDateEl) {
        fromDateEl.addEventListener('change', () => {
            console.log('fromDateEl changed:', fromDateEl.value);
            updateTimeOptions();
        });
    }
    if (toDateEl) {
        toDateEl.addEventListener('change', () => {
            console.log('toDateEl changed:', toDateEl.value);
            updateTimeOptions();
        });
    }
    
    // Initial update
    console.log('Initial updateTimeOptions call');
    updateTimeOptions();
    
    const submitButton = document.querySelector('.yith-wcbk-booking-search-form-submit');
    if (submitButton) {
        submitButton.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent form submission for testing
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
                from: fromEl ? normalizeDate(fromEl.value) : '',
                to: toEl ? normalizeDate(toEl.value) : '',
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