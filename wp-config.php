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
define( 'DB_NAME', 'wordpressdb' );

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
define( 'AUTH_KEY',         'N3&#Z96:$4;$Hk`.Ul6o,6[y(~?q13A]/3M80F)Y(RM]+C*4@}d_wYf.O-jlqp*~' );
define( 'SECURE_AUTH_KEY',  'w>Pd*P>c#*bH(Jgg+xa:T>m$*j1S#V&9)aJ1k6D2 L^+V!.4Z4P=GDav-d~1u-?a' );
define( 'LOGGED_IN_KEY',    '}PFB=8%NwypZV&FI*m{HVv*a8dYIkWp736,mfz4dFu&h_*egr[gh![T]?hCI%Ar:' );
define( 'NONCE_KEY',        '7,BEhD6&8uZOM]/Dm(k(!c(x.G$dOmk9&wiR)#.VJcT<.5U`e<L^O]8ssq}I6u,=' );
define( 'AUTH_SALT',        '[l s3WQpeljSL?J`{q(OXqTnif.Jg1PO)~m,E+al@PAGtRFfSpmw{LkHEQB.kDM1' );
define( 'SECURE_AUTH_SALT', 'Y%ZkWC4Mc<]u1hd:gZK_z$_/Mljp$J3LP</.e,z9/ZjMjZHtt3vqfhmeq?_g=4}G' );
define( 'LOGGED_IN_SALT',   'rDu;j>)Y;X3Y(1?i/$=d>=|/!p$u{<3Qv^-1 W:yQM{3[(2YHcW}j<m*b9dI<>+ ' );
define( 'NONCE_SALT',       ',E)>b?*QIo}pl0bmx;9/@!?dsatPY2TE8zUu$::j8g+uRW T0U4Fx{R{C6gTWvJA' );

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
