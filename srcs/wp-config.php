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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'Ayoub' );

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
define( 'AUTH_KEY',         'WUr1=SRe8gmA`lmG!~&bpQnj_Yzaouh;if(L2LU7evaf!7MO9xj|4Q?jcE|<,*?<' );
define( 'SECURE_AUTH_KEY',  '436W).(yL] h3ifu4>,,q)H0h7%C=(xVbmWd9XJR]@%JC+nw0nYqLf3BMGC&}yLr' );
define( 'LOGGED_IN_KEY',    '_uX@S6Ds,[h2Q:g3@!QYZFRI%U$]!3U~<^mvc;yh`<nc`(0B>JtN&K_Gkpfo9{>_' );
define( 'NONCE_KEY',        'oP=E{g7xcY:05$4)P>;+^W7t/,g3/kWFLm/) [Z=<3U0sX =(68G/!b)19~]bU_ ' );
define( 'AUTH_SALT',        'wgUM$(lQ.YT-3Y%MZhz48s9^S;Z-cgtkp0:.jbNUKm=P[HJ+;erq>6TtPNLB?9:^' );
define( 'SECURE_AUTH_SALT', 'N~mFhz]Fyfyhwg&dkExsVi2eTgQ5Z EsI/&1#)s1/@mL2nB/DlK$e,$R,[Z>5D1-' );
define( 'LOGGED_IN_SALT',   'Y_g0>ao~p/;]E0/;9Xt&os[+[UQWWa)4Td%)!yxq2,yrVjkFj{~x?H)NBrd1Ce6-' );
define( 'NONCE_SALT',       'p)Xi3nz5R5B]U3@V49Y:%`@^B6Q2u7[Y+%p{5BF/l4uS^pb,*Nlj(IgsB->>>i$x' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

