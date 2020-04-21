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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpfive' );

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
define( 'AUTH_KEY',         '?S MOGkmx.stsj^WVph(H+[lJ^PrIt(zl>!?kkI%RMj3e>S{l.AG#EJ&-p^2F=B>' );
define( 'SECURE_AUTH_KEY',  '_0:H=u.R?/&}3&8JKt6I3?Nvp5U@cKMA.=VbI+h[}Z=f=d|4_JM[tZQ.3RiPRQ3A' );
define( 'LOGGED_IN_KEY',    'X<e`*Kc^slfxOfb+MDQ^5.&a#NvKDb(2[#)|kPE|dQI:]|Ve7h$hm96]!<` u_$&' );
define( 'NONCE_KEY',        'h6EgiC{(5!^/|DAwv+:$zW=VL<<5>4c4MFYw5D4E_j..q>Lql^z?f1)?PdBGu]f5' );
define( 'AUTH_SALT',        'FMM?Yx&Ic:B`W^dVL-z-U;^m&~|FH9|l$*#5R{:GBL<9K)h&f~M(E3eyoa]4izNI' );
define( 'SECURE_AUTH_SALT', 'k}qP<Rp?e[k_ Q/rCah1K{1,+RM9 l$[1/Bc,.lTo/=oPCI@)Mgj]!@4<@DSrAy_' );
define( 'LOGGED_IN_SALT',   'LO)iV{*m!G>aJ!8i @k>`l_9#OalKdxHqOi8tkh>[,WGj<O5ca*vC1sCW[h<1iBT' );
define( 'NONCE_SALT',       's }`8!j;F&<JIWkK+]6xJ)xM{ZTj%?DY_-X0[z:060o;:(iT0P_As;bA;SDH>c$e' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
