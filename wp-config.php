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
define( 'DB_NAME', 'u598424622_JAf3n' );
/** Database username */
define( 'DB_USER', 'u598424622_GtxVQ' );
/** Database password */
define( 'DB_PASSWORD', 'ppwJzWI0Kx' );
/** Database hostname */
define( 'DB_HOST', 'mysql' );
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
define( 'AUTH_KEY',          '!1rPR@>l{wSDN_oY3mblX,*#uRZE?`v*c*8@j,X+AoHL]7}MZC@psVJyzH2xas6<' );
define( 'SECURE_AUTH_KEY',   '=:[uz25pluD4t|HDa-k</h.P*hgLn!kUho&zsM)V45F#a$H~}oTfE7o9<A.$]vzy' );
define( 'LOGGED_IN_KEY',     'RgFr[}*1n]zT;p{1g[;cizD/X$.KTHgAXA?#`:5.Y#vnokb*qla*?a#I CUZTL4A' );
define( 'NONCE_KEY',         '!W.x;IhqEEwUFI~NtZ?H_ET*9)yp$BgZw&@^*~ihjJ:$mq[K>*(_;/nG&]Zvj.vO' );
define( 'AUTH_SALT',         '.d9OHT*gW&I1`,(R?+=g3)`L=un1*HwJEoORo!BT.VB}@cF>dzdaGAJzOe9eCo42' );
define( 'SECURE_AUTH_SALT',  'zwD;?pj)G:TC^8wNHclb;h.vtk*@jEA_-0<jXSuo{/[QkA?;s7Q>ozgpcCs&!8;*' );
define( 'LOGGED_IN_SALT',    'wV:dY_z9 |ywAEUK ^ZIDQD)-[en{pGA%^_^P.?+2.+o|~SF{J&a,uYmnly~tBY/' );
define( 'NONCE_SALT',        '^=Zma 9u+Kvq(kj{Yu_.<Q!egXH#LK(WKr_cze|~O0:k?IM-hLN7x2Hk#xD%iFr%' );
define( 'WP_CACHE_KEY_SALT', 't{vvam`f;I.X+osmT*D)sj;s+jgJNlaOVFLhM&f/iOWM,z++L_0+5>j{ G%7hP O' );
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
/* Add any custom values between this line and the "stop editing" line. */
define( 'WP_AUTO_UPDATE_CORE', false );

define('WP_MEMORY_LIMIT', '512M');

/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';