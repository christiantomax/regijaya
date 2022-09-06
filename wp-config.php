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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u1792969_regijaya' );

/** Database username */
define( 'DB_USER', 'u1792969_regijaya' );

/** Database password */
define( 'DB_PASSWORD', 'Og@Rzq0w+&*n' );

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
define( 'AUTH_KEY',         's5zNFKx/v>q|Fej`rzqKm;4H,Nexi_a2v%RB2fm(8-45BQ7nk]{&E~dI-X,o`e:^' );
define( 'SECURE_AUTH_KEY',  ';|47u~/5SGzFCyc.d<f)(n4E}PDsYvd;Ic28/y^;]+=A.jb;^:lP!rb]-TvLZ4d!' );
define( 'LOGGED_IN_KEY',    '=-oW1i#iBNEh@QtvW.}@/5Wjt<|KqQ,)&$+h{V]:FAT)o)Nqmv-l}XE(`G5-|9m<' );
define( 'NONCE_KEY',        'O<BARnM{([sJ!?};XcS8a4%++wyahlUSnez4i#|O_[qLd8>#1^:`e}}X?+?{w-6b' );
define( 'AUTH_SALT',        'r]X`5,zZ6Zy2tjfESzXov>TUxX]d06B8}]=znBWf<Sc-8:Qf:xMR|W_F-I0QnQg1' );
define( 'SECURE_AUTH_SALT', 'IP1!k>%d;;3#<t/dsE0ED*:`y]=pr/P C.wW*Q||U6PB>R<DRu^J=s3@0}JqG,RT' );
define( 'LOGGED_IN_SALT',   '9bf(cFQCGgV]}{qtA(YXOL9&8l_q:[;#6k+_no&3W$>ByuIJ%Alt%5 /pJ%c5a,J' );
define( 'NONCE_SALT',       ';>/=3;PPr `=T>r$a6BT[[onjhy0#}14&js8&TN@)W{K,r3v9H_8LA^|ci7<yIT*' );

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

define( 'WP_SENTRY_PHP_DSN', 'https://95b47476c7404772abcdd55bdd1ed8a0@o1347470.ingest.sentry.io/6626153' );
define( 'WP_SENTRY_BROWSER_DSN', 'https://6809972f6fa6453db81ac4d11dd2afc3@o1347470.ingest.sentry.io/6626203' );
define( 'WP_SENTRY_ERROR_TYPES', E_ALL & ~E_DEPRECATED & ~E_NOTICE & ~E_USER_DEPRECATED );
define( 'WP_SENTRY_SEND_DEFAULT_PII', true );
define( 'WP_SENTRY_BROWSER_TRACES_SAMPLE_RATE', 0.3 );
define( 'WP_SENTRY_VERSION', 'v1.0.0' );
define( 'WP_SENTRY_ENV', 'development' );