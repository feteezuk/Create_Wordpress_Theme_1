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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'Hq4riRLnXyKNxMulTB+/GjHWiuoeSWuN5v7PFeyeXR+etOnZHMgIOyXBydBxihyDZRaVO37R0Ck+BAHK358UCA==');
define('SECURE_AUTH_KEY',  'HiC37y9iIzOKdo8iqWiXWcPZJsR2XkP23sbKXEpgMDwOnT5LOeGdlkmBZfylnIhYDW6S3iUOlZLxZbkMz2vHUg==');
define('LOGGED_IN_KEY',    'IxAxXGhPU98h7OjB9WF+FwurK0iIWuWN9XVSLVDBvFREgTzcA8jWFhXO49K9Ibn3uopJmFJJBGJMaQF9vTzwcw==');
define('NONCE_KEY',        'Ln1oAuu6fVT+1WbXiWYgEgol6kmM5/8On2OkjA8podw3C+Sm2cQxoZWe8jvxJFd4UDUYGOKffZluHfZtafq7bA==');
define('AUTH_SALT',        'u5qPEajsppGon1hboIC1nWaCWMQzlFkDxe1nD9LR5JwHqKmVRrwo/X4DbnM60jG0tzTvK8CuMS2l/n18gr3tQg==');
define('SECURE_AUTH_SALT', 'pPxUcfrzP7V+GmNg+GQvBS4hZVABo8l6xe6I94E293ufiN6aNT0kar1GNso1reCHY9zFO5PEzqrb5YVn7Ier6w==');
define('LOGGED_IN_SALT',   '47hEd5qem7ztkz1e4lmbgC/g7vei9s35nAD6XT63tr4D5SAggBrI8fwReADkag7dOntstfW0OOd7EaOi6u/AIw==');
define('NONCE_SALT',       'elr6JkWqJY+KuS+AVbLDQFg47m2rO9SidnoZTpocFaJ0lQ9aAqRiE9e0eDhU+d2fs2HLuO4gqfA6oGfb27i7LA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
