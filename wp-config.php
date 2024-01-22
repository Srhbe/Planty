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
define( 'DB_NAME', 'local' );

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
define( 'AUTH_KEY',          '/c[<ZYD#`4IbI!T6*#E%kwG#}k|201O,VKMg5VdPo=c4iyM}AOfGBUGo[o*A77Jc' );
define( 'SECURE_AUTH_KEY',   'rj6;/Aa~]GC!SZ-u`8dK.E)<^R>%~r.bcbcZmbySgOU0L3[x):=S0aD{o#n%.Z5z' );
define( 'LOGGED_IN_KEY',     '[vf /qey@/keNx:3=7,{A/My^*97?df=nnv67T:VfINoSIkvCA-rCk[CG~unAcl(' );
define( 'NONCE_KEY',         ';UST&dKCf=$Px6D<FD]{NRlDX>9FDDdWgHLVi;={UVf55.wdGA-g`Tt.atZeQ:|_' );
define( 'AUTH_SALT',         'jG),NI)K<X$b/Izp~Hc8b0H I$u{G;AOst3HJC!g6w{ItZ!IDjmXL1V0-v9ES!1A' );
define( 'SECURE_AUTH_SALT',  '^7t*;[;ena{YBt|@G2VzODBRtE]P{j+9Y|o!(@;}1Tk!RT[M~0lUk,9olg$-]!ei' );
define( 'LOGGED_IN_SALT',    'f]M!e/7nJ#s.e$Z<veH*;4THTiKwvw)N$O5T!FScY7IHft:ChfX| 3=`$o KP05P' );
define( 'NONCE_SALT',        'Pb:JiFWn/x@cx,Gq#lc._-I0`_E+=3:yjSR;y)Q}VFRP(,!&4]lVejg0q*J8MY&J' );
define( 'WP_CACHE_KEY_SALT', ' {(-zfFA/HO|9^lJEb6p**+QSix =jm_Hs7As:mAM~k/C &o/f~6,,<+`%u|VYr>' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
