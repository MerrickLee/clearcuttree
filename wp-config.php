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
define( 'DB_USER', 'clearcuttree' );

/** MySQL database password */
define( 'DB_PASSWORD', '46BOZetBK34Z6a52ggHfdGA1' );

/** MySQL hostname */
define( 'DB_HOST', 'satacquisitions.cuacr6s4ysbz.us-west-1.rds.amazonaws.com' );

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
define('AUTH_KEY',         'He?0[BVM$=|o F_|xmWI?xWgmW,I3t,|Er@Ev=-**x>prjQ.$pe=.5yBlj*gKG[.');
define('SECURE_AUTH_KEY',  '/CH+:<,)B^Nni:(U}I8LM{/WWL7J!Cae_0Zhx/_!!ttNE&b1C81rB;%*J*/Dpb?W');
define('LOGGED_IN_KEY',    'u+F+eiF7(W6jjv|^`-ty_b0NBd] <J@]nnHS4-1bI6EdxZBjmeO_o>TKW];ozsWB');
define('NONCE_KEY',        '|hW,?t72Wu_dXlF@IJy8AL_`5sWt;_.,He>a$-&o#A2VlEnP/?i Uad,.`cxzl$+');
define('AUTH_SALT',        'd7::(Em3Jw{mQ.fy-|Z5`5@MMj QRk#lJ,^p8L&YYry6SO6>uQTVtn;DXw[T-WGk');
define('SECURE_AUTH_SALT', '*WUscJm+qb[7?D?4-7Qq-TUg.-nZ+n*JQ4^t|wYV-?*hqoPE-zMm61_k8`2O8?,<');
define('LOGGED_IN_SALT',   'dw]kY|Qi|DWAR5,w]#_IX5w{qew2C~gD.bOC$+;N`R?Mtmq]fFrjE]Ao&HiX|OU2');
define('NONCE_SALT',       '1HL[}kG9RTwl#%|,HdyQF0DA_V|z:W~}n)fC/ME!1)-;PFKEkEcR(^%i`:G]~&{O');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
    $_SERVER['HTTPS']='on';
define('WP_HOME','https://www.clearcuttree.com');
define('WP_SITEURL','https://www.clearcuttree.com');
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
