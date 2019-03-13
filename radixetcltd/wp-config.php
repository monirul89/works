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
define('DB_NAME', 'radixetc_radix');

/** MySQL database username */
define('DB_USER', 'radixetc_radixetc');

/** MySQL database password */
define('DB_PASSWORD', '{C4[Nisen2ec');

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
define('AUTH_KEY',         'fnyuicjhopy8ij0if5tbacogrdloxydhaqhsk5tihtlbad4x6rxyq6yd3156wy4q');
define('SECURE_AUTH_KEY',  'c3tajzuflgkcw4l7oaiexlxi1pvpgppeuiapzudysxnkokuppu3dyrec2klcalyt');
define('LOGGED_IN_KEY',    'pfpxm3xti7fze6l0vhhq11frpqjmhdbflteukifdkteyt4fnrijwjlzhjgwm4q0l');
define('NONCE_KEY',        'thxwni7btxwdinnp9jkz57pzwg8xmgte3mf3of2w2cyaafyk25mfgellyl73dqzv');
define('AUTH_SALT',        '2zjc4hgk8hkjjdozm297rfdrtm8txmhra9v7xvxsznwjg8oo5buhwvw9hpjcnzym');
define('SECURE_AUTH_SALT', 'dfrnxbxciwgsrld3x0ubo9zlzuqlowic7kurgoquvasglpipymqpov0isvk0wjjp');
define('LOGGED_IN_SALT',   'nzxsmknkhoyx0e1bs7p5bkzavpyd5bn2xhaf1wthm3byvclwok1eg4bcc9pzydvy');
define('NONCE_SALT',       'nm10ni3r5pmwhslzmu4aqe1b44mr5isqvxuinpznpnfdai3qbkgfggvhyg5as7kl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpah_';

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
