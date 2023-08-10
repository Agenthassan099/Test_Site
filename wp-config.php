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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Webb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'r>bul*U|hR z^xisi;PW9q=O^C{:JI-<?[w6QBLX;DDaBF}3ui#M9=VzM!BO+lV%' );
define( 'SECURE_AUTH_KEY',  'GS=1 T$Z4?5R r9Pe#Zx!tDN`~0;]krLvJ;P?4^y,;9j>}/VEeckRdapJ)2bwfLz' );
define( 'LOGGED_IN_KEY',    '&x!E~?LFhFvCt5m$x+=TzQ%{M$Ju:.aB>Z!i^bd|>c|P1D/i0lpTObMI~WVtHU`G' );
define( 'NONCE_KEY',        '2SXv]{`6[{=ue Z+eU|6lwk.Yg5VGtM2$_R^fu&)OU`O/{/L6p-c&<ly9;_hEDmT' );
define( 'AUTH_SALT',        'ho-or[Kb%u!>*I:S@v{#I7xVR)YiDAkZ_ISsYP#N(&!SmJE|(99Pu,DsXn.zg]Cn' );
define( 'SECURE_AUTH_SALT', '),}<Uz4#QG2^ROdWqK_l1q4b:h.!hjsGVa=W%s[D }SpTO3,5nwlrGyLbY<`3z5&' );
define( 'LOGGED_IN_SALT',   '8=9dao]IXpYb2Yw&9NQy*.Siy-O*RABpGq2%J @i!kK(5ms:$_reQT=dmZM4^AG_' );
define( 'NONCE_SALT',       '_spQCwkwDKSQmUHn[@CsQzUOzFBx? kE^ O9i5^a{SyI:2 utGY,>9@A{}oyoXiN' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
