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
define( 'DB_NAME', 'nexalytics_db' );

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
define( 'AUTH_KEY',         'bg5Z9z_dJ.0n,_sCHb.r0H@Sv>q&*a)WS(D#yYBz)uH(5?}Ku?050uCnvPk^ZgSs' );
define( 'SECURE_AUTH_KEY',  '<I?%%8z8LxLHFX<:GiaAfgba&aJT/zO79zBaXnwpcr]pw7.A$>!qU@u7Y~4iQT!=' );
define( 'LOGGED_IN_KEY',    'YUuaPv!LI$~03W-iem> {5fIb]kb9n$#f.M]^A2x,0t=D9:@ uTGk|TDxxS|isQX' );
define( 'NONCE_KEY',        '70VoXZ(@x@hhv-JKV#5 nCH_~RPn:ue*HI-@ yR]v~q+B(>KAL|-b&*[W{%g3KwG' );
define( 'AUTH_SALT',        'bG)pxGN&V!Y|km}tQ.yI:u{!ZlIVWQ#N]4,P&`Mjj!>rXquui+$`*,fx(B*ca[8d' );
define( 'SECURE_AUTH_SALT', 'Wx+`]sp>J%8q;eKz^$d>x,UI-,+V@*9_MglnKTSlZ&KeHj=8J)@W IN>u<j~ffQ8' );
define( 'LOGGED_IN_SALT',   '(!J7:FM}?oI8I)/+z;-92f6,Jld49x[+Mez|`*K6780P$~<6w<%jki:u>a~C*@3Q' );
define( 'NONCE_SALT',       'UUrDKJ~GB?^3kdz4$o B94xRyt^ B_8EDNuRVV1XM&5EMUy2TH8oJ:Q;.E~zuO)E' );

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
