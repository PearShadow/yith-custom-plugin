/* global jQuery */
if (typeof jQuery === 'undefined') {
    console.error('jQuery is not loaded, custom-booking-duration.js cannot proceed');
} else {
    console.log('jQuery detected, version:', jQuery.fn.jquery);

    jQuery(function ($) {
        "use strict";

        console.log('Inside jQuery document ready, initializing custom booking duration logic');

        // Function to calculate duration in hours
        function calculateDuration($startDate, $endDate, $startTime, $endTime, $durationField, $hiddenDurationField) {
            var startDate = $startDate.val(),
                endDate = $endDate.val(),
                startTime = $startTime ? $startTime.val() : '',
                endTime = $endTime ? $endTime.val() : '';

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


                start.setHours(startHours, startMinutes);
                end.setHours(endHours, endMinutes);


                var timeDiff = end.getTime() - start.getTime();
                var hours = Math.round(timeDiff / (1000 * 3600));

                console.log('Calculated Hours:', hours);

                if (hours > 0) {
                    console.log('Updating duration fields with:', hours);
                    if ($durationField) {
                        $durationField.val(hours);
                    } else {
                        console.log('Visible duration field not found');
                    }
                    if ($hiddenDurationField) {
                        $hiddenDurationField.val(hours);
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
            var $form = $('.yith-wcbk-booking-form');
            if ($form.length) {
                var productId = $form.data('product-id'),
                    $startDate = $('#yith-wcbk-booking-start-date-' + productId),
                    $endDate = $('#yith-wcbk-booking-ui-end-date-' + productId),
                    $startTime = $('select[name="from-time"]'),
                    $endTime = $('select[name="to-time"]'),
                    $durationField = $('#yith-wcbk-booking-duration-' + productId),
                    $hiddenDurationField = $('input[name="duration"]');

                // Calculate duration on page load if all fields are populated
                calculateDuration($startDate, $endDate, $startTime, $endTime, $durationField, $hiddenDurationField);

                // Bind change events
                $startDate.add($endDate).add($startTime).add($endTime).on('change', function () {
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
                initializeDurationCalculation();
                observer.disconnect();
            }
        });
        observer.observe(document.body, { childList: true, subtree: true });

        // Hook into YITH Booking form events (if available)
        $(document).on('yith_wcbk_booking_form_loaded yith_wcbk_booking_form_updated', function() {
            initializeDurationCalculation();
        });
    });
}