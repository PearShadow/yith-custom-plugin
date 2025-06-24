<?php
/**
 * Class YITH_WCBK_Wpml_Extra_Costs
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\Booking
 */

defined( 'YITH_WCBK' ) || exit;

/**
 * Class YITH_WCBK_Wpml_Extra_Costs
 *
 * @since   2.1
 */
class YITH_WCBK_Wpml_Extra_Costs extends YITH_WCBK_Wpml_Integration_Helper {
	/**
	 * Constructor
	 *
	 * @param YITH_WCBK_Wpml_Integration $wpml_integration WPML Integration instance.
	 */
	protected function __construct( $wpml_integration ) {
		parent::__construct( $wpml_integration );

		// Translate the title of the person type.
		add_filter( 'yith_wcbk_product_extra_cost_get_name', array( $this, 'translate_extra_cost_name' ), 10, 2 );

		// Retrieve only the extra costs in Default Language.
		add_action( 'yith_wcbk_before_get_extra_costs', array( $this->wpml_integration, 'set_current_language_to_default' ) );
		add_action( 'yith_wcbk_after_get_extra_costs', array( $this->wpml_integration, 'restore_current_language' ) );
	}

	/**
	 * Translate the person type title in current language
	 *
	 * @param string $title The title.
	 * @param int    $id    The ID.
	 *
	 * @return string
	 */
	public function translate_extra_cost_name( $title, $id ) {
		return get_the_title( $this->wpml_integration->get_current_language_id( $id ) );
	}
}
