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
define( 'DB_NAME', 'manulife' );

/** MySQL database username */
define( 'DB_USER', 'manulife' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'Nwt[=6d5(x(60l0I>Fbt%ZXNa9h0G$D!i:^m>A!V0Jj|Cu]^CKBI3KA>U.>*| Va' );
define( 'SECURE_AUTH_KEY',  'zb2zF Cb/5/1%D8 []E@g}VVG^eB!y]D90t,korwpw+G6:3jgDZx-Cykd:3INFh|' );
define( 'LOGGED_IN_KEY',    'YlAC Q+ Ua)tZ]A!d5XlF%)q(ks;Q5Vs({TU%:L=DCM`7T=nez#mM11<MiY`uH}>' );
define( 'NONCE_KEY',        'lSph?1u1hA<4Z|!C:!Xw%:j>:.{dX<UO}u~s043%U<BE^3mC~68co|N:Yl3Ybz;8' );
define( 'AUTH_SALT',        'b(/)WIw,=Hxyaw<dtKKii-7XUhd{/ ;]~t]hq{a=s.z*eQ{d+Ge5+oIGtCt!Re}C' );
define( 'SECURE_AUTH_SALT', 'Q(s-L{>+}09KiX*KDL]Mx<V@)foEH=N>%g |@N%h{n@0Em9X|g.iwtv2C@[mJ`<$' );
define( 'LOGGED_IN_SALT',   'WzhdFFyrU(tTATCRZ.p71sa}m5,]L}Q6k)j4=CpHa>vhv;!Lnk~K)EJ;wc7l_5)f' );
define( 'NONCE_SALT',       'p>y#,DD/14f!_LNm&md{,|cIT6NossXon=qaEYgEVle%Q13Qg244#=<6y{}i=PZ4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sdkjfdsdfkwp_';

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
