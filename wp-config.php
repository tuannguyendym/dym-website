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
define( 'DB_NAME', 'dymmedic_db' );

/** Database username */
define( 'DB_USER', 'dymmedic_dymmedi' );

/** Database password */
define( 'DB_PASSWORD', 'KO?4CJGcT3jH' );

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
define( 'AUTH_KEY',         'zk<_<rlsh }9Zb,U.#1}^ldCm9$eNr:Tawtm}pH*uPo2U%[.Z5[:-<f3u}Z50/=d' );
define( 'SECURE_AUTH_KEY',  '{3%]m) OW~7g!n^75Qcy_ZZ0l6*AP/bvDve>dx5 :)v2u=+P|jBhezjU1Yv.c/qq' );
define( 'LOGGED_IN_KEY',    'k57`Kg!MrC#-=y03):Z>L;+!*$4TfG6+Lj1_x*++*mM;GZ:W[SBZS}uBKk1B^GMS' );
define( 'NONCE_KEY',        'I-ZVbtP&O )Z]5<@stVn=t*!r|tx|T^hvq.+P%3l<J7Q_*3t<)PJ?2S.:]#rfqg7' );
define( 'AUTH_SALT',        'm$eh4-tppFK(SbOp}9~f.10YIMj-$[L{<|zZ= X>47r{?YaPpt@c[,?JAj=a*K`}' );
define( 'SECURE_AUTH_SALT', '=GogFBY^38vsP5{.:M,<Y|D.fIDV.{#kLu%1vW!ZSM)5=e9!y}0q`@g5?GAB|psD' );
define( 'LOGGED_IN_SALT',   'P@^U=wB}0o>J%UTDe+3~ch &Bpw|q~&W{zx1j?Ez<jh=F6@=bJqq0eY)hK.nT(Np' );
define( 'NONCE_SALT',       'r^xI>A?$M)xkj_9cS]84^4=`v4E#(m/i9uI@R~0X)U?,g3iP+n/uW|EXsoNuedy ' );

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
