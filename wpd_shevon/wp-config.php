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
define( 'DB_NAME', 'wpd_shevon' );

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
define( 'AUTH_KEY',         'Q}fY1m-K2fsWtM$i%Sc,,}lAcZ|QoxU1@;)!tZ:PpEV~30+AbzrKSMu@0S3?C/hb' );
define( 'SECURE_AUTH_KEY',  '%h$KDFgS?K{$]J$<5eMxZP.;[?<p$w19=3i~) 5+x*rQ*AirNa}Q6uiAHvh@]+v{' );
define( 'LOGGED_IN_KEY',    'C;MiK?/wt?R1Yw1]^z..%BTu$}w:Y&Z0S.`#P@12A]=_cn2r8D@kVxt)e<GHaYvi' );
define( 'NONCE_KEY',        'WD[C 1%?AO~MY.K/k{~&cLJ[Ol8:}C]@XMZ|1ZQw/02;HIp)xn54)K@@S,>sU=h/' );
define( 'AUTH_SALT',        'n}2@3G{qYCPpc ]*pnIRdQ>o!|7gs5ewktgW|Lw[51_2+8>aJZC|$ntHW]<Z=:AD' );
define( 'SECURE_AUTH_SALT', '^}SyQgZITA*kDPZ0j@m:7XS/*b>z?L(.19mG;g9:o`ZGLTc6Tr1S {_G7*5Q2`wb' );
define( 'LOGGED_IN_SALT',   '[n+L20S-dVTDn.`}vPC_Y4rm~!&g_xQ] *tx[+R ,3%b8?R`3WN Y!ReZ`$P8LwL' );
define( 'NONCE_SALT',       '/JE}H*XIEw9/$Ub#d5ciiUqYe;lkyN`w#C`Q.@dhg*TmXNU7[y|OuQxXky#]Y-M*' );

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
