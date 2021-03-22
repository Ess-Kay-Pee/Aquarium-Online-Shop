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
define( 'DB_NAME', 'acmeOnlineShop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'buyg=;=do[jM.ke3AWJrI=Dyh$qWl86Js9?5){%#p3]=^YI%Ob:MzkkE !mC{|qQ' );
define( 'SECURE_AUTH_KEY',  'M]++.VQuVEi}C4I8hB!+1Q=Oyl9/|*UQ,AM#+PV0Uyd}YR!#R/J=) Vr93|vi$|;' );
define( 'LOGGED_IN_KEY',    'pC<]n<UT-VN-NYO+ema1jF$|M_R9#50_;VlJ;M4qQg?5>iN3`W3*%jY[Bq7%q1#7' );
define( 'NONCE_KEY',        'X7gCeT8#zIA^<h/?%^5;j#niBw}ar?[FVOhK!Sq?5(]_%Yx<A1J*,7(T`:xzpgnz' );
define( 'AUTH_SALT',        'gd?~-au.~]_bk3$v){<)<|^)y)hXoJbA`7EKPn?PjlHLZ$g1X=.wqAgFjFY432 d' );
define( 'SECURE_AUTH_SALT', 'Ott/]C3jC7IL#,93uVQ@?REe&]*{FWIw!E*g ,^rr>8eZ8xRmghgM &w$@fO!KKR' );
define( 'LOGGED_IN_SALT',   'mg`O8[IP((F:8VqS>W:]J.5{gt^w#B>Mc+%P/4mlw_C*@bWgyCU_MneX*mHt{9a+' );
define( 'NONCE_SALT',       '[j{nQ%$ZT85/.h>B!MOj^qncmSreSU.vn-DpN%/VT.hGWaa-|2S,j2@eJ!No}!+Y' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
