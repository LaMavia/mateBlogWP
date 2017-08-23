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
define('DB_NAME', 'mateblogwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'vn7vTT_E0s{~?.X*Nyr w1JcnJkzB{c#C}]jSUWrrRRK4%z*;6)nV~*n9PlGWI!U');
define('SECURE_AUTH_KEY',  '%hb|,^5Dcz;*P=T }pLgMim<qSeOwI.V^kw$~pcjQh#L/P-a}N=A{<h5:+t|N*j|');
define('LOGGED_IN_KEY',    'JjEq,WdC.z`}@]}tV`&#6jzL4RmJT=P6;<RTiF9.kG)X1bYk/6]Oc0}rg+{pn<<y');
define('NONCE_KEY',        'ev|:S_vgc~3#-,=.rF~(tW-+IcWhf<W7rU+.CFC]x~iEMKV^4y2/Pr1uz_-L|<Uj');
define('AUTH_SALT',        'f9dW{JZGZ#J?MSQev43_4~B!=hrH<Da~YAyF5~ XQ/JI`&g_9/Jgo/Wc-o^M q1U');
define('SECURE_AUTH_SALT', 'F_h{9{Z=}qQ=2QfdhVxyD>(0Q<6fx|pXaeHCK&^`k:r.7pq0c!v=F/R2T%t$=%Cf');
define('LOGGED_IN_SALT',   '%Qa$xZ%7:{V3&v)@QM7y]JbZ|p|Vq+)jfA]J YQ!5.@{T9GU8QoH+U2~h6%rid,;');
define('NONCE_SALT',       '-P_j1Oc5EE9#}omFT^t9%4,_#4c:Q3OfXalHBg[?4E|e.#>UjEBcHwcVK]<RO}45');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
