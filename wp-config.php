<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thamer' );

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
define( 'AUTH_KEY',         'XX<T&$#N=01J^?;:L`s0p/d?6ZL;KdZm9iI)cNx+hvsRG6iAAiDk?g_ *Z7bQNSk' );
define( 'SECURE_AUTH_KEY',  'W.ic)DTfV@Ck|Ff4AYbf]JQwAB:ytg2w,Y/GbjosSk]JCaUEpdV+K5M/%7{)H]&4' );
define( 'LOGGED_IN_KEY',    't+7}np};5X2.Lz0QxSsuRcDMk6.%f%24s1)EDi0LTVPvw+BS|4Bl[Y[MZER/[2sR' );
define( 'NONCE_KEY',        'Lb@HNgC>yc:b|vgC/(6_#GgiBeO7BF=}pq;r^XG%jfA/k@2NA,gK|G*DB[#ez8gn' );
define( 'AUTH_SALT',        'nBAx6fx{=6:<GbZ+C`JY+>a5oa]@i}QNy%/O,EknOTjJ-<!/+mreZq|{cvmZANVS' );
define( 'SECURE_AUTH_SALT', '/sk(iqf50+_xT~G}9/>GRz:4BXV]c}5E(NVC%9<a}9l6?cK&HG=p^S.#?<%sa#pC' );
define( 'LOGGED_IN_SALT',   '/3)7{-S WD=8h$04<d{K~pN Mbwr_bJWqjdI]ELn4RJAb^GF+ JyoXaW7nv7%66?' );
define( 'NONCE_SALT',       'S/5d9Lmk<PF_b759{,I&g#i&NrFZGu#F#,$;^SO/=`lS~/z6AVE>7N!(nf~i]RZ;' );

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
