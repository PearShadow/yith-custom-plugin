/* global jQuery */
console.log('custom-booking-duration.js loaded');

if (typeof jQuery === 'undefined') {
    console.error('jQuery is not loaded, custom-booking-duration.js cannot proceed');
} else {
    console.log('jQuery detected, version:', jQuery.fn.jquery);

    jQuery(function ($) {
        "use strict";

        console.log('Inside jQuery document ready, initializing custom booking duration logic');

        // Function to calculate duration in hours
        function calculateDuration($startDate, $endDate, $startTime, $endTime, $durationField, $hiddenDurationField) {
            console.log('calculateDuration called');
            var startDate = $startDate.val(),
                endDate = $endDate.val(),
                startTime = $startTime ? $startTime.val() : '',
                endTime = $endTime ? $endTime.val() : '';

            console.log('Start Date:', startDate);
            console.log('End Date:', endDate);
            console.log('Start Time:', startTime);
            console.log('End Time:', endTime);

            if (startDate && endDate && startTime && endTime) {
                console.log('All required fields have values');
                var start = new Date(startDate),
                    end = new Date(endDate),
                    startParts = startTime.split(':'),
                    endParts = endTime.split(':'),
                    startHours = parseInt(startParts[0], 10),
                    startMinutes = parseInt(startParts[1], 10),
                    endHours = parseInt(endParts[0], 10),
                    endMinutes = parseInt(endParts[1], 10);

                console.log('Parsed Start:', startHours, startMinutes);
                console.log('Parsed End:', endHours, endMinutes);

                start.setHours(startHours, startMinutes);
                end.setHours(endHours, endMinutes);

                console.log('Start DateTime:', start);
                console.log('End DateTime:', end);

                var timeDiff = end.getTime() - start.getTime();
                var hours = Math.round(timeDiff / (1000 * 3600));

                console.log('Calculated Hours:', hours);

                if (hours > 0) {
                    console.log('Updating duration fields with:', hours);
                    if ($durationField) {
                        $durationField.val(hours);
                        console.log('Visible duration field updated:', $durationField.val());
                    } else {
                        console.log('Visible duration field not found');
                    }
                    if ($hiddenDurationField) {
                        $hiddenDurationField.val(hours);
                        console.log('Hidden duration field updated:', $hiddenDurationField.val());
                    } else {
                        console.log('Hidden duration field not found');
                    }
                } else {
                    console.log('Hours is not positive:', hours);
                }
            } else {
                console.log('Missing required fields');
            }
        }

        // Function to initialize duration calculation
        function initializeDurationCalculation() {
            console.log('Initializing duration calculation');
            var $form = $('.yith-wcbk-booking-form');
            if ($form.length) {
                console.log('Booking form found:', $form.data('product-id'));
                var productId = $form.data('product-id'),
                    $startDate = $('#yith-wcbk-booking-start-date-' + productId),
                    $endDate = $('#yith-wcbk-booking-ui-end-date-' + productId),
                    $startTime = $('select[name="from-time"]'),
                    $endTime = $('select[name="to-time"]'),
                    $durationField = $('#yith-wcbk-booking-duration-' + productId),
                    $hiddenDurationField = $('input[name="duration"]');

                console.log('Elements:', {
                    startDate: $startDate.length,
                    endDate: $endDate.length,
                    startTime: $startTime.length,
                    endTime: $endTime.length,
                    durationField: $durationField.length,
                    hiddenDurationField: $hiddenDurationField.length
                });

                // Calculate duration on page load if all fields are populated
                calculateDuration($startDate, $endDate, $startTime, $endTime, $durationField, $hiddenDurationField);

                // Bind change events
                $startDate.add($endDate).add($startTime).add($endTime).on('change', function () {
                    console.log('Field changed:', $(this).attr('id') || $(this).attr('name'));
                    calculateDuration($startDate, $endDate, $startTime, $endTime, $durationField, $hiddenDurationField);
                });
            } else {
                console.log('Booking form not found');
            }
        }

        // Initialize on document ready
        initializeDurationCalculation();

        // Handle AJAX-loaded forms
        const observer = new MutationObserver(function(mutations) {
            if ($('.yith-wcbk-booking-form').length) {
                console.log('Booking form detected via MutationObserver');
                initializeDurationCalculation();
                observer.disconnect();
            }
        });
        observer.observe(document.body, { childList: true, subtree: true });

        // Hook into YITH Booking form events (if available)
        $(document).on('yith_wcbk_booking_form_loaded yith_wcbk_booking_form_updated', function() {
            console.log('YITH booking form event detected');
            initializeDurationCalculation();
        });
    });
}