<?php

// BEGIN iThemes Security - No modifiques ni borres esta línea
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Desactivar editor de archivos - Seguridad > Ajustes > Ajustes WordPress > Editor de archivos
// END iThemes Security - No modifiques ni borres esta línea

define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', 'apwordpresspage' );

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
define( 'AUTH_KEY',         '.`?;0AD_@2Cn@^@2(iaK_]f#7jtu{F|qSKP{,PklVLVfh:v{,}]==*[e[.]bR+i9' );
define( 'SECURE_AUTH_KEY',  '~KN<5<Q7Wc^jCaz1v{R5%G|3]5 xI-&x{h@2eh$YC|4k4 :rSxs+)>I>p:aYU1D~' );
define( 'LOGGED_IN_KEY',    '-Zdj<;.+c@}*Z<rX4;/pU(]A.1ZBkXka 6u1i:7apW8J}<PplB.G:EQ/4rCH>K8!' );
define( 'NONCE_KEY',        '6W~i*S3QYMt{tea?ji$ 2 7fw1^)s;<U@F5|e/(8Tp>_cjdMLZ3hY>em<l`tsl7O' );
define( 'AUTH_SALT',        'p&d,]?lcZ,:T]~jFiiCnwu5d,i~26OwwR8U;,__quP5_[ $y~E,n|yBcin>#l`RA' );
define( 'SECURE_AUTH_SALT', 'e2c,:XaK_|;`JEw)9;_,78SWFwof;K7X?QvhfV(27~*$kAatpr#)J:+lWKrB[|1F' );
define( 'LOGGED_IN_SALT',   '@?pO] :B/Z__]zn1.`Me(}xc%v=1QzcD3BVn.f 1[8lzW#Y,yJ0D]{&j/<<-A2na' );
define( 'NONCE_SALT',       'IB(UH020#I[+1}I[]^f.@tI2GaaNtCrMJK: _F/#Lh4!]OWvO(*dLkNC<^9.:CZY' );

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
