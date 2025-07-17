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
	// Configuration from PHP
	const config = {
		currentHour: <?php echo $current_hour; ?>,
		currentHourPlusThree: <?php echo $current_hour_plus_three; ?>,
		todayDate: '<?php echo $today_date; ?>',
		currentId: '<?php echo $current_id; ?>'
	};
	
	// DOM elements
	const elements = {
		fromDateEl: document.querySelector('#yith-wcbk-booking-search-form-date-day-start-date-' + config.currentId),
		toDateEl: document.querySelector('#yith-wcbk-booking-search-form-date-day-end-date-' + config.currentId),
		timeFromEl: document.querySelector('#time_from'),
		timeToEl: document.querySelector('#time_to'),
		submitButton: document.querySelector('.yith-wcbk-booking-search-form-submit')
	};
	
	// Safety check
	if (!elements.fromDateEl || !elements.timeFromEl || !elements.timeToEl) {
		return;
	}
	
	// Flag to prevent clearing during initialization
	let isInitializing = false;
	
	function resetAllTimeOptions() {
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
		Array.from(selectElement.options).forEach(option => {
			if (option.value !== '') {
				const optionHour = parseInt(option.getAttribute('data-hour'));
				
				if (optionHour < config.currentHourPlusThree) {
					option.style.display = 'none';
					option.disabled = true;
				}
			}
		});
	}
	
	function clearInvalidSelections() {
		// Check start time
		if (elements.timeFromEl.value && elements.timeFromEl.selectedOptions[0] && elements.timeFromEl.selectedOptions[0].disabled) {
			elements.timeFromEl.value = '';
		}
		
		// Check end time
		if (elements.timeToEl.value && elements.timeToEl.selectedOptions[0] && elements.timeToEl.selectedOptions[0].disabled) {
			elements.timeToEl.value = '';
		}
	}
	
	function updateTimeOptions(skipTimeClear = false) {
		// Only clear time selections if not initializing and not explicitly skipped
		if (!isInitializing && !skipTimeClear && (elements.timeFromEl.value || elements.timeToEl.value)) {
			elements.timeFromEl.value = '';
			elements.timeToEl.value = '';
			jQuery(elements.timeFromEl).trigger('change.select2');
			jQuery(elements.timeToEl).trigger('change.select2');
		}
		
		const selectedFromDate = elements.fromDateEl.value;
		const selectedToDate = elements.toDateEl ? elements.toDateEl.value : '';
		
		// Determine conditions
		const isFromDateToday = selectedFromDate === config.todayDate;
		const isToDateSameAsFrom = selectedToDate === selectedFromDate;
		const isToDateToday = selectedToDate === config.todayDate;
		
		// Always reset first
		resetAllTimeOptions();
		
		// Apply restrictions based on conditions
		if (isFromDateToday) {
			restrictTimeOptions(elements.timeFromEl, 'start time');
		}
		
		if (isToDateSameAsFrom && isFromDateToday) {
			restrictTimeOptions(elements.timeToEl, 'end time');
		} else if (isToDateToday && !isToDateSameAsFrom) {
			restrictTimeOptions(elements.timeToEl, 'end time');
		}
		
		// Clear any now-invalid selections (but not during initialization)
		if (!isInitializing) {
			clearInvalidSelections();
		}
	}
	
	// Helper function to get first available time option that hasn't passed today
	function getFirstAvailableTime(selectElement, isToday = false) {
		// Look for the first option that's not disabled and not empty
		for (let i = 0; i < selectElement.options.length; i++) {
			const option = selectElement.options[i];
			if (option.value !== '' && !option.disabled && option.style.display !== 'none') {
				// If it's today, check if the time hasn't passed using the existing logic
				if (isToday) {
					const optionHour = parseInt(option.getAttribute('data-hour'));
					if (optionHour >= config.currentHourPlusThree) {
						return option.value;
					}
				} else {
					return option.value;
				}
			}
		}
		
		return null;
	}
	
	// Function to fill date and time inputs
	function fillInitialDatesAndTimes() {
		// Use config.todayDate if available, otherwise get today's date
		const today = config.todayDate ? new Date(config.todayDate) : new Date();
		
		// Get date 3 days from now
		const threeDaysFromNow = new Date(today);
		threeDaysFromNow.setDate(today.getDate() + 3);
		
		// Format dates to YYYY-MM-DD
		const formatDate = (date) => {
			const year = date.getFullYear();
			const month = String(date.getMonth() + 1).padStart(2, '0');
			const day = String(date.getDate()).padStart(2, '0');
			return `${year}-${month}-${day}`;
		};
		
		// Format time to HH:MM, ensuring 00:00 for midnight
		const formatTime = (time) => {
			// Check if time is already in HH:MM format
			if (typeof time === 'string' && /^\d{2}:\d{2}$/.test(time)) {
				return time;
			}
			// Convert hour number to HH:MM format
			const hour = parseInt(time, 10);
			if (isNaN(hour)) return '00:00'; // Fallback if invalid
			// Use modulo to convert 24 to 00 for midnight
			const formattedHour = hour === 24 ? '00' : String(hour % 24).padStart(2, '0');
			return `${formattedHour}:00`;
		};
		
		// Set the date input values with multiple methods
		if (elements.fromDateEl) {
			const fromDate = formatDate(today);
			
			// Try multiple ways to set the value
			elements.fromDateEl.value = fromDate;
			elements.fromDateEl.setAttribute('value', fromDate);
			
			// If it's a jQuery datepicker, try setting it via jQuery
			if (typeof jQuery !== 'undefined' && jQuery(elements.fromDateEl).datepicker) {
				try {
					jQuery(elements.fromDateEl).datepicker('setDate', today);
				} catch (e) {
					// Silent fail
				}
			}
			
			// Trigger events to notify other scripts
			elements.fromDateEl.dispatchEvent(new Event('change', { bubbles: true }));
			elements.fromDateEl.dispatchEvent(new Event('input', { bubbles: true }));
		}
		
		if (elements.toDateEl) {
			const toDate = formatDate(threeDaysFromNow);
			
			// Try multiple ways to set the value
			elements.toDateEl.value = toDate;
			elements.toDateEl.setAttribute('value', toDate);
			
			// If it's a jQuery datepicker, try setting it via jQuery
			if (typeof jQuery !== 'undefined' && jQuery(elements.toDateEl).datepicker) {
				try {
					jQuery(elements.toDateEl).datepicker('setDate', threeDaysFromNow);
				} catch (e) {
					// Silent fail
				}
			}
			
			// Trigger events to notify other scripts
			elements.toDateEl.dispatchEvent(new Event('change', { bubbles: true }));
			elements.toDateEl.dispatchEvent(new Event('input', { bubbles: true }));
		}
		
		// Set the time input values
		if (elements.timeFromEl) {
			// Check if start date is today to determine if we need to use time restrictions
			const fromDate = formatDate(today);
			const isStartDateToday = fromDate === config.todayDate;
			
			// Get the first available time option that hasn't passed (if today) or just first available
			const firstAvailableTime = getFirstAvailableTime(elements.timeFromEl, isStartDateToday);
			const fromTime = firstAvailableTime || formatTime(config.currentHourPlusThree);
			elements.timeFromEl.value = fromTime;
			
			// Trigger select2 update
			if (typeof jQuery !== 'undefined') {
				jQuery(elements.timeFromEl).trigger('change.select2');
			}
		}
		
		if (elements.timeToEl) {
			const toTime = formatTime(config.currentHourPlusThree);
			elements.timeToEl.value = toTime;
			
			// Trigger select2 update
			if (typeof jQuery !== 'undefined') {
				jQuery(elements.timeToEl).trigger('change.select2');
			}
		}
	}
	
	// Event listeners with better event handling
	function setupEventListeners() {
		// Multiple events for date changes to catch all scenarios
		const dateEvents = ['change', 'blur', 'input'];
		
		if (elements.fromDateEl) {
			dateEvents.forEach(eventType => {
				elements.fromDateEl.addEventListener(eventType, function(e) {
					// Skip if we're initializing
					if (isInitializing) return;
					
					// Small delay to ensure date picker has updated
					setTimeout(() => updateTimeOptions(), 100);
				});
			});
		}
		
		if (elements.toDateEl) {
			dateEvents.forEach(eventType => {
				elements.toDateEl.addEventListener(eventType, function(e) {
					// Skip if we're initializing
					if (isInitializing) return;
					
					// Small delay to ensure date picker has updated
					setTimeout(() => updateTimeOptions(), 100);
				});
			});
		}
		
		// Also listen for clicks on date inputs (for date picker popups)
		if (elements.fromDateEl) {
			elements.fromDateEl.addEventListener('click', function() {
				if (isInitializing) return;
				
				setTimeout(() => updateTimeOptions(), 500); // Longer delay for date picker
			});
		}
		
		if (elements.toDateEl) {
			elements.toDateEl.addEventListener('click', function() {
				if (isInitializing) return;
				
				setTimeout(() => updateTimeOptions(), 500); // Longer delay for date picker
			});
		}
	}
	
	// Submit button event listener
	if (elements.submitButton) {
		elements.submitButton.addEventListener('click', function(e) {
			const searchData = {
				from: elements.fromDateEl ? elements.fromDateEl.value : '',
				to: elements.toDateEl ? elements.toDateEl.value : '',
				from_time: elements.timeFromEl ? elements.timeFromEl.value : '',
				to_time: elements.timeToEl ? elements.timeToEl.value : ''
			};

			// Store in localStorage
			localStorage.setItem('bookingSearchData', JSON.stringify(searchData));
		});
	}
	
	// Initialize with proper sequence
	function initialize() {
		// Set initialization flag
		isInitializing = true;
		
		// Setup event listeners first
		setupEventListeners();
		
		// Fill initial dates and times
		fillInitialDatesAndTimes();
		
		// Update time options with skip flag to prevent clearing the values we just set
		updateTimeOptions(true);
		
		// Clear initialization flag
		isInitializing = false;
	}
	
	// Start initialization with delay to ensure page is fully loaded
	setTimeout(initialize, 1000);

	const submitButton = document.querySelector('.yith-wcbk-booking-search-form-submit');
    const locationInput = document.querySelector('.yith-wcbk-booking-location');
    
    if (submitButton && locationInput) {
        submitButton.addEventListener('click', function(e) {
            // Check if location input is empty
            if (!locationInput.value.trim()) {
                e.preventDefault(); // Prevent form submission
                
                // Create popup/modal
                showLocationRequiredPopup();
            }
        });
    }
    
    function showLocationRequiredPopup() {
        // Remove existing popup if present
        const existingPopup = document.querySelector('.location-required-popup');
        if (existingPopup) {
            existingPopup.remove();
        }
        
        // Create popup HTML
        const popup = document.createElement('div');
        popup.className = 'location-required-popup';
        popup.innerHTML = `
            <div class="popup-overlay">
                <div class="popup-content">
                    <h3>Location Required</h3>
                    <p>Please select a location before searching for bookings.</p>
                    <button class="popup-close-btn">OK</button>
                </div>
            </div>
        `;
        
        // Add popup to page
        document.body.appendChild(popup);
        
        // Add click event to close button
        const closeBtn = popup.querySelector('.popup-close-btn');
        const overlay = popup.querySelector('.popup-overlay');
        
        closeBtn.addEventListener('click', closePopup);
        overlay.addEventListener('click', function(e) {
            if (e.target === overlay) {
                closePopup();
            }
        });
        
        // Focus on location input after closing
        function closePopup() {
            popup.remove();
            locationInput.focus();
        }
        
        // Close popup on Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && document.querySelector('.location-required-popup')) {
                closePopup();
            }
        });
    }
});
</script>