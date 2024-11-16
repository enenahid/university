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
define( 'AUTH_KEY',          'MD(q38h/U.ZJ>L@[GO*MuL/:UL}6Q:#)vTvDH #3Ej}~BE0F<`K?Lr:whZ>?ILi+' );
define( 'SECURE_AUTH_KEY',   'qm&N;Z3O2gY{/~b@h;ts=u&@P`|(|52sh;LOD}.3(Rq<6 IIHyzD*fjpk`DtE?M;' );
define( 'LOGGED_IN_KEY',     '3EYh5Tuh!28-prrG=VP78Y[-N_MofT#ELUJx}p^8]HZ6SFsb+{!Ct%O_8#2)oMjW' );
define( 'NONCE_KEY',         '8|+^u4ZPE0@{:1x /IZRpVhlg.GOouk?MkgO-t7c~CkzkVLNqE^CWhthAY.ZwZZ@' );
define( 'AUTH_SALT',         'JB>qyXWOY=v2`$|tR<sxXu0 JxBt#@klq_8I]G8>:l8ruC9KzUb(NeJLU/;NBOTS' );
define( 'SECURE_AUTH_SALT',  '*u0M;m3 YFlD2UFk_t&xJo,#;3ncN?+2UgZ*R&AbM$+&!9gTVsH5!*CD~WVI8X8)' );
define( 'LOGGED_IN_SALT',    ' JKB(60YHhxr?$X!~t;ao9ffw]:IDq U|ZQY|x_<qWQv&-ZY2(HSM3ch<i@/{V*s' );
define( 'NONCE_SALT',        '(r,+vy3>[|h>%v+FjO/?{>2$.@N/ezO?A=[we[&bD]jhwOyvM.et)hV0S,<Qm}+k' );
define( 'WP_CACHE_KEY_SALT', '4qc!6K7)4~)IbN!p}ML^:RxtuiX)pGhwPazgU8cZ;;qe5_7o |&zNRcyaknrZ[=A' );


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
