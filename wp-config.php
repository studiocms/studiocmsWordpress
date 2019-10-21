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
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'P(mh?os!0g0R+&w&UELOq_+2F@R*95[)t4J0zsp?d&R+RfT>4JA<|[*3cTbs>tJE');
define('SECURE_AUTH_KEY',  'l]cy_XVX%an WVd85G{me&l#kK;,6=c#tDY+-pTXVQ4sWjiK(aAW7s.J9NrH%(qx');
define('LOGGED_IN_KEY',    'J5u{KdyI(^(>zZ#D{Ze0Itb3M Vo9c5Qe+:Ac{oHPt*o]HWcI3VBt8m:_WQYi+)!');
define('NONCE_KEY',        '^Nv]jp]A<yFbE<sk(k7AIbqN4U*t;>^w2A)#W;M,c9b.||2FA|Z-d+b4b`Dv< 7}');
define('AUTH_SALT',        ']%*Ffd<{de66RPT3pQ`I?Kv+D5lQM4e-G+GO{$~VZ9#V9^Hp3 _4NXxP(9~]:.rt');
define('SECURE_AUTH_SALT', 'q:}*_L@rl5-wMHQngUkSc_0+Yio_(N$y!$mbV#[;T.9Q]E%FK}3j|E1)W#!2fwlm');
define('LOGGED_IN_SALT',   'jk9 5P3=@9vS2+Ot}R{#Xms2hb-LOWl5T{p)&$>9xt#>:01zG=WxlJD/{S`=%@j+');
define('NONCE_SALT',       'CZK,5B1tY4@#K}hTqi[f~#%44(qkUW$9(jX>;k{Wl[>R5Y(V$LH-eF),Dei9[l|<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sc_';

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
