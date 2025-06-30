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
						// Get current time + 3 hours for today's minimum
						$current_hour_plus_three = (int) date('H') + 3;
						$current_hour = (int) date('H');
						$today_date = date('Y-m-d');

						// Generate hours starting from 0
						for ($hour = 0; $hour < 24; $hour++) {
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
	console.log('🚀 Booking form initialized');
	
	// Configuration from PHP
	const config = {
		currentHour: <?php echo $current_hour; ?>,
		currentHourPlusThree: <?php echo $current_hour_plus_three; ?>,
		todayDate: '<?php echo $today_date; ?>',
		currentId: '<?php echo $current_id; ?>'
	};
	
	console.log('📊 Config:', config);
	
	// DOM elements
	const elements = {
		fromDateEl: document.querySelector('#yith-wcbk-booking-search-form-date-day-start-date-' + config.currentId),
		toDateEl: document.querySelector('#yith-wcbk-booking-search-form-date-day-end-date-' + config.currentId),
		timeFromEl: document.querySelector('#time_from'),
		timeToEl: document.querySelector('#time_to'),
		submitButton: document.querySelector('.yith-wcbk-booking-search-form-submit')
	};
	
	// Verify all elements exist
	console.log('🔍 Element check:');
	Object.entries(elements).forEach(([key, element]) => {
		console.log(`  ${key}:`, element ? '✅ Found' : '❌ Missing');
	});
	
	// Safety check
	if (!elements.fromDateEl || !elements.timeFromEl || !elements.timeToEl) {
		console.error('❌ Critical elements missing. Aborting initialization.');
		return;
	}
	
	function resetAllTimeOptions() {
		console.log('🔄 Resetting all time options to enabled/visible');

		// Reset start time options
		Array.from(elements.timeFromEl.options).forEach(option => {
			if (option.value !== '') {
				option.disabled = false;
				option.hidden = false;
			}
		});

		// Reset end time options
		Array.from(elements.timeToEl.options).forEach(option => {
			if (option.value !== '') {
				option.disabled = false;
				option.hidden = false;
			}
		});

		jQuery(elements.timeFromEl).select2('destroy').select2(); 
		jQuery(elements.timeToEl).select2('destroy').select2(); 

	}

	
	function restrictTimeOptions(selectElement, label) {
		console.log(`🚫 Restricting ${label} options (hiding hours < ${config.currentHourPlusThree})`);
		let restrictedCount = 0;
		
		Array.from(selectElement.options).forEach(option => {
			if (option.value !== '') {
				const optionHour = parseInt(option.getAttribute('data-hour'));
				
				if (optionHour < config.currentHourPlusThree) {
					option.style.display = 'none';
					option.disabled = true;
					restrictedCount++;
					console.log(`  ↘️ Restricted ${label}: ${option.text} (hour: ${optionHour})`);
				}
			}
		});
		
		console.log(`  📊 Total ${label} options restricted: ${restrictedCount}`);
	}
	
	function clearInvalidSelections() {
		console.log('🧹 Checking for invalid selections...');
		
		// Check start time
		if (elements.timeFromEl.value && elements.timeFromEl.selectedOptions[0] && elements.timeFromEl.selectedOptions[0].disabled) {
			console.log(`  🚮 Clearing invalid start time selection: ${elements.timeFromEl.value}`);
			elements.timeFromEl.value = '';
		}
		
		// Check end time
		if (elements.timeToEl.value && elements.timeToEl.selectedOptions[0] && elements.timeToEl.selectedOptions[0].disabled) {
			console.log(`  🚮 Clearing invalid end time selection: ${elements.timeToEl.value}`);
			elements.timeToEl.value = '';
		}
	}
	
	function updateTimeOptions() {
		console.log('\n🔄 === updateTimeOptions() called ===');

		if (elements.timeFromEl.value || elements.timeToEl.value) {
			elements.timeFromEl.value = '';
			elements.timeToEl.value = '';
			jQuery(elements.timeFromEl).trigger('change.select2');
			jQuery(elements.timeToEl).trigger('change.select2');
			console.log('🧼 Cleared time selections due to date change');
		}

		
		const selectedFromDate = elements.fromDateEl.value;
		const selectedToDate = elements.toDateEl ? elements.toDateEl.value : '';
		
		console.log('📅 Date values:');
		console.log(`  From date: "${selectedFromDate}"`);
		console.log(`  To date: "${selectedToDate}"`);
		console.log(`  Today date: "${config.todayDate}"`);
		
		// Determine conditions
		const isFromDateToday = selectedFromDate === config.todayDate;
		const isToDateSameAsFrom = selectedToDate === selectedFromDate;
		const isToDateToday = selectedToDate === config.todayDate;
		
		console.log('🧮 Conditions:');
		console.log(`  isFromDateToday: ${isFromDateToday}`);
		console.log(`  isToDateSameAsFrom: ${isToDateSameAsFrom}`);
		console.log(`  isToDateToday: ${isToDateToday}`);
		
		// Always reset first
		resetAllTimeOptions();
		
		// Apply restrictions based on conditions
		if (isFromDateToday) {
			console.log('⏰ Start date is TODAY - applying time restrictions to start time');
			restrictTimeOptions(elements.timeFromEl, 'start time');
		} else {
			console.log('📅 Start date is NOT today - all start times available');
		}
		
		if (isToDateSameAsFrom && isFromDateToday) {
			console.log('⏰ End date same as start date AND start date is today - applying time restrictions to end time');
			restrictTimeOptions(elements.timeToEl, 'end time');
		} else if (isToDateToday && !isToDateSameAsFrom) {
			console.log('⏰ End date is TODAY but different from start date - applying time restrictions to end time');
			restrictTimeOptions(elements.timeToEl, 'end time');
		} else {
			console.log('📅 End date conditions not met - all end times available');
		}
		
		// Clear any now-invalid selections
		clearInvalidSelections();
		
		console.log('✅ === updateTimeOptions() completed ===\n');
	}
	
	// Event listeners with better event handling
	function setupEventListeners() {
		console.log('🎧 Setting up event listeners...');
		
		// Multiple events for date changes to catch all scenarios
		const dateEvents = ['change', 'blur', 'input'];
		
		if (elements.fromDateEl) {
			dateEvents.forEach(eventType => {
				elements.fromDateEl.addEventListener(eventType, function(e) {
					console.log(`📅 Start date ${eventType} event triggered. New value: "${this.value}"`);
					// Small delay to ensure date picker has updated
					setTimeout(updateTimeOptions, 100);
				});
			});
		}
		
		if (elements.toDateEl) {
			dateEvents.forEach(eventType => {
				elements.toDateEl.addEventListener(eventType, function(e) {
					console.log(`📅 End date ${eventType} event triggered. New value: "${this.value}"`);
					// Small delay to ensure date picker has updated
					setTimeout(updateTimeOptions, 100);
				});
			});
		}
		
		// Also listen for clicks on date inputs (for date picker popups)
		if (elements.fromDateEl) {
			elements.fromDateEl.addEventListener('click', function() {
				console.log('🖱️ Start date clicked');
				setTimeout(updateTimeOptions, 500); // Longer delay for date picker
			});
		}
		
		if (elements.toDateEl) {
			elements.toDateEl.addEventListener('click', function() {
				console.log('🖱️ End date clicked');
				setTimeout(updateTimeOptions, 500); // Longer delay for date picker
			});
		}
		
		console.log('✅ Event listeners setup complete');
	}
	
	// Submit button event listener
	if (elements.submitButton) {
		elements.submitButton.addEventListener('click', function(e) {
			console.log('\n🚀 === Submit button clicked ===');

			const searchData = {
				from: elements.fromDateEl ? elements.fromDateEl.value : '',
				to: elements.toDateEl ? elements.toDateEl.value : '',
				from_time: elements.timeFromEl ? elements.timeFromEl.value : '',
				to_time: elements.timeToEl ? elements.timeToEl.value : ''
			};

			console.log('📊 Collected search data:', searchData);

			// Store in localStorage
			localStorage.setItem('bookingSearchData', JSON.stringify(searchData));
			
			console.log('💾 Search data stored in localStorage');
			console.log('=== Submit handling completed ===\n');
		});
	}
	
	// Initialize
	setupEventListeners();
	
	// Initial update with delay to ensure page is fully loaded
	setTimeout(() => {
		console.log('🎯 Running initial time options update...');
		updateTimeOptions();
	}, 500);
	
	console.log('✅ Booking form setup complete');
});
</script>