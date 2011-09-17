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
define('DB_NAME', 'winmakati');

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
define('AUTH_KEY',         'J|+!VtONv}.xO}J=_p0BH:p-}v1ol}-TkORdC;M&%kSq27)|YGl.46!r-w sh@cD');
define('SECURE_AUTH_KEY',  'Xs3?E_zYT!A@x8.ZQCfG+W*RLAH}a6+o1b/D:^)xFwerz]yj#-;p|UG5i;=?QIWe');
define('LOGGED_IN_KEY',    'Cv3o+lL+k@8-:N[Eu!X6RHpE~sfL|ldU02M/BK@?U3bE2.D++W`S49N6-,F6KZ-]');
define('NONCE_KEY',        '=;a=0bEeXi|z(fPeA$y-w^Xeq}m:kP:6pglz5%S_  W&=98^Bv!DtO1*2*!g*Ge7');
define('AUTH_SALT',        '-8o1C{_LFB@*Z;?.Yok78m3y5`pE<bl{2El+J3S9,PJOo)!Jrlq.j8xP+1R?|4-c');
define('SECURE_AUTH_SALT', 'cAmh51i&[mF479Xb,+{ v|Qy{EZi;^|hpO^65u|60OC8|Wms_HF=%>?YM4E/WEBs');
define('LOGGED_IN_SALT',   'yt[Q%LAx}Q2ZgZG@VPnsEo%BX2P$,kt+sm*Rw`|BB|e]|:[^k)N3y?N-!x`eG;-Y');
define('NONCE_SALT',       '9M+.woRVZd;!wg0h84C?Nj)a-kFp$IFXJRwzud(7/=qg9ViI`an<naCs!2J1%_|F');

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
