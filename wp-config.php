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
define( 'DB_NAME', 'db_my_wordpress' );

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
define( 'AUTH_KEY',         'q!u]/p{gkj^t+@l^D~mDv]SO]LCCY5|D`ptsOrM;Z|kJ7#EScXlaZ&?Hz>PVw0xH' );
define( 'SECURE_AUTH_KEY',  'Q@RTA!bo]2?$va!g<VvM*zK${^bGtj,wlbV}NewDP6/)l*,sLaYiHg)o~^mz0FVd' );
define( 'LOGGED_IN_KEY',    'S_k&B{c9]HaRX)s<E8NR]IisL:_7@wN. *e494)5+z*%2W4grQ$;F)o?rW[6?o3Z' );
define( 'NONCE_KEY',        '0bF4Eq{YzKwJj4P@wv0?</0RL8eGWxCfb:#[QmYhZ>kxbiEpFonshqs[weUMs*7m' );
define( 'AUTH_SALT',        ' NT+PxAu-bE[$^RLik.`pqp9VOA#dn$Qgg[4.LXg;S(d?0EeDw2BdT=g }(LAKD<' );
define( 'SECURE_AUTH_SALT', 'e,nzS~20#mW#XTh!7j~Ji%J*o0_8W[9`DKB^~9k4),tL8T9T:^KuPa0^MrS*9gzI' );
define( 'LOGGED_IN_SALT',   '3l>6g 7r]53zhr]rhYmepCU(cmujqf0d#N!{wU*Ev*,BX*8~WaCgRZaGbQP#*G-V' );
define( 'NONCE_SALT',       'qlkG9`U2~a4oE*#!GhI<b%)k(FG9i5SX`3e~!kqv|UzP+U4pgKP#o7N82.{b+,!3' );

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
