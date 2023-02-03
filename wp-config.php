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
define( 'DB_NAME', 'assesment2' );

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
define( 'AUTH_KEY',         'JfF6Qhj.|=8aVI:B$ZJ?;,w/%j5]O_nre,/WG;-L)X<q51bD1;T&hZt]6^dl3*:u' );
define( 'SECURE_AUTH_KEY',  'M%V4m;O2=ZG-xX?,0fALt}.lU$_va|IWS$[p^.pwx0jl/[qj2P*q}=+W1[sp)VBV' );
define( 'LOGGED_IN_KEY',    'nPh,pT}6FwK#u%S! O?HI|Z1kL?N<ae6X`97J9sX~@b(O,>!aD4mM/K*QS;M]28-' );
define( 'NONCE_KEY',        'x};NnDUqj|}n_5R3~{jFI0hY<qj*sxsSR*}U$PGD4wd)@_=3e-+NGXZinGur+eNR' );
define( 'AUTH_SALT',        '9T|7*v,iG^2g.W{G1=8uKP%|*&UA t/6K6}ICT%Ln5H.zyGIy@geq0x<Op0$pZEo' );
define( 'SECURE_AUTH_SALT', '&AmuH^*>mjrW3} $W]jg.Ewx5rJ< v-b[PLQkzu140.E~6q^5/c:B }blv:i}:[A' );
define( 'LOGGED_IN_SALT',   'I?K*D)nGryWAW0;t+);ZPg(6,_g2^SfJDJIcRkgma) 2N((Ww@/zZV{i~3,< nd6' );
define( 'NONCE_SALT',       'm?Ca>I(i|mMg0dYP@H&i{ic^.h(|Wq@6&Q7k7i;P!.^JQxHoRc<DryZ,kA6#$C+X' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ap_';

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
