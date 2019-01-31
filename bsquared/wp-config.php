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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'S21t1YP#Dgu;<I*$5p,jof~PO-40oHEM^gKj#$[:%jr/7SY6`7pRkupgAj??r ]0');
define('SECURE_AUTH_KEY',  'zn|B1xEA9p}/hBAT4+g>ah%Nd0}#QQIj8GL*d(K(%EZj_=B:j0tD[(AbMwS@zlb/');
define('LOGGED_IN_KEY',    'i<-4H:~pB{QvxaYv|r8YlTP@`MV]gY-p;F]wn`(b?U=n qS{5,i&&oClPwpyH6TD');
define('NONCE_KEY',        'lx)vGrCRR+3.gHkc`~}@}:o)F15yH`r>9W911o9N?EY0_A51A<]=|NtnfX:@UR`L');
define('AUTH_SALT',        'GH#;|I|CM[%N:C,v@+D]p86UWcU&]!}:,9`w2UafI~D4x]ww |xC-rBIY40%,]^l');
define('SECURE_AUTH_SALT', '46g7=6Bx0dJcmm2q3X-t8[4rAc]fe~W39ZoWs85T6QX*[e _yCB}I<lpjP_kFV!Z');
define('LOGGED_IN_SALT',   'F^qQoVnA18S/UnY+%2{r0DVunJ6-M*U8qnF$UA;@Eewg2,quSg7Mr/]nQaD~b>(d');
define('NONCE_SALT',       '[KFXe g5g]`X@oU:~%<CH9j^SjP-tgq<R8Yx0 ?#;v/9ji5#H;-yk8zwbq[:o:(h');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpstg0_';//  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
