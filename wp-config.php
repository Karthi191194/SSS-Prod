<?php ob_start();
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
define('DB_NAME', 'sss');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Zaigo@25');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=gj,G#<?l.chyNp;Kt[rk{+rC^4l73kbi4^gYe0U}:A;bylT.-cTj{;_7z_GAqj8');
define('SECURE_AUTH_KEY',  'qH~,m-2XC+Rq)RukywSeX5?(xdyH^E`D(w:t/#X:eK$ickZl<]VQrggT9BOhg5j*');
define('LOGGED_IN_KEY',    '@o#7CRj]Lm_7^j3x.ba{T;N@fT^1F=J-#rZH:Ff?m_-Q+x 2<g,8~b3ppQ5Z[},L');
define('NONCE_KEY',        'A1L*(q:TM4:&0f~CrTN-#@n+-da vLV8OcSA#Ks?|MbU#Fa3Ri~-CkU7>ZN2]>~#');
define('AUTH_SALT',        'hCbKe,|4nv%,8~)6!ET&p}NpV^j<T#epT#5kGu7fm09#T7;F|!zHD.OCllRu+UgH');
define('SECURE_AUTH_SALT', ':]zXl1=/@UNRt#-mEmblGdt1K>|{QRHv4n:,x;:Y^O`mf]nKQ}L+RKiAB%QNB}[U');
define('LOGGED_IN_SALT',   '}37K#4}X1zQ:DKo4%*3|GNGLA5kO%@8Ls!0s<K2/#cE4K#+7fc*?Su{bX):u{WfL');
define('NONCE_SALT',       ']6:xpx>OXdi,%=fe_=*i=Pa{=xaCiPhDa*|l]|=.|7yVJl.{YxDLN!=<&zYyVeGT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php'); ?>
