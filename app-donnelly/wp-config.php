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
define( 'DB_NAME', 'appDonnelly_1763813585' );

/** MySQL database username */
define( 'DB_USER', 'appDonnelly_1763813585' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cDEacQlFEj4IgtYoXwAXNigQojSD7OFCkfh3zlbRB4aFjBWPlh9kG' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '977ZMAfhXQyagMIiBjPKj76tW84caKs22iSZ6gehO9l546O2gG6zbQhBEZIm7dTO' );
define( 'SECURE_AUTH_KEY',   '8HZFGBsOUp8LqOMooalVgLLsfIDE5V7O1Rutqn8TzD1HMgCPDvCPnvkUk3vksl5s' );
define( 'LOGGED_IN_KEY',     'aLoJi6O0tOvGiF7coRWy81k46EtSfK4e87uu0c1n3Ihf1FeoV4Z6IYArs96auTd4' );
define( 'NONCE_KEY',         'vs9ZlvzEq5Wk1HxdLtjagfanfv8r1v2OLUHUmBHH8jzAqvfWUuO7X7mUCNDXBffb' );
define( 'AUTH_SALT',         'ziCK9VMEqRh2DRNUWiH4zP3yLLUxEHc17HTYIYGh7W5UTMrh2X0sZziUiVr1T37h' );
define( 'SECURE_AUTH_SALT',  'BrQMeIA26K7WN4BWlEd2nrFtORdtDGUa1ccqkapSw294KkhMETARXCyz9nQij4XN' );
define( 'LOGGED_IN_SALT',    '35Lxr4XW8gC8U4JlX4gh7eeKuur6bmXA2EnG6FCPVOm1QG1zcWJDx7SylEJUuf4p' );
define( 'NONCE_SALT',        'mM7P4crjJ9Qy85e6zfTxOYTdbBBJRnOptBllA8qxoxepPeZ03vleqjXDtyxJIw9M' );
define( 'WP_CACHE_KEY_SALT', 'D47WK6xN0QUW4KNjMrU85BGbm4qNyLfDVxqmNKDSrIkbmyMWG5bezAuUpomib5mu' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'RCWP_REDIS_PASSWORD', ["app-donnelly12542","PlLpBWnMjDHYogRk"] );
define( 'RCWP_REDIS_DOMAIN', 'app-donnelly-rcredis:' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

