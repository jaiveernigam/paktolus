<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'paktolus' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dhVgL[|u$$QB{tCb@0`m!C^=UbH!p?N3+ih+z3AUhU)@jO7/zy!AQ*DZ6).2I4nu' );
define( 'SECURE_AUTH_KEY',  'rC{Hx~ccuv0XUWuk~N(IsjGQUUZ3wP0;{X:a7BeHpKQCn`kke7#<ed=gbv%n1`vA' );
define( 'LOGGED_IN_KEY',    ';#<_pY?E<fQy?~A!B:MGE98a=V9^C4a!zOj}q)#BxT?fnBERvQHk{$7-joU,czV,' );
define( 'NONCE_KEY',        'Dxhnj*>!W5MEdC/t*#b-I/^QIL#/(, IZ,d{t@W+UNc)bF!E#ybg$J6pnmvw]&f:' );
define( 'AUTH_SALT',        'qv:&xiP&h]yQD`rYIPp6u)om^uV0v}@ME2EL={(K@5i8`QOC@/P;2XYIM3>#bg2O' );
define( 'SECURE_AUTH_SALT', 'y.lWKgNp*:r@m21#Fj*}ej9nx.3w[iK00)q[v_L:CmokwdjO>p:A`WnTa?wMeOE.' );
define( 'LOGGED_IN_SALT',   '#;^{d)H$h[$,7m+q6[#j=-(%UtO#l&p b5mibLAm+A$Od{T{c+SRc9SiwFc},(gG' );
define( 'NONCE_SALT',       'DVGdFDA|=thQcj|U3}DUuq9_8,e_<rfT3<}G;L}O&NYb#b.8HSyXw[-HYFTzLild' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
