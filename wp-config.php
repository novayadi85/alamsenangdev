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
define('DB_NAME', 'alamsenang_db');

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
define('AUTH_KEY',         ',jU;Di:47==H?3r/)-`_j%q1K>~3q!HX|^G;Ie8!vVmxz&1_}I[msA=ei@@*$pM~');
define('SECURE_AUTH_KEY',  'S,Luv79DI2wj4-Ue|10mIqT{@g:3I(/uzmcDil}XjetW$,+zziN/C6]EB<NYq9Zt');
define('LOGGED_IN_KEY',    '-DWW5z4#)# vx`!bV//? =CmwhkA|3t(#1@dOQeU/%ZF^sCB{ka)WMg2 P>>c~Z)');
define('NONCE_KEY',        '%!=*}Yr8(7Ia~+JbDr#4QeshlHI8YGMv^8-;M#fL.fD_%@p8(+Vlhpo=N Z=rn8s');
define('AUTH_SALT',        '{8fw~!y~f,uL6-8m;Y{M9`N RJ>!I7Jw#H$$Ni6 r0s`GOo}[[4C}ano4lW6Fw=V');
define('SECURE_AUTH_SALT', '9 >/h>HCf!/ipgFzHj1Dv dL1KXpIU,SMM@s<`%~3Ru*s]jVpCy}e8<m=V*hLgGb');
define('LOGGED_IN_SALT',   ',u]K>:2)/F^WcVh_lqJ3DAc~j,)|]v%@9;]-nhG$zW f-;k`42wBQ{;4aI~NK-YW');
define('NONCE_SALT',       '=?l0+hh8 QZE3ea$R,HSSv9 E(2aQXD|qTrD]?*1mp04+X?2J}0vaU@V{,,L~/Z8');

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
