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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'k75zo_waidon' );

/** Database username */
define( 'DB_USER', 'k75zo_waidon' );

/** Database password */
define( 'DB_PASSWORD', 'nPxjk13@j' );

/** Database hostname */
define( 'DB_HOST', 'mysql31.conoha.ne.jp' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '`&@65j;=#<-%tGb6sJBA`X29bNk+!k_9a9A]@E:yPg1 `3||ypq%#D{=M4I$_M/{' );
define( 'SECURE_AUTH_KEY',   '<&^#5yxWrJu5daOM7aW,1xmw8/wwNx!{#RKADgTuFSe_5NI9z|0<9Q.5;(8t_f12' );
define( 'LOGGED_IN_KEY',     'A&MV}!;oN)]q9^HyJ)hX+#yj1`q9dvlM~1Nt;dHN<zRFT@_ZMP|+F]fk1E6WwX@4' );
define( 'NONCE_KEY',         'i2XNrSlr._8[c[TF}5MQMpaXGr2j~p3(7m^),EjEX2^>55mtfQQQKhZ[ml-Bwrl=' );
define( 'AUTH_SALT',         '):lRP,D7:~Cyf=qm+f^:8XHG-g]^<19!>pl>1oCZON,7i~C<ZvsI(Wc[s58y@g`+' );
define( 'SECURE_AUTH_SALT',  '0jle{W$n|.Q!WhJBRDpXuoj?h8*Td?d)yyuD*/}ESZM7]dymy=.kt/+HZy]O|K)H' );
define( 'LOGGED_IN_SALT',    'U)o.)/]0i`e@T)QZw|hoc!ruY[/R6A/CMbXufE[P,SxU_vxoV%xF|:G2Q9;)c<!P' );
define( 'NONCE_SALT',        '}o:0DtnLe4sn{/XGz!Iitg`@bR#[?F_mZ~&MYltZI:-b-sIEpo<*OL(g@)uPYXMM' );
define( 'WP_CACHE_KEY_SALT', 'T$PaS^=,k&c6x2!fZY%B@XMD-qo9yuDNtx)JsPpOFR4xNsZhw 9MKF:tn8J#^sd=' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === "https") {
    $_SERVER['HTTPS'] = 'on';
    define('FORCE_SSL_LOGIN', true);
    define('FORCE_SSL_ADMIN', true);
}


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'CW_DASHBOARD_PLUGIN_SID', 'bdMbMEUlNjl4GjPTkw8jLEfcRcluClCWh9jsPfWUeNzdm-yvd3Gw-WUb24-FpdeXOQbCxlAmCi6of22iehQMQ0wv4227Sy9VVM0w3D7vJS8.' );
define( 'CW_DASHBOARD_PLUGIN_DID', 'ciSKu3lzEWAMCb44tCqHuMJyTyuN8NMssFWYXgkTJ55n6mlIZmZVUy1QvwsHBTz9WqP0uvtkcWQczYDw6k71T1Jm4Ms6y-AYfvV7Oi73xE4.' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
