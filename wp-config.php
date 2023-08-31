<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vez3yvf8usry1jtq' );

/** Database username */
define( 'DB_USER', 'zfum7wsaqzdiy48a' );

/** Database password */
define( 'DB_PASSWORD', 'zf2fox4dy0s5zi7v' );

/** Database hostname */
define( 'DB_HOST', 'clwxydcjair55xn0.chr7pe7iynqr.eu-west-1.rds.amazonaws.com' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'cJMmBgDsYj5ojaPTBDm0TjynomXJifqi4gD+Lt7yS//1qXdjd6NqjAQuBLG32hX3DVLKxu136r9cMc/aCO2DJA==');
define('SECURE_AUTH_KEY',  'Y4HIkKf2Qckf1dpRr0S4IK9bhTRCl8BT+yuMe9Fp56y/bM1588SYpGv1+UEUIBJhlfxUwrFpr5XPo+jImnn3og==');
define('LOGGED_IN_KEY',    '0RuInsLr7ybKwPfi6Aaz9O+1gKCjsoXUWao4b42jKG2h0XDTvHOeHyA810rocptXEfA+y3ia8CU0c5HI5z7rww==');
define('NONCE_KEY',        'bfvr6BKNAF8gIxfRQlyPMVWdRAdOBqq4Z75vlFZEC63UsrNalvg0NaGQkuVcTkEqB6k1HdhuNWSQl0Pa0hq3fg==');
define('AUTH_SALT',        'nHomA0+TfjQJN+In2EVvlQbwZW37Cord5t+0HzdpGZVOj27Z4Tn89+kR0ZT9iRANAE0di9ehghURWp/va1RnuQ==');
define('SECURE_AUTH_SALT', 'XJsMc89ahUxwgsi2sHJ2pGwRTA2buvppTkhDJ9J+skzvME0vPy9nmiH4P/oxBzueDNlfYM2Sc5QrrkNgubcSOw==');
define('LOGGED_IN_SALT',   '4o2rHPD2ahkjbJxJ/eNNb0l9f2qx8WGxx67lZDFrCEtPVJLxcoTlC4/9UJfR/FT038WPR/1jcRoM1odEc3E3nQ==');
define('NONCE_SALT',       'aeloadsJroAMRWugI/ZxnonuBqaejMAMWbJ4wssUWTfbWP9BtoRJTcwihFI/y3HOteCmEyWBMiQrDtyOGfgtkg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
