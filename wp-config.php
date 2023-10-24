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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\wordpress\wp-content\plugins\wp-super-cache/' );
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
define( 'AUTH_KEY',         'w<2~3Yjb0Vlek-2Z#aFIapO:ALoP4Gd)eOJ>Pl)_bW4/jgXyVWlQ{fq Ta=F|cN ' );
define( 'SECURE_AUTH_KEY',  'C8mSi:2D`+q#WIq&W<:N4=]><$S$(mPoq|(#O(|QtvOM_L3w(vqsCJ7pg!w-F=;%' );
define( 'LOGGED_IN_KEY',    '+bJ.-a&#_,VZ?rmV25quh~v20kaSgw6[GWUgJglGdZedM/H5=BMf$3m$mXIF^ct7' );
define( 'NONCE_KEY',        '<-{XDCuSDxf3&hpn:]`Z0#22;8D.w4UG3J=}zl!:6tf0S`*spsX]E];g%4zk?u9(' );
define( 'AUTH_SALT',        'GoX/_11^ln+tUX+_*PVY-M#=b]B:>BaJ#A6swKwFu>jxOKx!uqGayyI`L2Hm}lmq' );
define( 'SECURE_AUTH_SALT', '>p6yyvOgFnz!opkxpLqI0BFw8/tPe.UGzrAtl4E@N|]VX3Y*(+AB@aq9NbpY5-%{' );
define( 'LOGGED_IN_SALT',   'LTcyT48nY?{ZFqI}wZN(UEO&w+K+xDPXp71{PJ5f<?oo2e/^k3nm#PbTYFaw74Qv' );
define( 'NONCE_SALT',       's#`!U(=x6w6MMm<R`S3)oIP2Hr29(gkit81(?GW4)Y*BD@Z$}oD+YTn&obxjL~SM' );

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
