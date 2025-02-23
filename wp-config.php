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
define( 'DB_NAME', 'VisionaryHubs' );

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
define( 'AUTH_KEY',         '`2gzuytgVT{*>?,.h}TejphuTD 22K6d3f65q[$$r}|]dUJab*5n5_MH-cmlI%yo' );
define( 'SECURE_AUTH_KEY',  'nz&8 rm9JUoN#gc(z=VcM?4J#axP#OQ[rCdh6sT|&VE4(* 2,^y5A;po(E+Gpc)7' );
define( 'LOGGED_IN_KEY',    '?OjHjSx{INU2![ }_]Gjb]HrYGc>&~q&@-|/1Voy7920=,63]nRZJr~S$7TfYc[{' );
define( 'NONCE_KEY',        'u=bT`edI<SZHC|o)P}z=I^Us(Jj;iMd{e#6*f_BD9sr^N*R*x+E(*~zCf(LQ-7h_' );
define( 'AUTH_SALT',        '$VeYEpvaf7yf+JZ_{% 0:EuP)`tE-T@BO=*#B5*2T_j]-0{}L%t-zRKvm.WN<Ok+' );
define( 'SECURE_AUTH_SALT', ' ZADY1k&R_9d5<Y aAzdjt}`Q& tzPOyAx51D=Sb<}X{[g^`Kh9w`s0Rna3ubm9K' );
define( 'LOGGED_IN_SALT',   'YS$d/V%!&-Xf_1U@PWUKIa@O[g5M3BG{^Tf,tb/NB?6I>@1o$zN.Z*jv7r-%[at<' );
define( 'NONCE_SALT',       'F!TH&d~VmO$9eBa;`h)l)Q*i6%*&TZ7.vbx7!&7r)3`V}5j0uA2],=}3pZ$rw^rE' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
