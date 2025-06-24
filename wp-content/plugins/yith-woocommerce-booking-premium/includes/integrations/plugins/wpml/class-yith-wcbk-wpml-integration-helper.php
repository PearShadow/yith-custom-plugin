<?php
/**
 * Class YITH_WCBK_Wpml_Integration_Helper
 *
 * @author  YITH <plugins@yithemes.com>
 * @package YITH\Booking
 */

defined( 'YITH_WCBK' ) || exit;

/**
 * Class YITH_WCBK_Wpml_Integration_Helper
 *
 * @since   5.14.0
 */
class YITH_WCBK_Wpml_Integration_Helper {
	/**
	 * The instances.
	 *
	 * @var self[]
	 */
	protected static $instances = array();

	/**
	 * WPML Integration instance.
	 *
	 * @var YITH_WCBK_Wpml_Integration
	 */
	protected $wpml_integration;

	/**
	 * Constructor
	 *
	 * @param YITH_WCBK_Wpml_Integration $wpml_integration WPML Integration instance.
	 */
	protected function __construct( YITH_WCBK_Wpml_Integration $wpml_integration ) {
		$this->wpml_integration = $wpml_integration;
	}

	/**
	 * Get class instance.
	 *
	 * @param YITH_WCBK_Wpml_Integration $wpml_integration WPML Integration instance.
	 *
	 * @return self
	 */
	final public static function get_instance( YITH_WCBK_Wpml_Integration $wpml_integration ) {
		self::$instances[ static::class ] = self::$instances[ static::class ] ?? new static( $wpml_integration );

		return self::$instances[ static::class ];
	}

	/**
	 * Prevent cloning.
	 */
	private function __clone() {
	}

	/**
	 * Prevent un-serializing.
	 */
	public function __wakeup() {
		yith_wcbk_doing_it_wrong( get_called_class() . '::' . __FUNCTION__, 'Unserializing instances of this class is forbidden.', '3.0' );
	}
}
