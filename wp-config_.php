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
define( 'DB_NAME', 'demodb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         'sjbC`- @+UU+BtikMCU1]DUJyWA-|-Q`?>jawJxLsA>;#ElNJ8p$6WBZ=>O+z6 2' );
define( 'SECURE_AUTH_KEY',  'HLy(4&^X9?rwGqr2PxcYVE9b0YBOIk99Pg&]5G:Es=|.NO#FM=s!:2 F1cOfzt=K' );
define( 'LOGGED_IN_KEY',    'saa>Al.Pfpw4ez2(/_`7Wa$@XwevU8&r5mmC$?aQBS=02yCiJpj{#^kmk_SS#:]s' );
define( 'NONCE_KEY',        'i%{6euH2Cdy@Qi=|9XYY5kUG0,XI~UXr4D2%D@S[%[e(g+~ZItl0LCj47=:x.]Up' );
define( 'AUTH_SALT',        '1:_z7^[^u=J;]WKhiJ-o!Stf!q]w{WOp]70,%CiWJ6AQ_Uu:d6Zq;3Hj j|oLI`l' );
define( 'SECURE_AUTH_SALT', '>@sO0q1;+`~Ibb)LO`w7Y*g{K7~3?v`pSkqH+/m~N6*Nb,gkpW^6Iw=cC7t|pA?v' );
define( 'LOGGED_IN_SALT',   '#yxtapkoKb3:~=uz- qVc-E}wS*sdlcK8WuW_]b^>Xjbl3y)+FV]~:PBvH4pfY6b' );
define( 'NONCE_SALT',       '+Ma|HK<Arkv?@H-g)z{SJe^0QqIx5m<r1ks$V3xA7=S{RoB[8Ye0`{_52GN%}> S' );

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
