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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'aw4=cHR7`:~+f*>j4c/I Q}@i_cT_QbbNhyZBZ?mNzwc}m2H<!&Z>%DlRP#xQ0_5' );
define( 'SECURE_AUTH_KEY',  'Kr~?Bvvez)~o5TlnXM i-QcpeX:?(^1.t^{6aFlUR_?L3^bXK(m9i^2&V/O1&<|c' );
define( 'LOGGED_IN_KEY',    'W7Y)D>B)WBsc#*sU;1vg0_@cf,ML:PaQ,y[Im]@&TqSWF1+bDs5HUjyWcKXV9$4Z' );
define( 'NONCE_KEY',        's[KKfgM q3iXE`*B_>jEms7/ymqu6jRnTDU1kz}AST+^FW&!(,z6@c. jZZ]$Rku' );
define( 'AUTH_SALT',        'OeJOv_!y*Lz<9F[/it;!S/&{Zt.}g6) .x.`6_F7WE.KUPwcp-$4%`|$l-t9KF<4' );
define( 'SECURE_AUTH_SALT', ')4[!y_Io2g}nS&n|}rk#?0e5 I.5a@V?pM^/shaS$)/dei6nhdULvC@Y`Lpu-xc;' );
define( 'LOGGED_IN_SALT',   'J!Xs+)2i}~n736 C[G1)q&(V6V =* 0^XkS<y3j2f msh$$0cc&3ki+iNvmA.fE*' );
define( 'NONCE_SALT',       ':4lv-<$#P .R<KDqb4bbC~|VY:^@DqkPKS}ta_,.)mSXm~_.N:pYt~-o$3R 5L0M' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'yswp_woo_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
