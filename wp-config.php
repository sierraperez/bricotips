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
define( 'DB_NAME', 'bricotips' );

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
define( 'AUTH_KEY',         'Zc?BE0!#SVT=<iZy?_zJ!hU:Wrt44GjF/B h$%H&gVGzuhw kr2=GA`nz<nqH1u+' );
define( 'SECURE_AUTH_KEY',  'zt*xF2!OodF>G%UMi-<=949UG5lGK}-t@Jxr(%4ma0Gh]]yReU!a+O=9x&R;_=VG' );
define( 'LOGGED_IN_KEY',    '1A2|UTG;L!K?JP6/&i/W8ZN4WC0#!GWamXLsyVn<ot-ubq#N5pE7zv,7pc;S?-g6' );
define( 'NONCE_KEY',        'HeU>eO_Te3web3!PVpag{V@&2EvwgU8,SZRt8LEwEzP5:Ju4i;JipD<*lS,&ZQDz' );
define( 'AUTH_SALT',        '=]Bzv~q1Sk=]5<}pUvr)cG|EIee*kvw+ t]nSPh(1fOMBpL ngx@)m#[dXjUzGv6' );
define( 'SECURE_AUTH_SALT', '3?bnI(+Dtay_S.{G;2llaC{eP[ (`hGD2w+)xOR/jPqLmt47klD)W!+}8E8MiAe6' );
define( 'LOGGED_IN_SALT',   '|~T2}>u%@lQd?Wp7/f$i#=Bf^%d;zCzY6&SJ7(r;l<:@a8fPp<Q,=+?F(7z[4Q@g' );
define( 'NONCE_SALT',       'Q28b4J^1YQS3}!Y._MDV7cE@xT/7n`mc%.J) ~:8J5]2i_zOrX{gc>bzprIe1Q?^' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
