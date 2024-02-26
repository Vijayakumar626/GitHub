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
define( 'DB_NAME', 'mydb' );

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
define( 'AUTH_KEY',         'I<s?Hp5K(iuSr7Y;kJB23ac2V[8h!%TSMgF0kLf9dG*R[LB(<*|xYK.Y,^!Yq1K9' );
define( 'SECURE_AUTH_KEY',  'mh6!#l H^})ec szI*IZ/kB(d`rP$9K,{.p5y^J18|6^a-JO^Su1hEO>0A2IsF;A' );
define( 'LOGGED_IN_KEY',    '6V{D*&/T*H#Gq&r9L/3NgLlx;Gk9>npLeakV+.ZG5s^&ql1p*7>/MdEWgHEo3HMe' );
define( 'NONCE_KEY',        'vxJ:ntrc.J;8W3qX* i=FG.,KSoD1^*48p3{p`1K-w,Wwg?+Ck@$eW6a&t.I`<W<' );
define( 'AUTH_SALT',        '$_LoQr%7r9h&KM9#Lsl{q8i8ld]f!,!{aSF:Z9tnJ^jhNZ,q.!_=[9bbLHVErJx;' );
define( 'SECURE_AUTH_SALT', 't4<,&#V%`m#Zfkx3P`.PYJjiwaoB^CL).3fFoT.,80JdrF=,t)9quv}4~Q~b}|<b' );
define( 'LOGGED_IN_SALT',   '}m%P0z$)nnmk,Bq$sK77quUpI3`hR|#O EnL~811jnr|no.5bQ},,:8_sz([Dip0' );
define( 'NONCE_SALT',       'AAF-iHU99;b>7rOJ~S~gAjm?$+}]c0lGJ3GEd8,Z$@t,ttqdau<64:P2WfcXD[q`' );

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
