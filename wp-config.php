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
define('DB_NAME', 'payday');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'tZ3.LKu;|:tdfWNJ+5*m%D[5Qz!q2[K@1;s!i]$d!B3]zvk?Vb5mf67I$Jlxn29?');
define('SECURE_AUTH_KEY',  'ZK_=Xc4J.CP)W,EC@y4UQJ$Ec5=?GuJ~S)RJ#%%2.p]BiZLq6$lAQVd)OUY)ufIs');
define('LOGGED_IN_KEY',    'tE4FWw2,_?ISz9ZE7@7$EZr74yZI1/y6;tG%X44z8/`IZQ&68k/V2SIR^74kI Uv');
define('NONCE_KEY',        '~3H}~FD~nnHw/XfrL~3N7]oBon#|`NIcO?>T< /1Lt_hx}XV5Z)A,R^:hBB879+6');
define('AUTH_SALT',        '*Vu=<o~p D[J~&+Lg(wXI|T>Q{lrmqR2M7IU:j0B&9k HUVR0AK;Gp%~~-gA_s9;');
define('SECURE_AUTH_SALT', '&z~xjJE]b9NY)P7Y?aO?$S;Q^UVSfIR__yxg,M;HfQy@{Baw12UPt E3Iel5K;_E');
define('LOGGED_IN_SALT',   '!Q5^@e7*a&Ka/}S<z>eC9Edqg1,RA7Dq_O*!OJ7I[1p?++QsT%yDnaOS#i}w7tBm');
define('NONCE_SALT',       '@?l:.{piGh|O0~2?/idd2^X_Vw_DU_0]e,zRR#zbQ+KoN<O#$,A}-~:?I7oY)xQ+');

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
