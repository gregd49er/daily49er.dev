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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'daily49eDBuz1ij');

/** MySQL database username */
define('DB_USER', 'daily49eDBuz1ij');

/** MySQL database password */
define('DB_PASSWORD', 'HbgSEEjjV');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ',F^QhGS1l9K[d1CwKh4oCd|ZwJ*TqExX]E+L.6qDx;iHpOa^U>vI$3bM^f<m.T<b');
define('SECURE_AUTH_KEY',  'nuEbn~5o1w:h0o!V[cCN}VsR|;~O#axH~OlK|CwKbyMuTf2m.i6qEb;i6T#a]H@c');
define('LOGGED_IN_KEY',    'zg0k8U>c0N^U>nz5pDa:h5S|ZlKsGd1k8V[du{eExLi6e+T#am9t]e9x_a,Fr$U$7');
define('NONCE_KEY',        'eexL*0N,Y}F$Q^BrIy3nAu{T3Ey[d@R|VwJzNk8rFc4vF@4nDx_i]H+O_DtK~1l9w');
define('AUTH_SALT',        'W9pDx;h5MjBuIf3nAM*TqE$Li6uEe;R|YvJ@N>F,Y}g$FynBu>d1p-Gd[hsKV_Zl');
define('SECURE_AUTH_SALT', 'Zh1O_V5o|h[qEbi6P<b;L*T#AtH+atHY7r>Y7f$cbnEQ<Qq3q$Tj{GV[4g8J!0Z');
define('LOGGED_IN_SALT',   'F^7jJyn7u{fl_Z:h~R-1kCw[d0k|N|0ozR+6euLt;W;Dx#P#2p*H~;Wx9x_OluMY');
define('NONCE_SALT',       'A$QnAu*f<8V:c4R|V}F@R,BvJ@>n0N^5l#W:hCZ[d5S-Zl8sGd1k+2qAx]e2q.W;D');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
