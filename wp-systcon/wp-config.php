<?php
error_reporting(0);
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
define( 'DB_NAME', 'hawabayohwa' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('DISABLE_WP_CRON', 'true');

define('WPLOGIN_KEYWORD', 'authenticationlogin');

/* Recatpcha Access Key */
/* Update it using a working google Private key */
// define('RECAPTCHA_PRIVATEKEY', 'recaptcha_here');
/* Update it using a working google Site key */
// define('RECAPTCHA_SITEKEY',  'recaptcha_here');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'R`/Ac-@`W-nNva7Nha;G6OT&//AW0Sa#`%$s9w0~[.$4,a7$L24@nPyZW`Io`zL|');
define('SECURE_AUTH_KEY',  'jr|8?h)fXY Ziq .0~-9NTFbR` Aq9F7+r+)Y@5<(p,?W5oN,_^@-R`&J[|-l`L`');
define('LOGGED_IN_KEY',    'wZRxUCf3o|,.Z+s;Z,=#KNy;^!nIBLotfX}87Fx EHr#Q28^^y3U)h+4E}-7`)bP');
define('NONCE_KEY',        '{/O(Qb[.XC#Pf.>{eUsoJe(Nr>W+cmQ<~V~F`w&TN+6?J|G~2O-,G!DDr@QH1h6v');
define('AUTH_SALT',        'jk0`#G`e&5ABn-xY)3o2muN(0j~E,%Ck *_VQT- ;O0],s-N:V->VO-yRJ!hEi+2');
define('SECURE_AUTH_SALT', '.:<s*|d)9@Q01qT1>gKTi9`g3+W8%nuq)i]&,%@gvM]s>:Ou*a8u{!7Mt3+R|JLY');
define('LOGGED_IN_SALT',   'NKy{(k,R&-W9(6GBM+2%:AshZb6IUe^Z+|VefV#tgJV& W3(^tN~L(gRU1xj)&%l');
define('NONCE_SALT',       'h-qBXG1pQ{]s[)Q;Z&2m{VZ f>5&N?p(+`@wl!WXR P^-IP3$Qw)5:)wbZ}#4mi<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hawabayohwa_';

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
define('DISALLOW_FILE_EDIT', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
// if ( ! defined( 'ABSPATH' ) ) {
// 	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
// }

/** Sets up WordPress vars and included files. */
require_once( SYSCONF_PATH . 'wp-settings.php' );
