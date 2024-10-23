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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '<tQyN~U! rtPHi|kG:P~MbOA|MJ@CZ/%c9Wsem:*?O!Klny#rrLd`vYFZ]~PsOFC' );
define( 'SECURE_AUTH_KEY',  '0mR(B%~q6hofzjKTgO8adqGGUFa){%%RU^x_X.TP6#OI6&fObb(j>0cN.L0suw7]' );
define( 'LOGGED_IN_KEY',    '|]GN?H)=HDd_O#k|TQGtt{-cb*|sD=Ru5Q3@aNM)(R<C;H,,I6!%?mAj/2t?~B);' );
define( 'NONCE_KEY',        '6N:ABqy[sS2x8v `-tD^1)h<IfL $epnvBL0U.76H(]3Pu&)JNZl=(3i5?PH;Mwd' );
define( 'AUTH_SALT',        '%x 0lElC+!|=Lj[q#Gn/2j# &wiHLnkUGpm7Y`jtk%!S H+TvIvAY2_ExYC*g8/#' );
define( 'SECURE_AUTH_SALT', 'HoR[K55d!pid6](rF>VQ=1F])a&m.x5[/,ygRy@Q(XauD=*TULS>1mqH6*3.ajSm' );
define( 'LOGGED_IN_SALT',   '~eQ(_FQg<$X(kFp}{0P6(,7=j!U;?Jq&_9]>_bfd6`SIG1GQ9tbV$|14ADmcz4g&' );
define( 'NONCE_SALT',       'yV;Z7`oOU{*u}V?{0:)><5zDyuPBk <h/O^iA#FA.kj+D^hq_*#LZz9yNB0NWb{(' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
