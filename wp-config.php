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
define('DB_NAME', 'super');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Qz [ Wd=Ba+h-)UP:-d#m#/BtFWhoez|-|v8+S9b}g[HohDvBG)&%m1X~`Dv=X|q');
define('SECURE_AUTH_KEY',  'UQTop*~m`njAGJ?IZc0*_=%K,ww>peWI !r4{&E%1:]U&?aw.8 F%@!k0*w&f=,]');
define('LOGGED_IN_KEY',    'O|9Yv(=uu2,~dqz9qI=@JXp#ij8&Z|PZ>z][H<kC<@nzW+bB2uBgF^NtASuX`f^+');
define('NONCE_KEY',        'Y;%.-FkHpae]TG*O-q:);E!-MNOG_NrMqS/uHh3oy8(wAyLK:F|S+9~<q5@I`zH8');
define('AUTH_SALT',        'LVYYfVZ-],[49{ww0^s=xB<_)4xG+b%[[o-2Sx=?p?|5vKrfchx!@YLH{/seYkvE');
define('SECURE_AUTH_SALT', 'v+5I=s%A()*dt@|$S;d#+xZU7rH~F$K%?;-019f[P*V1(%6@/w-CrNFU}sJ)1./.');
define('LOGGED_IN_SALT',   'RZqiDwLHwYQ[)jKh[+C pLsGBaY==c(ZseA:d1b 2-VrYy 9=tEzNxdo,[YMT=OF');
define('NONCE_SALT',       'Lx7e0!z*e`,Y(xd+|:6v<Js(r46n@MCh;7=^+fWR[.@JdeD<8uWe&V}?#g.E+$Ga');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
