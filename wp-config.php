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
require_once('.private-environment-settings.php');
define('DB_NAME',     ServerEnvironmentSettings::dbName);
define('DB_USER',     ServerEnvironmentSettings::dbUsername);
define('DB_PASSWORD', ServerEnvironmentSettings::dbPassword);
define('DB_HOST',     ServerEnvironmentSettings::dbHost);


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
define('AUTH_KEY', 'VYez6WyKKWeGAKsDN9rS5DwnYMtFcBQYPQwZyjOgCBIxWMfopTDchIB7hbPkoUO6');
define('SECURE_AUTH_KEY', 'TnnsEBViQMXOeKGAT9BkF8E4ce33Q6LeM5rT5yS9mZcFo1n4tLaeqBPndQaLhlvy');
define('LOGGED_IN_KEY', '27ub3dTkLXfHUgL0ZOzwNQ42dH15GfHoC5cjZu7uThywtjwMn0v5GGL7VXCmGPZI');
define('NONCE_KEY', '1KjI9QtUXZ2JUx0CEIUu098H9zhnPna52cm4DTCqQ9HpSBMNqjOGCkFQYbY2RihF');
define('AUTH_SALT', 'T53MgCvpjLqJt8bP0J4SNfaQbMCrhyxdlxX3OrmxfOTus838JUsVscn0cZq6X8Zi');
define('SECURE_AUTH_SALT', 'JfrtOYjuAxCqHus3ex6pHewQq29ssrKRfKHzILamlJE8jIZ9IVwVHu4vCeBxSJJm');
define('LOGGED_IN_SALT', 'rHuSl2eGNe3CrRjgkRNDQ8iFBbx9RUnKry1gnPCvO3IxQhSFhD6zr1mCJ96mX7L4');
define('NONCE_SALT', 'MGmhvyA2cJxeddaYvRCJ4VOl6dmck4VHThfBCGOVMMZtWDsSTwGyAe3R5HKin8zf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
