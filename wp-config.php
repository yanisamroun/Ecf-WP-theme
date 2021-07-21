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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

@ini_set( 'display_errors', 'On' );
 define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true ); // 5.2 and later
  define ( 'WP_DEBUG', true );
  define( 'WP_DEBUG_DISPLAY', true );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_custom_ecf' );

/** MySQL database username */
define( 'DB_USER', 'wp_custom_ecf' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ',zY;>P$d~EuK:Z{TJ|?iTAn=F8Q8p88=#P)vb}|<6WcC<]G>X_y/r ctN_N8o=W0' );
define( 'SECURE_AUTH_KEY',   'cbc(g! m=trpqbs>8wD]]nrhmWbXo~.ZE~VI5bcmUw7~CxK:x? >7|?gkJ.U|H:B' );
define( 'LOGGED_IN_KEY',     'vShS|:S^-B9C2K{=iN^Q h^ZZ9NJ]sFQS@`hvG3#)~}o6R6|lOhbyXe+eKAN%B>(' );
define( 'NONCE_KEY',         'p DH*s`J9?s.fCfAPv+HJwU2P;e9x*;MqgpygwXy$,50vS:&GPv}qUBH8E*hrdkQ' );
define( 'AUTH_SALT',         '}s[s=~u97wmF*bump`@v,ub;kxQ#={9$?su~Z-=*jklh5X|3JJTux.(e>9kKO&yf' );
define( 'SECURE_AUTH_SALT',  'rUsk-Hr!8nubQA=r~zy4EQy5:>KJ0xkmvo0NveDCc~#U?uDpmH&_p.sSkYT#g(x,' );
define( 'LOGGED_IN_SALT',    'fh(w<;E=9IlI}@f-ffjsN3e>iq`]?^!dK[[/3D).3&,*%@FUD~8bXx&kfW9@0ydK' );
define( 'NONCE_SALT',        '{9!]C_=R00@$L83l*+RAb-?8ke}~i)0/*;ZFW1 ^eoQbkx@}UNPEg)b6irRdm_d(' );
define( 'WP_CACHE_KEY_SALT', '_bI.4KE8_}_5F[qLT*g,U0xTR2L[tAkU+FkLZ|vIyw(0_H.})QYg!gL/jU-!k8hr' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
