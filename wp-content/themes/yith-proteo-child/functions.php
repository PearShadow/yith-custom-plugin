<?php
/**
 * Theme functions and definitions.
 * This child theme was generated by YITH Proteo.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

function yithproteo_child_enqueue_styles() {
    // Enqueue parent theme styles
    wp_enqueue_style( 'yith-proteo-style', get_template_directory_uri() . '/style.css', array('select2'), YITH_PROTEO_VERSION );

    // Enqueue child theme styles
    wp_enqueue_style( 'yith-proteo-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'yith-proteo-style' ),
        wp_get_theme()->get('Version')
    );

    // Load DateTimePicker only on booking pages
    if ( function_exists('yith_wcbk_is_booking_page') && yith_wcbk_is_booking_page() ) {
        // jQuery UI Timepicker Addon
        wp_enqueue_script(
            'jquery-ui-timepicker-addon',
            'https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js',
            array('jquery', 'jquery-ui-datepicker', 'jquery-ui-slider'),
            '1.6.3',
            true
        );

        wp_enqueue_style(
            'jquery-ui-timepicker-addon-style',
            'https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css',
            array(),
            '1.6.3'
        );

        // Custom datetime picker initializer
        wp_enqueue_script(
            'yith-booking-datetime-picker',
            get_stylesheet_directory_uri() . '/js/booking-datetime-picker.js',
            array('jquery', 'jquery-ui-timepicker-addon'),
            '1.0.0',
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'yithproteo_child_enqueue_styles');

function enqueue_yith_custom_booking_duration_script() {
    // Only enqueue on pages with the booking form
    if ( is_product() || is_singular( 'yith_booking' ) ) {
        wp_enqueue_script(
            'yith-wcbk-custom-booking-duration',
            get_stylesheet_directory_uri() . '/js/custom-booking-duration.js',
            array( 'jquery', 'yith-wcbk-booking-form' ), // Dependencies
            '1.0.0',
            true // Load in footer
        );
    }
}
add_action( 'wp_enqueue_scripts', 'enqueue_yith_custom_booking_duration_script' );

// Adjust YITH Booking date and time format for JS side
add_filter('yith_wcbk_date_picker_date_format_js', function($date_format) {
    return 'yy-mm-dd'; // jQuery UI format
});

add_filter('yith_wcbk_date_picker_time_format_js', function($time_format) {
    return 'HH:mm'; // 24-hour format
});
