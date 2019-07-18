<?php

# The name of the database for WordPress
define('DB_NAME', 'clearcuttree1');

# MySQL database username
define('DB_USER', 'clearcuttree');

# MySQL database password
define('DB_PASSWORD', 'clearcuttree1');

# MySQL hostname
define('DB_HOST', 'clearcuttree.cgi42myq6vvf.us-east-2.rds.amazonaws.com');

# Database Charset to use in creating database tables.
define('DB_CHARSET', 'utf8mb4');

# The Database Collate type. Don't change this if in doubt.
define('DB_COLLATE', '');

define('AUTH_KEY',         'V_f~*,-:z$Bu{ayWI4SrK;g#0e3[PG%xl(v)<|OqZTh2J9NC5n7.^&sci`+8E]@?');
define('SECURE_AUTH_KEY',  'MKo~972mJ_1C<;XN ZUq.LQgasxlRIS:pD}d!v&^rWBw[+$),=@0A|Vi3`(hjT]*');
define('LOGGED_IN_KEY',    'vjUEmGb *)w!Z?f`d%z<7&94C0N+plJ[a>g#VDB$Qe6F}rkTK^1cuMX;Ox-n~/5=');
define('NONCE_KEY',        'h1OqE|(c?}4*UMXbgyLC9s7B3jFZK[Dk=YH!R& vJPW`8~+mIl_r0:#-,6]uaS$.');
define('AUTH_SALT',        '0~h%(KqkEzQ>MD]B6*V$g9G2fviFPR<7t)Z3`pl^uxyNdb8 C;,&+-!.jT=r4YAs');
define('SECURE_AUTH_SALT', 'H=L>&GT2gBi4q?h<*uF}eP3Dpw:Y,)s#bfz@0E[.JXUKNx-kCvM68(ZO^WRcaS`I');
define('LOGGED_IN_SALT',   'GNv20D>uO;IhRdm{3x*9Mac^fy-4XQBTW1JlkE:$@6H.St,)|swq[F%&#+gZVj `');
define('NONCE_SALT',       'W)A,m3lKd~+Vx;Z}au/Po:9rb6FO>yt!7vBn_D-U|QL %(8ecJCST`MsG$i=@N2p');

$table_prefix = 'wp_';

# Make sure we're running from a web server environment and not CLI
if ( http_response_code() !== FALSE ) {
    $primary_domain = $_SERVER['HTTP_HOST'];

    # Default HTTP scheme to use
    $site_scheme = 'http';

    // Prevent redirect loops when using a reverse proxy and https:
    // https://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
    //
    // In some setups HTTP_X_FORWARDED_PROTO might contain 
    // a comma-separated list e.g. http,https
    // so check for https existence
    if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
        define('FORCE_SSL_ADMIN', true);
        define('FORCE_SSL_LOGIN', true);
        $_SERVER['HTTPS']='on';
        $site_scheme = 'https';
    }

    $site_url = $site_scheme . '://' . $primary_domain;


    define('WP_HOME', $site_url);
    define('WP_SITEURL', $site_url);
}

# The WP_CACHE setting, if true, includes the wp-content/advanced-cache.php
# script, when executing wp-settings.php.
define('WP_CACHE', false);


#  Disable all automatic updates:
define('AUTOMATIC_UPDATER_DISABLED', true);

# Disable the cron entirely by setting DISABLE_WP_CRON to true.
define('DISABLE_WP_CRON', false);

# This will block users being able to use the plugin and theme
# installation/update functionality from the WordPress admin area. Setting this
# constant also disables the Plugin and Theme editor (i.e. you don't need to set
# DISALLOW_FILE_MODS and DISALLOW_FILE_EDIT, as on its own DISALLOW_FILE_MODS
# will have the same effect).
define('DISALLOW_FILE_MODS', false);

# Occasionally you may wish to disable the plugin or theme editor to prevent
# overzealous users from being able to edit sensitive files and potentially
# crash the site. Disabling these also provides an additional layer of security
# if a hacker gains access to a well-privileged user account.
define('DISALLOW_FILE_EDIT', false);

# The WP_DEBUG option, added in WordPress Version 2.3.1, controls the reporting
# of some errors and warnings and enables use of the WP_DEBUG_DISPLAY and
# WP_DEBUG_LOG settings. The default value is false.
define('WP_DEBUG', false);
if ( WP_DEBUG ) {
    define('WP_DEBUG_LOG', false);
    define('WP_DEBUG_DISPLAY', true);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
