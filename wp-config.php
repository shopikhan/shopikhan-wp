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
define( 'DB_NAME', 'admin_shopikhan' );
/** MySQL database username */
define( 'DB_USER', 'admin_shopikhan' );
/** MySQL database password */
define( 'DB_PASSWORD', '$$$SHOp123' );
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
define( 'AUTH_KEY',         ' >!)J8^mV2u^5Rg^238hUc~CHp<N`8:nNIb/~A.KPESu<[>#_K/M$$+v=hGct^xr' );
define( 'SECURE_AUTH_KEY',  'ePln`0&KbiY@M]5WrEBbEbmCa|Vm=G&.%.nd+#e_Ff`Yfb/]8H^pAy|?>]N]p%d2' );
define( 'LOGGED_IN_KEY',    '^IY2he= *TpG`7{rh(CRu3~B=izf~^D33s{@^#4(K5dJ`$.y|wyn ?hX^cEgrm9p' );
define( 'NONCE_KEY',        'Cwg|!U1eLeu`TZ)`l6`<Gzs9b8znUep-n`k@+@-%l0l:suR>QT`&^E&qkeA=Qxl[' );
define( 'AUTH_SALT',        'E+m=-#@O7+3]mi6wLT/9<U17B}`1Q6Hn+*r8KJgH^6YR.%>h2*rQ6~JO6fXx0Rai' );
define( 'SECURE_AUTH_SALT', '8!h}5EMLKNMv!qxbzBX?N5CyU;#(m N_UqXA#!XbdY9e%BW_L`adoxtCr.FX~@?_' );
define( 'LOGGED_IN_SALT',   'fto&}ihg2lmrp^5Ud4)5;VA3!KmZ;~iUEnDz9[?tDFn~^1q&!PsjE0)S@pH$Op&U' );
define( 'NONCE_SALT',       'HDxPl:ha^g9mJ5<`A3R$5vaCZ,%`FDdc+>LIMaYc.K:Pwk~sG4q0&aBch!(pl=N3' );
define('FTP_USER', 'admin_shopikhan');
define('FTP_PASS', '$$$SHOp123');
define('FTP_HOST', '178.128.41.240:21');
define('FTP_SSL', fales);
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
 
 define( 'WP_MEMORY_LIMIT', '256M' );
define( "WP_DEBUG", false );
/* define('FS_METHOD','direct'); */
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );