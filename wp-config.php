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
define('DB_NAME', 'event');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6A2~8tL77Ju$Dzq5P%t|_.^ TO;|n(hDU0/7rv>m*tG92(1.#o+@zH>+f?(LP`w5');
define('SECURE_AUTH_KEY',  'ahVD}Y|uTSx9uK it)<||J}5BF)<L6 IK6yFxma1&hJ76Mk2i=&?-mR}2pG!R!ZL');
define('LOGGED_IN_KEY',    'Rfln@|T#$!bP?>XZP*+~@YYsy~kH/uGMa$RPg nau<w9!m)@9W>4tK38u%;y{bfV');
define('NONCE_KEY',        '1M.k)THT_nHD?NEAjC?{2y>mW<Fi,fDlMP08cK5IH7V(1,0YgR_IAq;iI*]hEb^a');
define('AUTH_SALT',        'W)drP|}q=H;x;I,TD-~LZ?v,>Q7Kmk%STz|b0->}/(=S=3Wc@uFyQ[~6+[waQ/4M');
define('SECURE_AUTH_SALT', '&Y(Syg/BX$MUPc]L o5C`YsLn;q>v ]{>5n?(`qYHZ <{$)}Y@^AUlHm!y:<c3)*');
define('LOGGED_IN_SALT',   '1CBXX*jA?bzeb?hEwu@qBw::st5b?>l=hmuw*<BnhipMS;/%<ypU1loY1#Q(mN3o');
define('NONCE_SALT',       '.NJi.MaKGs220jR2E6>4A&$D_AVCZDcPfR&(*efqfvCcGD{kv^qORJFl&65ur/!(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'event_';

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
