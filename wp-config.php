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
define('DB_NAME', 'code-snacks-db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Zh1GfNCEjWclc4h*rk(di]{gTNrjuO,3cx>3HPXxb.;4nQ4=OpstBcwE&49|7Yn_');
define('SECURE_AUTH_KEY',  'W7*VoE@5By=mY hcLdA`yS~N[F>P#$G|tXcN.,0(NefqJOj/su>Z#@Q,@nWfcdF+');
define('LOGGED_IN_KEY',    '`E.`VueQ1~.8T.lGy-H;+aqPA6XF8EaaV!9S M/6IJ](!NFUJ: @l<m`E!}irGa&');
define('NONCE_KEY',        'j[j52fTL3=;[#@<_~88|B*`rajx;OO7+O((62N|C]sG_l[T+o%AOl]FZNq!EjnZ8');
define('AUTH_SALT',        'm ohc9*h77Q0[N~bk1C6{z0P=X|uH,~#I.MFu3_D@zttpO(@Tymn`R9P]8_Q#.]D');
define('SECURE_AUTH_SALT', 'nG;Y,{Ux_}[W#~cqgJ6]m`[]D4aPEa[RzT%r_lP7:fzv0M^f_>MXv93zPb=#X#fs');
define('LOGGED_IN_SALT',   'R *qU&kcYf=1LkbDOL1p#.V|zTKOl%U}o*(|fKuHN1e@A[v8xmQUJJ78loS%aqmx');
define('NONCE_SALT',       '??_LaYhqM9HQ&s^?q+}r7=BDZ:q(Q{$f *my*.3oiz+Q`KCb8/*#^ OHyRW?7ieQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cs_';

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
