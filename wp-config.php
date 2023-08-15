<?php
define( 'WP_CACHE', true );

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'StylishHub' );

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
define( 'AUTH_KEY',         'xhQhL]li>3u2kkyna>+EE}&En%s~l<hiV!|Q`5_S_gdD%_f0Sh+Y=L`L[{>Jx!p3' );
define( 'SECURE_AUTH_KEY',  '9-$3SIy %:{H^(@(IfdgDn=xN)wX,5z1B&LbrOTY~i1a0E8$sJ%NzMqF3@@^E@,;' );
define( 'LOGGED_IN_KEY',    '7-e)DTESM7yLFM_j%`H;2kC]#z:$8.}.0#pG;h{f_DkJd/[9Jj$+EpIZUkw8ZBwM' );
define( 'NONCE_KEY',        'xzU_0$!DK0JdAF]02=K[#)pUrWuCt0h}B$|R{ail*-6pQ(SYt;!x|SQRD0rB~*ed' );
define( 'AUTH_SALT',        'Y9VL`-x_PUu9SlZyza=A!@dpubzVN63:zNogI-1-l@!qE%3t/(}DJN,~LxS7BO6f' );
define( 'SECURE_AUTH_SALT', '>31Z=*vrP3&<}T_M&b/|A_:uo:PGVfcU0j^h-b2*de9*~PJ]/+KSaJi`B?:NAhR_' );
define( 'LOGGED_IN_SALT',   'wq{XMro5b$1.hH1.?I{EvID%3AO/@a(ZMD(g%Mr-g~{&pN/~BMNM;Y#(3%hFfe$C' );
define( 'NONCE_SALT',       'W0.P4=/)|R/W8@eiPwgRy3&kT+v(^T(^AeC]X5(rLhE_L%7`N^aCcbI}Yc*k~P y' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
