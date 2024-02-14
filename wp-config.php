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
define( 'DB_NAME', 'wp_643' );

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
define( 'AUTH_KEY',         '[GJ=(0x*OEx6I!fkF{!Fmas,CH*i6w>4lT}aJ,]aF<)l1g.HgR#m*x>O@U4m3Y1y' );
define( 'SECURE_AUTH_KEY',  '2uS#Q$&e{ SpJ51eE_Pad[|7!r2ON8oCzDF042 4Zp`=Hok81)W:Jq/>*Ce$^yQN' );
define( 'LOGGED_IN_KEY',    '|dC`GdDFm>gSlV[Cv~6nkBZtT_Y@EaOkn*dVg)AfH%5;Aytt]A8(}LVYlP;E}BGZ' );
define( 'NONCE_KEY',        '~PE2#~3JZ2`rW1^F$llw~t=}=;(33i(b4<#oH4+DsZ6LX%a![v3-ibZZ`HDSzDW=' );
define( 'AUTH_SALT',        'ih3gIS_Pc|(ZddC<^26`K}^!^_pgWrJMF3kQ;}P]i^|WAF.=4djq3DYz+-V8Z=Ru' );
define( 'SECURE_AUTH_SALT', 'n!~:Pd2Sb@+eVr%7:DVFK%@xr}/v18cS+vPdSPvfyWf(|`wu*W{Ln!GGDfR$2 q!' );
define( 'LOGGED_IN_SALT',   'dU!86{ku-H<O%O_-oHQ{wgWIqILfh,4)VkAMTkL, K$9Z&FB6(3-5Vho14XuyZv8' );
define( 'NONCE_SALT',       '1RkDSb#)M2I0J)^1hl(F~@J!QIf3to@,-x]j.A3xK:[YwfZ,JaPw&F]v2{6Hx):^' );

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
