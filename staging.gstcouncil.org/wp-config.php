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
define('DB_NAME', 'gstc_wp119');

/** MySQL database username */
define('DB_USER', 'gstc_wp119');

/** MySQL database password */
define('DB_PASSWORD', 'oI0@.S9pG9');

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
define('AUTH_KEY',         'fx7zzfcdwbsl1p0cjpfvh8lgof64bnuwrtn30ibf1ma0j6zh3lgzq2btdr6qtvhw');
define('SECURE_AUTH_KEY',  'b4dpdfjenf1rtxvdrdvtx4ho37itzcirjozwj0gvqfetrkqg9jipkyeomotzwtpr');
define('LOGGED_IN_KEY',    'q2qqpkpr7pmp2c97blhwt0rg30nt85qw2kcgyy4hsehxfehxrgtegtrbl8xk9wkz');
define('NONCE_KEY',        'rs8wwtsyfbdfpirbfqld6phltrve2g0m9v7swmqtqyo5ks8yzukwc3lk0ou44wzh');
define('AUTH_SALT',        'jzrln94utxr2o6sdrltsxmuylviwgrgqbdnuutuv0yiptynttzv14ioy3pktem4s');
define('SECURE_AUTH_SALT', 'zydgqociet71acuys3zgsj4dfdyxfa7yz4iw0lxphq7uyapcj0ivcuqklzksuply');
define('LOGGED_IN_SALT',   'mdxi9ragypi5irwzn3ztpbvd3gwralmeym2yqauuo0wpbhwc9xbezza7wpt68wc4');
define('NONCE_SALT',       'eyw6hkditk35hxp4pfbwopqielfe1fpaekzl7ovsougecffvy6remv72eaicgz2o');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpej_';

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