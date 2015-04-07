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
define('DB_NAME', 'test_db');

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
define('AUTH_KEY',         'ys98+/-fhCKDyeafccE/-1;{S-8B-eY%GtHoaC$L3@yBs|7!WpM%m#?i8/$?*RXC');
define('SECURE_AUTH_KEY',  'TEa:tBt@6.n=NRX!,JW+Uo>n[hn!:W[+^u?PAw-BlgmG$m9cO+[Sy|>[>4l+r6D*');
define('LOGGED_IN_KEY',    'A8Xgxt6+O.l$tw^Vsz|ol3CA[VV}kmk+wNbv AZ r*{6J/_&hO|H* IZj|VE_8MX');
define('NONCE_KEY',        'kEtF+(g&CD8+wk|:mX(?P1aA$.[/!qq;4F*MKCg)=lvjPq.dNen-|pW=?{_lc?&s');
define('AUTH_SALT',        'Zi_@+?,?8ak|#o7N$;j@H% Wr kb06gzlw5144H{y%-r&yGO1xNfxY}[J1`HNL.y');
define('SECURE_AUTH_SALT', '4eJ|bZufHmRwmPG[RFr g_W1nz19.}N0!n{+522Vz^^EBXM]i+~R*_gvP!0-:kx;');
define('LOGGED_IN_SALT',   '>Ae^}/lyh6e|}%QadQiky(!H_:|1(6 UJfZ+$XQ3hR+v|Eyn9N/6JC|+2T:$!9f@');
define('NONCE_SALT',       'y+$%kAVQ|Q5Fl]tM2!Qu1>,`|Q8|x7(s^[A=:VfnTpM;$ RZ.!TjRBT4^qMH2<ar');

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
