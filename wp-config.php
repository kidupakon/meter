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
define('DB_NAME', 'meter');

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
define('AUTH_KEY',         'xD`-MP3PkRZot ?1BvV5jU=CiVn.NSA|]6V :DaZ*!WAATN{*=W%iEiD+6hD))K|');
define('SECURE_AUTH_KEY',  'CQP:)yrNIjW.A+E4azn_GY;)7==}GF/o>uyw8w>MdwM%ZH0m(f5JuqCY v0_t 1n');
define('LOGGED_IN_KEY',    '%gv 9:k=N@6Mvm$;!g1Pe~+L+FR)f*+2]le4!Q=o&R$OqCns~<MR?yRgtPW4]b0A');
define('NONCE_KEY',        'v<UNu=3Zl;vaU1p_O~o#Oc$9iu$H5/y1n)!+Q/!lv8{PgvL#x=kSyu:}Vv=5VPru');
define('AUTH_SALT',        '+:V,xfWTy:`4?RGo[lu`HD]hzRntie5!E)I&UtX0mFpLW**Ou4K[FOMB%?kjyRLO');
define('SECURE_AUTH_SALT', 'jCXFTq2Y<%)B)Et|{kXy2n2EV!.37._^]an0B|nWfxL|cZ@p(64:d_)Z66YKdYa-');
define('LOGGED_IN_SALT',   '+RU1BOY<w4Sskv=l6fL ?e=~~lhC[1)mz_^ZPfh$as%D%UA14MV(B4YiFrYN8{VB');
define('NONCE_SALT',       '3?KCxA1M z,BA0D9vG[,D5e(Hxu/wGl6i_w^k():Is7NSR_!)ywyK!o2QJ~Ysex/');

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
