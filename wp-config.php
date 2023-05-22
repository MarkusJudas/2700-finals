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
define( 'DB_NAME', 'finals-silvaraj' );

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
define( 'AUTH_KEY',         'Im`Xa47j8ayb{%s1+&sL.#{<.c8_Gp~{QtQV5VOHb`)M[]4o8`Xmf7 7Y/Zm*l0j' );
define( 'SECURE_AUTH_KEY',  'zowehulDXh$-TP(|N&f8fQP)Rq:GN*:bvxN>eVGUo}M@HRZ>vk,9uhQPritm.q}k' );
define( 'LOGGED_IN_KEY',    '5geVvW;}Xq=NxG{|S~{XBxsU??<jl{zY>Q(CQMhq0?:fcsVG/sMJxW  b@ws|DRK' );
define( 'NONCE_KEY',        '=dNIO;u `&-jU%fVi{bTM~Nz1kbv)jSv-!VHa6d6?wZ.X:{[!X0f)sPAB!Ar$VOc' );
define( 'AUTH_SALT',        '[Sgr)!xn84H^jl2*AYn_pF8oV@[`cmpUc!>iV<yVQgHkQcOXqqFc@krNEdUvw-qi' );
define( 'SECURE_AUTH_SALT', 'bw:EeepJdU^gM>HhsEk/=4!D;%_6ZK&WF}2v6Yj8]5f)e-0}+!-P8j )DBSfI@(+' );
define( 'LOGGED_IN_SALT',   '4Z2=k3^`Wr-(A,#$e*l%U(<`b^}xP&?_}BltGx~hLqO[ve({bUpo=Xws1hQ8jtQ4' );
define( 'NONCE_SALT',       'ea6D[XrQ_WpKa8cNI+P4*s#N-e3/{F,KiM[c9};U@<zJ!?T&C4@=I;&J0g:)95 E' );

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
