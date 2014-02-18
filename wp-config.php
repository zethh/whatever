<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'whatever_db');

/** MySQL database username */
define('DB_USER', 'zethhwe');

/** MySQL database password */
define('DB_PASSWORD', 'X3lmeromeroX');

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
define('AUTH_KEY',         '<#;x*+Kyx*-PfC+;iC%(gV1kfK>X )60|/3u^C6,,dx!Ef-?Clm<y#$y2p`m[;Kc');
define('SECURE_AUTH_KEY',  '/eN#DO*Uv#)y(T-/i)UP[* !tVXv0RB18FC;+@syK>u-[i+[DM+HWN[eAwSkTxZ,');
define('LOGGED_IN_KEY',    '{%)t]c>P3[E+|z{IC1v!n*--8(*|@MBJI&BT?7`ZRr;0|Uf>h{HUu(5x^,<Q~T h');
define('NONCE_KEY',        'un+1X5+KaM8b IyH-[$4ZTI+[y/z=v0TmOuQ+0[mJ^i0g>7],kRtJQ,5Z}{]XR-&');
define('AUTH_SALT',        'mR{fDhM$ E_x0y<kP5kC^(70bD|q&cd49j=4wUC=wt7+R`c&%4;-%gH3VM(5jOj0');
define('SECURE_AUTH_SALT', '3N9d1RhnyzNtFaw}V=LI4 L_&1$k8&+&W i(Le4 58d=3xN,Q}z&tN[6MwYl)+t;');
define('LOGGED_IN_SALT',   'S%$(L!.B9}mBB6xr>)<=@+GGPD<]i3|`blh~e9?@Z[$h)_@%PAmXwL`Y|Lb2(vE-');
define('NONCE_SALT',       ' -k4WB~]+6!h)P+O1pbhlQ?,/Z0D-NgjRx[>X9Pl2k,ja[%D_#8362Z*inw%c.8P');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
