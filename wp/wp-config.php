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
define('DB_NAME', 'theshopt_theshop');

/** MySQL database username */
define('DB_USER', 'theshopt_theshop');

/** MySQL database password */
define('DB_PASSWORD', 'W.775Si8p[');

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
define('AUTH_KEY',         'dtxxifaxtgqvq3twfh6ngk9sdzf9wynyca0s3httnh1smdttsndkrpziiw03wbug');
define('SECURE_AUTH_KEY',  'ist387ymfuszp6buel3txfpfdf0fqt4jp32fr0aploejqu37b39ftiwyhfafbhej');
define('LOGGED_IN_KEY',    '81rr1hpby5mfjhmvzmm6bpi3myusbcyziqxpffuutyejiwfurtqyjo3n0mksdftl');
define('NONCE_KEY',        'p4muwk7enmw9in2aa1wt15hyybjhnrqquzn19nyyobopousprki7viix0kq0gw2h');
define('AUTH_SALT',        'fmk3bvhvcsz7vus12ww0gnhuydrmysjnfmjpt0gpd1ozxuqgjxhlaxguarbpn7c1');
define('SECURE_AUTH_SALT', '3uzv61bjndptkp4zrfogxceglbtycjy1ebrc7wvoiqkv4ulf1p8sb9sfqaqrwias');
define('LOGGED_IN_SALT',   '1rnejfifhldj4o8kytx0ou4djt9fwandhv4ykxr5azabqe9kphpvvspykykcb3h9');
define('NONCE_SALT',       'xdmu4mhv8fine4gqwwt41ecftllvw6c7ou47wdvwgiattxi9txfgrumirpyguflq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpwb_';

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
