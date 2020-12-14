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
define( 'DB_NAME', 'estudiant_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'yV#JspMC*R~LW?00N>-K3ZKNR|^6c|$~nx@*Zr5>nm[o<kA)dHqf?)t/_3}I)B=!' );
define( 'SECURE_AUTH_KEY',  'yg NxzTiRZyY{kpZsXz:$Sk#7wYiReJrsnmN+cZX+5o/CosJI8y>8`%MJGJdW%4@' );
define( 'LOGGED_IN_KEY',    '!U;tK|ZtS^}0mv.< 7hcq)T%5m6Qqb>hV;W2i2C@8RY]E|.V.>%34a/| DDum/Bm' );
define( 'NONCE_KEY',        '?OB5-&ucayH?NKx*7ClxCh%v,Y> C(~r::k%q7y7og`BUyI5srOCF)x4p94W,[4A' );
define( 'AUTH_SALT',        'bIt%:I12%`J=>%p;0`zaw-^SPr~Qg#`g,u+,@}n/rbbu#^/s/t*GX%6sz4O*u`CR' );
define( 'SECURE_AUTH_SALT', 'F_3Q@(M$/_+{@!QL`_e6m^#nal10W`}p5Xo_?$y,+3:#Eu6<ktaU54qzky1WiE)0' );
define( 'LOGGED_IN_SALT',   ':&xoBzY$>TS}lGjW0-|,*s43owc9y4:or_u%-RMA}&~ZQWf)4[@_cBPc,ZusBe-R' );
define( 'NONCE_SALT',       'vhbE+(CO1EJwKmI]A7)Ao;_|5+wi|.Qz:Up(i(O-KSOEET<NZs$ R*jlY7N+OKKc' );

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
