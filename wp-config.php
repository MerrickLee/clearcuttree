<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//define( 'DB_NAME', 'clearcuttree1' );
//define( 'DB_NAME', 'clearcutdrop' );
define( 'DB_NAME', 'clearcutnext' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'clearcuttree1' );

/** MySQL hostname */
define( 'DB_HOST', 'clearcuttree1.cgi42myq6vvf.us-east-2.rds.amazonaws.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'grNIJ4o08iqI5WZi1IL9C!v)/l8]L7M86I6[,E(@qNS<8&;H~{<%?MDEPZXa,_<D' );
define( 'SECURE_AUTH_KEY',  'Rc$T4k//1st{ti/u1dpAE|Ru,6P0,,n_}=YhUD6Jct&zTfP_.de)uQ-zF`k4lK&L' );
define( 'LOGGED_IN_KEY',    '.|0-Z:u96!Mx.]wRvfWFH>$SoHmS/Lm<mGFnt6Nyf]j#GMH*;yX^YtC>9r-G}>ug' );
define( 'NONCE_KEY',        '2YzWKB<vl&PIi(F*3Hm6r(Mj$*,lc05H<fRoO1)ZXHoW-ds17bg?4?Pkun<P(]v7' );
define( 'AUTH_SALT',        'J:G,S!qM ,mJ:0,kG@S#fgX GVBJ<#GhU)Z%DHRMuAE,]=kn#DwG-$T<Nar7?@U7' );
define( 'SECURE_AUTH_SALT', '?6&I-@)=4$}X6[CG7gkeOrEIR,ZQ~.:P[xt,9nwy{*.?G4ALz>6/Xo1d3g^4i.V9' );
define( 'LOGGED_IN_SALT',   ',&*{9+=4#R!jdGS&;AL;)sZ?hSxRy7./#v=|O&((V$jBY%W#MEJKo^IfgG|(wbGo' );
define( 'NONCE_SALT',       'GSjw$/kCtrq*!buNg.Us<|Tu[nN5pA_mh)Tp(egLAZ;hQk#{1N>r8Jzl3g!&w(hs' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
