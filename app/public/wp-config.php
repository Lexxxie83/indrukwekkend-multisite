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
define( 'AUTH_KEY',          '|ArSqjn)Q~Q[X6n~:{PFD|(*3SN$U#63Q{!$Yk5._q7jU_bL[!84&ezMSt;mMzy3' );
define( 'SECURE_AUTH_KEY',   '5`Wm{SR%iT|oS|KvJ-v`o/t-P*mE,yR@;5ky%pvS|v!%O2{WrI)0OUKyVic*8z95' );
define( 'LOGGED_IN_KEY',     'efgT=bk591&cDEOmkQKR4S^jXcd?tHt1G2&2Mc{RvOC2pk9UaOwMucxQ`Dirg`?-' );
define( 'NONCE_KEY',         '~)Ge5=<Q1Zw[4.NXj_mM3o??EBOs4cAiC;Z,E fIWAde{.+{Jw|fgS34J%(TB0*J' );
define( 'AUTH_SALT',         'v$M`q|Y[m.|&SsfH%AFdVduU#,B+%9Q0K&;%R>0~OIvZ-0T:QPCd$v^9j;};@*^1' );
define( 'SECURE_AUTH_SALT',  'ZwU$bHwFiwf $3?m0Co+Jp@=9k>6H$15(Js5XO@5UjuL,P&<=>9>crci,|[gqT*/' );
define( 'LOGGED_IN_SALT',    'd+:WgKH?BZfpjS1bm+TjCgr3`A+38Xo3BdOhIAq>bkbd.J.0wAe73gaFqkdYSKMP' );
define( 'NONCE_SALT',        '[IQ1_h:E{a8&X=z_<yA eb[8p}mV@L4GvwUAIj@zLD;l&x#yy-}px/L4p?f)fx,+' );
define( 'WP_CACHE_KEY_SALT', 'J,8dZ#L+KXh;xq2&t7)?3/qo|Z|^y:n*Zc/sR2dep7?bsJ|G.~H-t1{|QU3!^bF+' );


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
