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
define('DB_NAME', 'wp34');

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
define('AUTH_KEY',         'b`O(7eV/KnnIFO$F@<%m<yva3ALo4R2tK<8gfnKj!c{[<1<.7W;7o;bz:1&cFOlF');
define('SECURE_AUTH_KEY',  'nqxxM=g)xga[9$=*-GEg#vY{vGX1AT:2OZmxhX6P79=~f~HINR29 FLnWQVAGa~n');
define('LOGGED_IN_KEY',    '9m{$<^i7_+_r1uL&.G4`{YQm<uQ1.`V~kb{j%rCJBXT.)U#im@LKM6MC<<b{hl6X');
define('NONCE_KEY',        'T~IA,%n$=}u5d9A3MLc#~6sWv*h/Xsmr~73c:>d&8_iq%1ioyU!@()$;0^aL2iX}');
define('AUTH_SALT',        '!^*Q(( k>_?gH3f>urI[|&]9}>w6`2_9&54$*U2FRlG:HikGGo](y)Qj;.&qRip~');
define('SECURE_AUTH_SALT', 'sfq7g v8=vn$ufz >% A n$n}<hwSl7ukoUDD14c{b$)Oz^?9xdK2J|I27Er.cd#');
define('LOGGED_IN_SALT',   '6Yx5t_putUo%nc];) J~(46z|RpE*r4EEHVD]!<E/3n&RXH{fj`}9|^v`ErRh$%]');
define('NONCE_SALT',       '0W$Wg%01Bk7>6Fh<yD[]TFw|t/X9~#,5tF[&rY.Ze+)vVc5{6au2dl#<]`u[Wjgn');

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
