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
define( 'DB_NAME', 'demoshoppedb' );

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
define( 'AUTH_KEY',         '_dSGI@9@&(n|WFdG_:{t}O?KsVB4!U2*Kp)C0/A0S!u%c.i~pguUdJ`Ulb;#]~5j' );
define( 'SECURE_AUTH_KEY',  '#/eHMrzW;Sk3/njOXG&t]Jol)rmJ+xo1S_[<%(NFc~Ejl=Es#,NbQtquB]Pdnv=$' );
define( 'LOGGED_IN_KEY',    'PY0>K(zThCt3YSdCSH29eOwmkn?XS7vqJg3c,I}78BG8h?&NS qc8@(!-p5|f}!a' );
define( 'NONCE_KEY',        ',hz1A(KAQgdk|%[$:cA7M`vM)zX3C0}tK9BzmOa4QK<$D>~6a@:9%UxDvS*xp-FA' );
define( 'AUTH_SALT',        'SCFe+xpx-V1K3tneyCiqbeV)xGGSP`>vS=r/HB<avRRO,Liu>RGxrU19Z3?-?&Y}' );
define( 'SECURE_AUTH_SALT', 'lvwq(Z!*O5(%+(^A{)3;)+8U/{d} mXv9LkzZ(=w}-mr(bf=7PTjNU;o-t{C3uSD' );
define( 'LOGGED_IN_SALT',   ')MS;]qosN%Y/H&Zn9$&G(U]k`!1|xV;7OV9:1vG&})W$;t3&pYx{%L[INx>5W$zT' );
define( 'NONCE_SALT',       '$NAi=#p5l.cFmY%~lDy`~;EnUp:0:h`$Dv`HP,zJZQhAsdLdO/)N_b eG2T}#FTD' );

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
