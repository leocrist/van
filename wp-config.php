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
define( 'DB_NAME', 'qmodeler_van' );

/** Database username */
define( 'DB_USER', 'qmodeler_admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin@123' );

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
define( 'AUTH_KEY',         'RC=#BF G;KX;U_aR.Y@{%@T4#p!N[*({k_GQCf/+lI[B:TAER?0Vl5;fa(k+!s0M' );
define( 'SECURE_AUTH_KEY',  'aK5^?HI|p1&gVB?rq54Rf/4JBVr/~|CXd0[xkmGTNPR0U#IXD9_:H,(U7B.KBNdH' );
define( 'LOGGED_IN_KEY',    'kE(XdXZG#xp_]n&X~Z{;u(b+CrbE-C _4q7PgdTx6j4CDjv7n;jsH?ziZQXnDc:U' );
define( 'NONCE_KEY',        '&^c>nI|6v+p<(QuV#RngVvl_+ur9svOg9QTktujf[0m6XKY+{)XK%{(Rk45.Vt0[' );
define( 'AUTH_SALT',        '}bjQsKG#_A8:eQ%i6?gP;lw~D;J]m(HiE5oHZIpw& 7%ym}Vn{gKOC.1 cU <1IO' );
define( 'SECURE_AUTH_SALT', 'Fr<J30^mv.q_1Mx?.KbXBzgT{p2c.(){!jzN7`C+vE_sl(6Z{QfJaTix%2,bWx[L' );
define( 'LOGGED_IN_SALT',   '%Lobsu[HIExg/K{yIiD#/5J`hRq,>2/_{m!H@k*epV({g7kNPnwf~j KZm/q]>I>' );
define( 'NONCE_SALT',       'R3C;?]KQ,Ug3YTj9ryE=5<MP;i:HCkXn}2WYr(eYm*_>S.uBJOIK1leOhAQM-Qai' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'van_';

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
define('FS_METHOD','direct');
define( 'UPLOADS', 'wp-content/uploads' );
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
