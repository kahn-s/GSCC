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
define( 'DB_NAME', 'gscc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'YyGU(W,g=Wt<G![m!k&Ms[4C~o_7>KHg7nb+oPg[4FlNX;eBX`7^yeY0qG#`KK1G' );
define( 'SECURE_AUTH_KEY',  'MW#Az o5K,5DQ7o1|2QkMi)(S09U61Ps$u}#]AtZytsBH{E#wP@!#i*R*jbuJ~GG' );
define( 'LOGGED_IN_KEY',    'djg:?_GiPG^0MW%FycmK 7M9fHeLi{~~a;zlMU>,20}5i2O*&>UkRJ,BVk%Oggf!' );
define( 'NONCE_KEY',        'g$IZQ@,2q(Ap|W?yc=p57P~zDKBb%a(~G0A*B*+rnAK~%ohttA_JK{jHpaNCIKvZ' );
define( 'AUTH_SALT',        '&8,,8`~YZrZVFN=+D-tw7?%`x4+ocz-HwLO::_x+!}Rmc4Acm)/ViAmMB+k{laqy' );
define( 'SECURE_AUTH_SALT', 'UID9>>!_KB~Gm$qWYvx{hn4CY&^IwT&v+P2n)50uy%IO#5&j$bd,Xngui;8[I-VI' );
define( 'LOGGED_IN_SALT',   'sif#hNA5V$Ib8_N!A6Q-Ij{2].WDOR]92l8|GU2#aoeb$oIPWD6zL>h(qb9ovFvE' );
define( 'NONCE_SALT',       '|>{UBcz:8r1XfcR.kWam,YmBgy2]*<eT;qbM{9n& j`67&59>}ozP/ydAt9v ^zF' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
