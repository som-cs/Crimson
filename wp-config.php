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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'curtiswp' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'ioioioio' );

/** Database hostname */
define( 'DB_HOST', 'curtis.c30phtewk9w7.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'M=~!^]z(7hau t[N.<7AktyIxM [*qRm]nq!wA|5V}gsOMr1CVEnCW;w?*#(.*i_' );
define( 'SECURE_AUTH_KEY',  '=yE]?_FFA=t_!|w+OOh0dR)rTy],ul_:53d&<v:pb)m]}R3Hy|8,cllaZKc+8|;2' );
define( 'LOGGED_IN_KEY',    '%,J;w1$}gcdq`(+^?K.z[ ZUYWh&f $o;,DG,VEj.x-:^u:,(WTF*Q/-Xx~HzAd}' );
define( 'NONCE_KEY',        'VFc`A<hwS0oc_b)wT;53<:NFtX#dxS(m~)r^5tc[hyETShVTq8(-*XVGZJD/_hwT' );
define( 'AUTH_SALT',        'K?8Nb}Fy2|{B=;hmbwXp2Hkdr_/#v|JpVq~P+5xw.j(.+PMT~C#Oa^x.J&{8HJC7' );
define( 'SECURE_AUTH_SALT', '(T=T5_B0Z#obe |C%pbLm.es5MXa7-YeC~$F-n/T.tTE(4psIXGE+05b,$~bf^qy' );
define( 'LOGGED_IN_SALT',   'f3ydn~j53o%aQX4~[Jn){T.7.W>#VvPpQNDYwH9k[wjS5~Gxvvrjsy1-@![N?@6C' );
define( 'NONCE_SALT',       '<2/rs`{jmK]AwU2iWkeRKeWda[eu<rM[t[NNy&BGf*{>+NX&8j<s#y~ydt?T}9*p' );

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
define( 'WP_DEBUG', true );
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

define('WP_SITEURL', 'http://3.84.59.47');
define('WP_HOME', 'http://3.84.59.47');


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

