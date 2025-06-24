jQuery(function($) {
    const initTimepicker = function(selector) {
      $(selector).timepicker({
        timeFormat: 'HH:mm',
        stepMinute: 30,
        controlType: 'select',
        oneLine: true
      });
    };
  
    initTimepicker('.yith-wcbk-booking-start-time');
    initTimepicker('.yith-wcbk-booking-end-time');
  
    $('.yith-wcbk-booking-start-date, .yith-wcbk-booking-end-date').datepicker({
      dateFormat: 'yy-mm-dd',
      minDate: 0
    });
  });
  