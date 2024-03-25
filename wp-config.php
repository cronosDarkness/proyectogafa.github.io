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
define( 'DB_NAME', 'proyectogafa' );

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
define( 'AUTH_KEY',         'a3}6vGK^ou_s@,6KEn.k&d10In3*}qmxCt{c}<jg[KIbCl/)IuHR:G;p(J(d^38N' );
define( 'SECURE_AUTH_KEY',  'Bx8r>?+P0-v9e<B/^$ICzQY&a}A4)`u){R3 sQ*moe/0%Pr{dT{{A3*I>oH.y;5$' );
define( 'LOGGED_IN_KEY',    '|le*V6#!r>?2MneOv!9x/YjC)6_}]._))|:+4H*04WZ/korgBnMR$^t_7,jDZ[W7' );
define( 'NONCE_KEY',        '3q@ZK0}qF5?*sjkV0^ZOv>9=A0Kowu_&8^J$rIW8G.[^#T#gnf.e*9E+MR+2lW^y' );
define( 'AUTH_SALT',        'V%:e0((DQ[Zgs Nz}*sdUcF}FTN.-2:k6TZ&S-M2#|m^}Rdxh$sxIR~FL[GXpTLB' );
define( 'SECURE_AUTH_SALT', 'rvkiPt1G_?d9@ &S$%0$#gD!:?te3`v_/b,7iHe)Ixt&%{tv}r=yO:!~j#>h&DnT' );
define( 'LOGGED_IN_SALT',   '/7DXi^un+J.Q{^sza)5kLXpJ/p~5=*p:h O5*V>kBS`[6h(V1N+<]C<bVT?33WAR' );
define( 'NONCE_SALT',       'q6sx)OVR4lJ*Ywo-Zww(FFRgd-9Wc/>if=uVUx,0q}s(id~v$v_N7?h$=G.#?%_1' );

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
