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
define('AUTH_KEY',         '=8kci)Dn%`.aO|!?ifax7:OpzRhkBk6>P(qnpR%O?VSwQDE%9}B7[72-gqH;/3Zp');
define('SECURE_AUTH_KEY',  'ZmB~*=>%V}wd=Z3dzB}?~eobpa}Czw<JjS:.6Yj]wthHBl?AT:k]ph48ab4i}ae&');
define('LOGGED_IN_KEY',    'x$1~;F@><X0V:T$;enR/|ogn<+|K->~JnaN9O{,aG-oS=;mfgcQcBM`jD-#S*dPD');
define('NONCE_KEY',        '[uc,B!m+f$Uemn)Ab^VE1ZU2P#6N93=~la_#7t|@TB![p/isE|+ #1E`4$gFfGwZ');
define('AUTH_SALT',        'ErWdrnm:USg:kTNGU]33NvVT!W-W=UM_CX-6PzDfChul_0ydUVJdwFek>-cBwqb&');
define('SECURE_AUTH_SALT', 'aS]~f2T9+f:7Sh9SV)]MJL`BQA?wl)n@=P#Wx{#IzuLv>]MJMyasH#9@4HeCJoqP');
define('LOGGED_IN_SALT',   'Dcl[O>)EPu;IhgjPJ=$,jKa ^-:3dUE~msqMhe$(!J>)_&J!jBw{hfSGc#2J+Da*');
define('NONCE_SALT',       'IxB$V`+~lU_2[!!V0[;HUSb0s8R`3SD}!UYr??/#h?bJE;mX|adZLLqAg,> i)O;');

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
