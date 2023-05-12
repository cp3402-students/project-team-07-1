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
define( 'DB_NAME', 'u918916565_jssZJ' );

/** Database username */
define( 'DB_USER', 'u918916565_5et5z' );

/** Database password */
define( 'DB_PASSWORD', 'snrcsqMv8J' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'wfuo?l4$K06RB-MX}C?XdYya%d0hzQUa;))h:xAx^k,A}C16dBne?~wy!E!98@xw' );
define( 'SECURE_AUTH_KEY',   'e*py]m.a3)6xGD[PM#!J}gcx8x5QvL+ka`9Ql83Y@n{Hh$YVx%jHDnm4SOuTNW A' );
define( 'LOGGED_IN_KEY',     '@Np?:f^VHr6GPiTa=`*y*C*eNF%tZ4N$T/GRIjr?5F;&Z6mJT834iZJw>h[?(E`O' );
define( 'NONCE_KEY',         '.M)V~t]euYiDG?jwU!$1~rl]tky>-/8comrh@-o)E=X&2U-07,.QIzoW#B1m^5.2' );
define( 'AUTH_SALT',         'PRu>wt(=QtM.zJW.M9NO;!}=|u9#E,p+0pi{rV${J}yD y?Po{XIn7!/sdS$ww<~' );
define( 'SECURE_AUTH_SALT',  'oDnEK)Q*i` >bs5/s;~u4VcEZt&;UcL1l{uo|U!e62}Q+I7!.u1]b8O<;[wQv_Gf' );
define( 'LOGGED_IN_SALT',    'IBWHbg ~BjG:XHTzh+bx~Ub?_5Cd!I0m)<gb{8Up jom(B/P5%4{chmKap&[|T>*' );
define( 'NONCE_SALT',        'VQihNXJ8~(oB-P0VU]Y]aHUB[7)5d%:#5f=t#1JoI5+)[JU0>^<8m@L6b1!Xq&Dp' );
define( 'WP_CACHE_KEY_SALT', 'lCc.~wbGou`Q5872trO|38uzKLYJJ8H $m]&am][QEfl}6af 9aY7dcb@OXIh=hx' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
