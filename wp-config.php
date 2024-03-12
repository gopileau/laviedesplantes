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
define( 'DB_NAME', 'La_vie_des_plantes' );

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
define( 'AUTH_KEY',         'JMMC;BKD&i~?C)RUPS=,Z!Hv8J&;>/R(I#b5D@AT#r(xh9cV^z0ExYyg{QDoK G%' );
define( 'SECURE_AUTH_KEY',  'gw9qPUSA]l4kR}&0KX/emr!HEo@nU[7mtAaJ.H;#nVVJAxN-2nFA_=vO>G/3=fo&' );
define( 'LOGGED_IN_KEY',    'rXQv6pe[6]t7Iu`fa]u]P@oEWe(G:?II?af1)*~ntS)06bX9rlAbO1wG5WN1=.@G' );
define( 'NONCE_KEY',        'ry]O5iTn[.,6@-Q56~~KOZ$B:BZk>?T5$w=}8f:G0wJU.dohFlfi!&/A:|rCn[*O' );
define( 'AUTH_SALT',        'G9[;wgs1bz=oRn{_vblDRss*y2:*s|.a724C$=,J|GGRhZg-tGyjI+(V;;g{2]cZ' );
define( 'SECURE_AUTH_SALT', 'k!Vl1D3p<eJc4i-EHuec|x>[)+rvq9im|TD$s<4u7$T=h[[8m]J*2*7S6[x@FxG!' );
define( 'LOGGED_IN_SALT',   ';#AJxOtN!glT__GAe+p(|Aa[:,~CN!0 Lc#<7mxI@$#lEr][Ro)w;U7 fR{?Y;Y ' );
define( 'NONCE_SALT',       ' jUSNy@$3VJBZ/>:,#9n;2|yXuj#t52bGVp%n/kYg-7P5!9y]sK5Kt8]Ku5yV?:z' );

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
