<?php
/**
 * Booking Totals list template.
 *
 * @var array              $totals     array of totals
 * @var string             $price_html the total price of the booking product
 * @var WC_Product_Booking $product    the booking product
 *
 * @package YITH\Booking\Templates
 */

defined( 'YITH_WCBK' ) || exit;

?>
<div class="yith-wcbk-booking-form-totals__list">
	<?php foreach ( $totals as $key => $total ) : ?>
		<?php
		$label         = $total['label'];
		$value         = $total['value'];
		$is_discount   = $value < 0;
		$price         = $total['display'] ?? ( yith_wcbk_get_formatted_price_to_display( $product, $total['value'] ) );
		$extra_classes = 'yith-wcbk-booking-form-total__' . esc_attr( $key );

		$extra_classes .= $is_discount ? ' yith-wcbk-booking-form-total--discount' : '';
		?>
		<div class="yith-wcbk-booking-form-total <?php echo esc_attr( $extra_classes ); ?>">
			<div class="yith-wcbk-booking-form-total__label"><?php echo wp_kses_post( $label ); ?></div>
			<div class="yith-wcbk-booking-form-total__value"><?php echo wp_kses_post( $price ); ?></div>
		</div>
	<?php endforeach; ?>

	<div class="yith-wcbk-booking-form-total  yith-wcbk-booking-form-total--total-price">
		<div class="yith-wcbk-booking-form-total__label"><?php esc_html_e( 'Total', 'yith-booking-for-woocommerce' ); ?></div>
		<div class="yith-wcbk-booking-form-total__value"><?php echo wp_kses_post( $price_html ); ?></div>
	</div>
</div>

<script>
jQuery(document).ready(function($) {
    console.log('Initializing custom booking duration logic at ' + new Date().toLocaleString());

    function convertPriceToDaysAndHours() {
        const priceElements = document.querySelectorAll('.yith-wcbk-booking-form-total__label');

        if (priceElements.length === 0) {
            return;
        }

        priceElements.forEach((element, index) => {
            const priceSpan = element.querySelector('.woocommerce-Price-amount');
            if (!priceSpan) {
                return;
            }
            
            const priceText = priceSpan.textContent.trim(); // e.g., "25,00 KM"
            const hoursText = element.textContent.match(/\d+\s*hours?/i);
            if (!hoursText) {
                return;
            }
            
            const hours = parseInt(hoursText[0].match(/\d+/)[0]);
            const days = Math.floor(hours / 24);
            if (days < 1) {
                return;
            }
            
            // Convert price to per-day (25,00 KM * 24 = 600,00 KM)
            const pricePerHour = parseFloat(priceText.replace(',', '.').replace(/[^\d.]/g, '')); // Extract numeric value
            const pricePerDay = pricePerHour * 24;
            const formattedPrice = pricePerDay.toFixed(2).replace('.', ',');

            // Create new display text
            const newTimeText = `${days} day${days > 1 ? 's' : ''}`;
            
            element.innerHTML = `<span class="woocommerce-Price-amount amount">${formattedPrice}&nbsp;<span class="woocommerce-Price-currencySymbol">KM</span></span> x ${newTimeText}`;
        });
    }

    // Initial run
    convertPriceToDaysAndHours();

    // Handle dynamic updates
    $(document).on('updated_checkout wc_fragments_refreshed yith_wcbk_booking_form_updated', function() {
        console.log('Dynamic content update detected at ' + new Date().toLocaleString());
        convertPriceToDaysAndHours();
    });

    // Retry for slow-loading elements
    setTimeout(convertPriceToDaysAndHours, 2000);
});
</script>