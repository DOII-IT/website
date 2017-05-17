<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('DB_NAME', 'doiide5_wp50');

/** MySQL database username */
define('DB_USER', 'doiide5_wp50');

/** MySQL database password */
define('DB_PASSWORD', 'mLr^5(*i2Pm,');

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
define('AUTH_KEY',         '82lr7hhntvihjiawjkcjwxq8zc3keouagnm0icl4sjleyvkb9ku6mn58bczuxb1a');
define('SECURE_AUTH_KEY',  '3kxkxx2hhtxqpk0j222jqhpchl4fskyslfbazf2xujnef2svp8qz8txfptfinn6j');
define('LOGGED_IN_KEY',    'd5s85lt798lmvcz4mpxy08eo2ytfim5nnzemkrdjoqyyozhzdbvc8gfx4dzyhj3a');
define('NONCE_KEY',        'j0shunhygsouwiocgayzrnhkwbbudbrtirz9l9bbhzn6d5nrmcxizugnsbkf2vxx');
define('AUTH_SALT',        'oyemb60ut3gaqto5q2hddyaa7rhhravclthqw8h9i0hqjcac7i2aaijlwf3zm4na');
define('SECURE_AUTH_SALT', 'f1rgbnbhc4dmqpiwhyi7kdwrg3lb6ju7ejhusdxmm5drrvdswx0zr9jjttsqpso9');
define('LOGGED_IN_SALT',   'mgmnwy8ozj9fksmhyoeap8m7ohj3lzmsuslpabbuhyauntwfqv4nygafbdaxfb51');
define('NONCE_SALT',       'fujarg79kxrdhdrbotpjks44si28ubftjdbizyuoh2og1urlby5drneb7bopsiah');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpaa_';

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
