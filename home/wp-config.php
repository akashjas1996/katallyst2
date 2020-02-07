<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u502039025_katallyst_word' );

/** MySQL database username */
define( 'DB_USER', 'u502039025_katallyst_word' );

/** MySQL database password */
define( 'DB_PASSWORD', 'VJ]Rn#EG' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zw]7L+5yYCXI3n,_ZH-])%eWz@Ijz4qO?2,GTvq6$&.pGtJ3:-Y@Rg#kLx^$jPH1' );
define( 'SECURE_AUTH_KEY',  't!gp+j*##us^_I8aY:E%9c<H2fI#UF,_36oy({d0;7QA>_W.5dq@kQ8B&FX]l9&v' );
define( 'LOGGED_IN_KEY',    '7v@ sz{Qpo63#ueO3X4<(:]TZL[!zUXFxJ*q6X&`5xPea?P)}CS@R b1 >9sRmB~' );
define( 'NONCE_KEY',        '-eD6cZ$J53WKA(uNKkTvF}KLjR|Ql!fz5$a~ORYtkJ0O[oVoy0=*_M8Onw~hYX)s' );
define( 'AUTH_SALT',        'n@p6%!EZ+zx:ssdENw(nEK1qV6o] I* vXb^_oT+l!-l;y2D`l8<@mOn*?HkM}A.' );
define( 'SECURE_AUTH_SALT', 'y}*zc4K/iR`kr{2ev!o(--bo[5|(kFKK9%X;Tk6gpzqUtoX0~H6q7;9%fs@/6nA#' );
define( 'LOGGED_IN_SALT',   '1nQM5Se6B5?w95O7uPM&(a2d|+/m)?YSa~lTi1B3x^I5?gUJ_dM, i2Y3w$Y5kL|' );
define( 'NONCE_SALT',       ':9 C7#~I[86+B0~{Aa?81S%R,2GyK%wF8?T}FXkT,@wOI#ko}ox_s)<HD<cVCWhp' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kata_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
