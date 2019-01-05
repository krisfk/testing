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
define('DB_NAME', 'test_db');

/** MySQL database username */
define('DB_USER', 'phpmyadmin');

/** MySQL database password */
define('DB_PASSWORD', 'some_pass');

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
define('AUTH_KEY',         'T+S</DQIo9#3>wqaqlZ%_Dld`=kZ5dj.UEgn,H^zY:/}NzE;Hd7`T@)`i.(9or.%');
define('SECURE_AUTH_KEY',  'MTlY9s~nRmcK:dX&3Q@wZ)!3B@o,pHl{zYb1MyeJvnP6jfmdfAb)8Fkg-=KxMVWt');
define('LOGGED_IN_KEY',    'YBbtfjLjp;u]pn3`EJ(8:Z,uyf_sb20m@p5Z^x)0%fhzDns#[#(i:B:nx~Gk%a.%');
define('NONCE_KEY',        '&(t+nK<U/<(|$3U0=,cK0&&fjwl/T52Q@CS%2Tl6Q-WX<CX-46)z&36mLp|7F^+J');
define('AUTH_SALT',        'wZMy4#//a:f;mku?tw!@78;n<TL%P%]=wiCfi]59i]S[V_v3@*-0U,r_gid+1c&j');
define('SECURE_AUTH_SALT', 'k#,a[ |R>^4QS#OtC!dho0LO&jxFQa8FPIzof*EK&*kVkY0npr $?Uw:)=Qpb>YF');
define('LOGGED_IN_SALT',   'S[oQESi~IzX.NBwO,h,#Hcp5&GjD<ER:#PxHs7KYUchx4pQ@i mj/#<?fv&GG3S0');
define('NONCE_SALT',       '`O?-L .R%2qi!#haS3:*LUDwi|0j<pQeocn%!lRU&^i;IFcM^EF>ST~n:2,z@hWd');

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
