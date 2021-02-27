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
define( 'DB_NAME', 'wp_blog_jipeek' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'xoB6z|uSRX )&7ZigX*YL4ZaSc&61F~*<$#ozLm`?#:z9U2h*=:q}&K+E8T:-_1D');
define('SECURE_AUTH_KEY',  'N@I.&B0Fi&ir;5x|Po-vM3x2du..eXX2W?(k9dD}7/rX2v%:Rt){|^++ ma>xTUa');
define('LOGGED_IN_KEY',    '%KMKD&U]Xd-U)T|]5O<TNx>.X`{RDq2wt#XnB5im[)-=zkukl.ZdLri,R>ztMpo|');
define('NONCE_KEY',        'ooIe:{QR,C^6dz#e.Lx>-LvqM@X1#=e^<E=l|_0JpCjv]i/u-U cLt*IN_`Zy5U-');
define('AUTH_SALT',        'eDz<a%{xY}dIh>*aWv*`ZEkqH2]KF?X/.-p17%uo{_1XCSFuw*n)]+xegBb]3FfU');
define('SECURE_AUTH_SALT', '6Us)v<](p25<D=O6/TQ7K<0-+V.Mu.p*8Lo9~,Js^0bi!3+?H &NC:+,Yyi[P[0q');
define('LOGGED_IN_SALT',   '3#E~nOd&z)RRO%-X)Su:a$ptO(n<o+&%e2`2Hvj!G~T@Lhw+3fZjq>SQQY;(OOR`');
define('NONCE_SALT',       '64e6gdIh$@(vhfcC>GEtlUZ|Km5HGr@X[jWl;6CZa(`8-nXya(+vKgx$@>k$B|b}');

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
