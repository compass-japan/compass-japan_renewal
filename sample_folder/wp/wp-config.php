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
define('DB_NAME', 'information_schema');

/** MySQL database username */
define('DB_USER', '');

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
define('AUTH_KEY',         'M~2B}q*9am5Z+_3KYovZKZh4Pg8_co(_cYM4]q|AJ9mB+M/zjw/ZYX3Xq^pWINm^');
define('SECURE_AUTH_KEY',  '-5zSbK i.B;% ^^-KRp0r%wWpuyDl@QY_EM3Jg:O0g#O7@*fq!(bp.mVLz;+ rVQ');
define('LOGGED_IN_KEY',    '>V?-6cpmmc^PoZF]|e6aph;dv+TGzS<^],r]xB0zoZvSFu^QAKM?IBDjOMSHr0-7');
define('NONCE_KEY',        'FbDbIXa/!<[|M5p`kBTZ>h`aHsG^3Yw-@a9Q1]R:.Te~n5JpBB*wmKPZxNg3[EGG');
define('AUTH_SALT',        'dR.v:,LG.1uz0j<7]?#D`Y5(HBPvy^LF{LJossHz2#Gl? >Xbu?!* u99Fk(E6gx');
define('SECURE_AUTH_SALT', 'kB[SFMrSk~7%C7X**q+nDNS4/O(b>}ywar<zTurKK&S1@ntd@wtF2p%!]dnOTrc~');
define('LOGGED_IN_SALT',   '$yBbV_@SW<M26`GV/8e;?GBO^EE^2`B@ejrAgoH_vYe>Lh0u8;al_vbt!CiV::15');
define('NONCE_SALT',       '=5U$m0zb)c[dedD3z>?uf+!L#8o8X44,#,rTC9Sj{D!TU%E@78sq93MKw;3J o^N');

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
