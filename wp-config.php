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
define( 'DB_NAME', 'lossimpsons' );

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
define( 'AUTH_KEY',         '8`:[W-C2bp[rm0__E>Gfn~^siNoSwVlw1pX7qq.YFXM6|Jp6P<S{_fa?.xtM3v[&' );
define( 'SECURE_AUTH_KEY',  'Ps@:%l{K=SXx~[N>P#>sl-F<~UXy #=>nC9b!q^/{~X7+0DdD4>&?taK5}/ws:#Y' );
define( 'LOGGED_IN_KEY',    '+m<qhNrDz:,n[#lro]uaSk.q%f9vXMdw/g,,b{N_kQ_v<R~{C[yH57Uq5w_t@} G' );
define( 'NONCE_KEY',        'L!HmY}?|12Ph#^L/]jB]4eb4hyPRVt0G<p>!,5MX{GEDON|PqAMNqyLo{?|STCxB' );
define( 'AUTH_SALT',        '.K4#Bw08G,i9j<tL0q2I04 C_9a7L7<1VOJT+Mn&EfH)k=QCvapV,xL>,Dijm.g{' );
define( 'SECURE_AUTH_SALT', ',qsliMuPV{:D1DVt}5A/-h8)v2mgu}E2.Z`Y~vUwy{-xEN(^aXCfF0-/MdjxiW0R' );
define( 'LOGGED_IN_SALT',   '*UvyU?XXkmr7x1n_y<`#CMa2|LB`Z<]e4{eA7q|SRL{H%W[lQ1o)o-/5Y=$a9BjQ' );
define( 'NONCE_SALT',       'v6{cN,{%Rx$|aFMaA!,d_DMvS8]U6#uso:Y)PA}/yij3b41l)$+5A0W_`Wx2%*lr' );

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

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/lossimpsons' );
define('WP_HOME', WP_SITEURL);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

