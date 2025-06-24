<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'carsrese_wp607' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jjn3jqyguvhqmye68kreyha6cwvtlww9yehronlp3zqkrorujfnvztzec6xp1snx' );
define( 'SECURE_AUTH_KEY',  'vytzve4nggjnurzpnrbozv98brjm6ymx0hjangzecy5vkpuzbgnclcvb31lrhchz' );
define( 'LOGGED_IN_KEY',    'hhgpuzdiznouul0j4yn8a8xld3bwadxlcr9plznmf92tpucwoepin5e93shiuzez' );
define( 'NONCE_KEY',        'lcb4aolexjoigzhksjfvotw6dyblpwmjmb7zqzclhzv3vuovwwtwwqibzpx7v8uf' );
define( 'AUTH_SALT',        'kffmym5rrnzplupe9phc7ptvkqp8sztia63yqpvnwxgp9d6n7dtzmsu3dccg6tgv' );
define( 'SECURE_AUTH_SALT', 'ishbv6eiz0u2awrf7h1oln2fyhgzqiijw2pnugusykribgib2qhu18gjut6clnmp' );
define( 'LOGGED_IN_SALT',   'icruvoopgr8tzzku1ta7ucvrbswuf5imvgfggchovtld8391ffxuafetayzmgghu' );
define( 'NONCE_SALT',       'subrgok62emjzoehacwgfo03hteye18b9necp7xdcb50pgh76i94e0kxqltq4fzq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wppo_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
