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
define( 'DB_NAME', 'appDooley_1763810473' );

/** MySQL database username */
define( 'DB_USER', 'appDooley_1763810473' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kytxbyj6PZDzZBQeEXhPs4odiJLJfQV5tW6HAMqG7hiu2turhSX2Y' );

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
define( 'AUTH_KEY',          'PBgyY3Kvx2CnZZB4ZbvHVRXtayuSBAjmMecF6Me9A8Lb0RrbahlINhoKlI41yzo6' );
define( 'SECURE_AUTH_KEY',   '0G2V9LNI87KQfRBmOPVvF2pkCbJ7nv3KjfSwIfbO4OypwLydze9dBi2vT1smlKqX' );
define( 'LOGGED_IN_KEY',     'vB9XaiHKxuOUwnCOMhk1leK7QlstspuqfnVp1nedVy2rRKthtUk2LdR779qgrZ10' );
define( 'NONCE_KEY',         'Qayz2oMFcpI4VlrFSrWX6FYAzLF21016O63sTJAEZBVI8s5ARQnW2Giwi42waxKR' );
define( 'AUTH_SALT',         'qxOHs4eDzN8wv0lMuIyYi9wT79nw6xF43OFV1faMprswZIHdD9i7Nvh47zRVquIB' );
define( 'SECURE_AUTH_SALT',  'kefABLtB2zy1FJQQNVdyB4qZP07AKpwurShne8DbB7WC6YBwvd67AzHDa44axiLt' );
define( 'LOGGED_IN_SALT',    'MA5mb7K5rR03fbnLT7SdVt3fhF2791VGAi3HPQ1t25q59myTk9Qyms4eCa3uw60t' );
define( 'NONCE_SALT',        'S0DJAw1kILMLNioMtH6bcQuG9Z2stTLtPT05PPv96YL0cCNQo31vZSj4DyISicEe' );
define( 'WP_CACHE_KEY_SALT', 'rdDWN1wjPm3KHVmk7qq6xMOKS5LbEWDpCNm17zAgqnzBIC3yo99NLjbX9oxP2u51' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'RCWP_REDIS_PASSWORD', 'gSjiN0pAwfvUdMqrZ4X7PqrzhA2TiVIhJS5_3wZggn0nnn47jPilnrC' );
define( 'RCWP_REDIS_HOST', 'localhost' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

