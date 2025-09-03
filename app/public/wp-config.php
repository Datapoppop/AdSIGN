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
define( 'AUTH_KEY',          'B:Q9?aQSNj:/qr{oIeF[BfIUwKCFir`J&$v?{jf:DF1?JeJe(}X[?WH/5H@)aEYp' );
define( 'SECURE_AUTH_KEY',   'T~ZVCfms cL;`HEJT_qN$Fo|>{kQx5 ]6[xA^.)D~5Kz<&x/`F49*]3bI?bkR7_:' );
define( 'LOGGED_IN_KEY',     'hS$M+Vb#1Nph~$Mo6KL2@y{+U!h+L4V?NN%GXNDmV~C%7iie*bReF&-)>=>YLHDD' );
define( 'NONCE_KEY',         'OM<R<htGQ`wS<O>[d+j|pS4i`QB?xB6;4vLhbDwgoK.FKPH*(y[e#puG<M3s7K:6' );
define( 'AUTH_SALT',         '?H1;TEq(%/?ze)}>FS6(dPonN3NjJ& H3KMy&F<7.jC]J(H4>XpY`)[xs:qlk>zX' );
define( 'SECURE_AUTH_SALT',  '@t7ak&_epcMn(aV(:U]{wh+1FNGC9ct^|]^0M`X3`xla+v3j_uh45&XS$YIF8{[$' );
define( 'LOGGED_IN_SALT',    '0D HNsU>c^qy4FK.Qq3177(i{;0~UjX`2oKWu]4elhexF<`O}f5jF04]Q._wNxm=' );
define( 'NONCE_SALT',        '*=ZeW_.t9;?%K%N)o@|$?+.aWNyGqa3F@0H%/Cn1Kfs&s]M:R<|FtbqiP9/`6#-9' );
define( 'WP_CACHE_KEY_SALT', 'Oe)7hOY]L&nR7@--4;>=yW{1BU@S)*/) j(9%:@0tSBmB@gnz9*yfr~Ov S1:)^R' );


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
