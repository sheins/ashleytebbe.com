<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'local_tebbe');

/** MySQL database username */
define('DB_USER', 'local_saraheins');

/** MySQL database password */
define('DB_PASSWORD', 'Hildie23');

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
define('AUTH_KEY',         'rf&>wts}]0)tP0aoC*U*cZ)h@xiPeCd.Gy{e*(dnux+&aPEjS;tc^[Z-R_!e?JR?');
define('SECURE_AUTH_KEY',  'F*1*=w-j%GzZzO= 1<9dLlf^xMj8>Q.dOe<E{^1]|+G2Y+(zc|!PZF]PTC97e!_+');
define('LOGGED_IN_KEY',    'G2@ 9<hs@O{TV89!-#K&8>`[4K2`VY6W`(pVMRhbrR{fmfD@QQ+8QK|JLnVCTc<9');
define('NONCE_KEY',        '1/zdvg($Njrh$l<>d/fYObaE!Vt>L~|G/7B(9RH-%,N.-81@Fa%qod0UmRa0jE?u');
define('AUTH_SALT',        '2W|naV9$l$2obv/+7=*<v$+00|VlTu+;[_>S/*b|$a7V[Q&2z[eG|rv<f}lv-czR');
define('SECURE_AUTH_SALT', 'tJM4R<bMyFFZ}U,F&;,@L771(F$(UO6H88SNT571 yK)|DnRr9B h{X}ey{hr78n');
define('LOGGED_IN_SALT',   'sU+X3_:h6rJ=hb-az}WfCionA^.RR1e>V-TWv}h})G^-s;|cTFl[!V![%&E+ks%9');
define('NONCE_SALT',       't%{:x^o#ubh,,xKzde$qQf=+]#S&dHw|$EaS1-Lr|%Ll~&@0um;D)nue;:vi;7&e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
