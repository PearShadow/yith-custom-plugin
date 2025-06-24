jQuery(document).ready(function ($) {
    // Initialize end time picker (assumes Flatpickr, adjust if YITH uses a different library).
    $('.yith-wcbk-booking-end-time').flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: 'H:i',
        // Restrict end time based on start/end dates.
        onOpen: function (selectedDates, dateStr, instance) {
            var startTimeField = $(instance.element).data('related-start');
            var endDateField = $(instance.element).data('related-end-date');
            var startDateField = $(instance.element).data('related-start-date');
            var startDate = $(startDateField).val();
            var endDate = $(endDateField).val();
            var startTime = $(startTimeField).val();

            if (startDate && endDate && startDate === endDate && startTime) {
                var startHour = parseInt(startTime.split(':')[0], 10);
                var startMinute = parseInt(startTime.split(':')[1], 10);
                instance.set('minTime', [startHour, startMinute]);
            } else {
                instance.set('minTime', null);
            }
        }
    });

    // Calculate duration when date/time fields change.
    function updateDuration() {
        var startDate = $('.yith-wcbk-booking-start-date').val();
        var startTime = $('.yith-wcbk-booking-start-time').val();
        var endDate = $('.yith-wcbk-booking-end-date').val();
        var endTime = $('.yith-wcbk-booking-end-time').val();

        if (startDate && endDate && startTime && endTime) {
            var startDateTime = new Date(startDate + ' ' + startTime);
            var endDateTime = new Date(endDate + ' ' + endTime);

            if (endDateTime > startDateTime) {
                // Calculate duration in hours.
                var durationMs = endDateTime - startDateTime;
                var durationHours = durationMs / (1000 * 60 * 60);
                // Update duration field (assume duration is in hours).
                $('.yith-wcbk-booking-duration').val(durationHours);
                // Trigger change event for YITH's form validation.
                $('.yith-wcbk-booking-duration').trigger('change');
            }
        }
    }

    // Bind change events to update duration.
    $('.yith-wcbk-booking-start-date, .yith-wcbk-booking-start-time, .yith-wcbk-booking-end-date, .yith-wcbk-booking-end-time').on('change', updateDuration);

    // Hide duration field.
    $('.yith-wcbk-form-section-duration').hide();
});

