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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'photosnap_theme' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '1s@/Lw[4,#Z9w`>?fKn4Nq7fC5qp8J|&{Zo]zFBk/)FYKMlLD@=!B6rLyYtBzD{2' );
define( 'SECURE_AUTH_KEY',  'D>;JM@#>- Zxw<((dB &Yhj+TnBL+iI.8]gKn}GiJ*27be4KwO _C--<a/h4B3s6' );
define( 'LOGGED_IN_KEY',    '6MvmeJl CBNX=eDEYh/9D)Rg?]gwTKs*2g3s9[-qLveT&?Y@[!ib]GK</bq7/?^b' );
define( 'NONCE_KEY',        '|L$l6)t{)1yTQKn3^/k$B&k4U+3#R)CT6?.COq7tlB(!}[o0m{U4V:Iqq*sBFIm?' );
define( 'AUTH_SALT',        'd,g4iDs%Jr%Cv%w#G(il@Ie&:`n9=TT~[LikI$qwsSlx)Tf[/+yzn7SFUKkiTK2.' );
define( 'SECURE_AUTH_SALT', '3G)h{8K5v.;&3p;XnX!irc(E(>v ??3(I-[Y@3H3,d3T+a=7Qk)=Dm`:tl$o@j@r' );
define( 'LOGGED_IN_SALT',   'P^kJ^Ul&@O>-do{o&zti,+/CN)w{U=,RcB>,,7P/)_y,z3IZ# :W-v-t&yv3cNjS' );
define( 'NONCE_SALT',       'Y;MJTf/N!-V<@%SRoHRnuEm,48cR9PV:O*SXCqyiT5?dG#:X*.47U [pxysaL&|L' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
