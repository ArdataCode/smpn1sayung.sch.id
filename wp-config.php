<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

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

define( 'DB_NAME', "websit19_smpn1sayung" );


/** Database username */

define( 'DB_USER', "websit19_smpn1sayung" );


/** Database password */

define( 'DB_PASSWORD', "Ardata2024!" );


/** Database hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         ' y}T`;eZZ#nemSRCtIC;.P?wXKd3I&.fNba-V`S:1@~V: Zeg(DX%i!()<cCp/8_' );

define( 'SECURE_AUTH_KEY',  ')Rp(0[4!1&R7%G+yctGpQR!S@!m19XNHu>[mum7D2*ANR:8W>/4WrM95ovxp ,|a' );

define( 'LOGGED_IN_KEY',    '~fskXbf-N/>mD-J%W/Qx7zAl@wm_`T qlUP*[ndy_ml7.$WRTKI,ac8nM3U/Kn+,' );

define( 'NONCE_KEY',        '5+`zj+:wd3Q;_vmGpEa(g2r/e]9!f18J misuWBui{(UU6&g@xQ.:VSCru~/Deg)' );

define( 'AUTH_SALT',        '+vUcM]@_R= RhO3Fv|Y+)p*b*kavAR}dbHYH!|z2=@&5rt>B6oXW;9Qb[R|[&)P4' );

define( 'SECURE_AUTH_SALT', 'B]@jHUuwc7crS0[L}A0]7#X^*ccvCY`{Wp^%W2-ZD0Y-!9r@F0;`,j2FBSQS*m_Y' );

define( 'LOGGED_IN_SALT',   'z(7M#u5-wIbK:qOhDIn]0f$ql@Dr5a6IkLH@0FMVjnR%or3Z4(Y#sL4d>sW=DPF1' );

define( 'NONCE_SALT',       '+nSp]LHb u83h)W_1nxYc!R+aMU(qH+nNrtbPuP7 ~pLVL6!<$a3_,W#nP-Ux9*<' );


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




#define( 'DUPLICATOR_AUTH_KEY', 'V?[%@V9MxBK=%c`gGOdn?B.qHgAU]$MUYQrI k(<2JGRi|PM|8wqxuzv~+Ymi Hf' );
#define( 'WP_PLUGIN_DIR', '/home/u1567848/public_html/smpn1sayung.sch.id/wp-content/plugins' );
#define( 'WPMU_PLUGIN_DIR', '/home/u1567848/public_html/smpn1sayung.sch.id/wp-content/mu-plugins' );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname(__FILE__) . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

