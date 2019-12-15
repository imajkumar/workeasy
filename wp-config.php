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
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'home' );

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
define( 'AUTH_KEY',         'Xo?oWeRy6?WVMC&1;rm3|}sS/t/<U@+Kkh vskKs$~-J=-MNp#i/L23Oon3$ZlGy' );
define( 'SECURE_AUTH_KEY',  'YQN* ,%nb-58hHq0oOKpA]u%hypr9)ql(6,wY=fR-A.V[+*^k1FH,0,8W!GK@35b' );
define( 'LOGGED_IN_KEY',    'Ky:xKd#zf/eZ!j$7`0mUYayH/gp4o2M+JC+-TMMGi9dBHre8IK063W!Iwg=bZ:vD' );
define( 'NONCE_KEY',        'JIUMn?;-4LZ %jH@Tfx@+Wxf&;^+R|#Ada:FUgn.[e}4M~y<BIQZyBu1K+t:57Ac' );
define( 'AUTH_SALT',        '}sfwfOg6s$C_| !Ed<dxA~vzt?6[A-0Xl|XSHZbOV np2[.c{>h8S?E5*%`+<53`' );
define( 'SECURE_AUTH_SALT', 'c;0.IKv9hPriSNh7Au4G%2wg_HOVoMV!x[GZrjZVV1Qtmw?Sbw!BdX&[<o+XXgiK' );
define( 'LOGGED_IN_SALT',   ',20x>)i5Sb[8g|&l[m5tOcP<m )S~taRFNJkU[mwTXAeKj9CTwI&f0gS0A8_vVjr' );
define( 'NONCE_SALT',       '2loV,th)PBS5bq[/,h(QnG4ePSfP 3_oooMw]R0{gNE#ky<QV=6og$X1(v/3(#s[' );

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
define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
