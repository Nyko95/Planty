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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '}nj(i9j=Yp3nUaJe^>+X7t3}K4Ll-$^d/9B*W0&$eLHHl9sDM.*fGD2NW}>CS0ul' );
define( 'SECURE_AUTH_KEY',   'e>E?,_iBQy-I`Q SI,dq>LOm:3>lQ7xaSqr 45zP++FUGr}IHj14{m[482~LQPM:' );
define( 'LOGGED_IN_KEY',     'IZ%.5qq}z*~F@36:_L8_?I9uM<Gmmr qe8Hb^og0>qzn`<`i9%.MPOF45s(3 |v;' );
define( 'NONCE_KEY',         'e17PLpx`haW%.8QU*U/y!i1#jWOHN__dRN0LCv/RlA]E0^SY7;+:pH.3}yl,@XcC' );
define( 'AUTH_SALT',         ' A:s7z-2{*JK|QT9a#Fu$`|PllMn~11_Tm|_1h3m5->w>n!nXzjLU@$$(<$d`0WT' );
define( 'SECURE_AUTH_SALT',  '#3e$;AYhvm{rM:z/gt(4CO,&KX)_pTz=&~FOa6YQSh+sb4>TE zL=Cj*H=_,|_x<' );
define( 'LOGGED_IN_SALT',    'Qx.LzEQfmoYI+s@DgJuhc4YW5<k`HHj1xH*K]OjmOrV.{RKw<a4(HFG:kv0kB,AY' );
define( 'NONCE_SALT',        '57;w5,ze.T>/IU}=*:8=(hV)s*vYaj)Fp>R6/HO0~%Kaq5QCY]ljY!Aiim5{Onz5' );
define( 'WP_CACHE_KEY_SALT', '#(*(_yX,iKX~8RWnD|vHK4H2TIzpGV&{8^f,oOMa=z!C8DqLd1QRr.~K)7T^S]Uo' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
