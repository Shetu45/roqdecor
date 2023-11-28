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
define( 'DB_NAME', 'roqdecor' );

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
define( 'AUTH_KEY',         'uCsa|5$}VMs BCB>By*cnEv7piO(8Sz1?jRWKAUl WI<tW*2K,cKjsS`!9z!$12t' );
define( 'SECURE_AUTH_KEY',  '+U?NhlYZ{}M`P2$}Co5ejR#=V1Q;lP_nZOv`&[Z_a;<Ea,1jpX1v{hpC-!:E$KOn' );
define( 'LOGGED_IN_KEY',    'X$gK}Q$|5%bd%/*kxlmxfaJ@_4  HP]h:LlyS)@n-#LplVgcvJ@rU2{F}jd;Q-=l' );
define( 'NONCE_KEY',        'ACb*4;[d*yopW`DHN>0GjlgT<ws7O!r3$Wr0^F(|)rydROGQ_a,L~(8M-/gcK|($' );
define( 'AUTH_SALT',        'n^[Fwv+=KXha|j}L&Q>PgNf&kMvob$Fnjr1z0OD@;!tFG0Gg+5Yck/.`h@G%{$aB' );
define( 'SECURE_AUTH_SALT', '6)M;kcUj0U,OUuCis9MTp^s]h_e[q%0fg9@=(M{u$-k%CyD}_)qX8x@T]{;&jBaR' );
define( 'LOGGED_IN_SALT',   'cCw=?xS7/xIyj.YE!yKQtD@N57X)a4)h;t^<l2M3wpHT8I79t<s`gTq[|^hdPF K' );
define( 'NONCE_SALT',       'f]yH:HAOfetFG>&94-8]t:Q#Yw{])v{)A4oA9*u2tQL*@{U)3H&cDE32_P}EA6[Z' );

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
