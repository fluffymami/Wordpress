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
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'gFzgWH];}Y|[s|^i:b867@X}jLdn|I`i(}tAG@N~Y.`#M}*PVYKuk+PJ<ey}{b{+');
define('SECURE_AUTH_KEY',  'U;)jJXGX>PA@8W6&v~5?8gjCs(-LqGrtNeb+H|s|0-~Y-X^`T41J^a^B=oOmDO%7');
define('LOGGED_IN_KEY',    ' lv*[MH4D@Xsb_+qGDOA K}1=.Q$I^5QguianJci6Qte(JZ3!P+ &qWdk00>FW#A');
define('NONCE_KEY',        'WE7;wxu?mw0[)P+!XeU-ma]@f/i2dz-v5wTd`79LYM18[plLOPP?&9f-nEe~ ]&.');
define('AUTH_SALT',        'qo`}< =zt|CfQ*9{v/>m0j6+Ui~&9J7DN.{1[;X|T/,{JT_qq7:8|_a+; Ev~i^n');
define('SECURE_AUTH_SALT', 'g=jcwJTnfKw<z+~<:4Pu!-2]cH/H|2y)<YU3^2oi)p,i+C6]E[.U-Hn_e3uU.  ^');
define('LOGGED_IN_SALT',   '=ZHbpAx|E=Co74=zZ(./xr;_V-=.yX:KJi3gQ!Hf;=eia9K+nO:(|tZe|e!j|+bh');
define('NONCE_SALT',       '*+gj`S#y5[&ZC:gaBy,*UUA$Y8dZt2|HSLH+D$@]Z$xJ#_bW}:l+]s,k&Bp|L<W]');

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
