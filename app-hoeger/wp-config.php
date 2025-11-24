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
define( 'DB_NAME', 'appHoeger_1763812708' );

/** MySQL database username */
define( 'DB_USER', 'appHoeger_1763812708' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jbxzqSPsz82sNL07092vVHAqnQsjjImP9Uy0JuVPzCGM8I4nE8DCb' );

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
define( 'AUTH_KEY',          'vNBZOhIJBAcRojk6aaO7i13LutvcHH8HNAJZHQ36yDjaRYx3mQVXrJn3T2SuNMER' );
define( 'SECURE_AUTH_KEY',   '6nKlW2hDOKegL8UsKCTMPvRzzUgK23dpe4TAcQG091xW9BS9UcBm6Piz0ojDpoZJ' );
define( 'LOGGED_IN_KEY',     'wWH4A6I7HD5xjErzp3hoF13LzUt211BwSS0ItidSolXKafi7AQK3SOSvxwoowr45' );
define( 'NONCE_KEY',         'Rz2xoEUiZhXKjgj0dBv5asJ58xGewJ4Jm1mPdI75IBHgvefjAv4LM9okJVk5CrLp' );
define( 'AUTH_SALT',         'BXqtNl7EYZrX9nVxK0VmZeYJ2f364qc8ZKkFBY3Bil5wlbvMF3G935UBAPj194DK' );
define( 'SECURE_AUTH_SALT',  'yCT5cfONmqQ7xeCPpUt9H4a5WtR9667uWaKjcHa6GG8vkXnHtcBiWS60npfVDfrw' );
define( 'LOGGED_IN_SALT',    'AX29EmfwhpzFjkWN9xsrrJiWZi7SqKDAWUx2QkJ3G2uxfV0k579KNTHApdt92zAz' );
define( 'NONCE_SALT',        'nQYFY1YFMtmDbBt7PxsexMn5hqSofmHXqs0mhq4YGWdcBkkZD2FEKKYjDifvQb3b' );
define( 'WP_CACHE_KEY_SALT', 'lXRiUuZVoAdK4VD1nQgo5ZTe13OEdyurkfNxYifWrgfsNY1dBWI3amW3dDFTckTx' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'RCWP_REDIS_PASSWORD', ["app-hoeger47455","teGmZd2QLBfXs1BO"] );
define( 'RCWP_REDIS_DOMAIN', 'app-hoeger-rcredis:' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

