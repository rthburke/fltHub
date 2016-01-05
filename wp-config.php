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
define('DB_NAME', 'FltHub');

/** MySQL database username */
define('DB_USER', 'fltAdmin');

/** MySQL database password */
define('DB_PASSWORD', 'Shescaredme3');

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
define('AUTH_KEY',         '{Jr8qCuje6x+i*hX!Al=9XdIZV %#kJ[lL*x4&]=Bbq`u7bgG+bApHfASP_chrzZ');
define('SECURE_AUTH_KEY',  'm0v|=g/R9:h,p4xvVr>786pmnpCv}+v-rZN5l-rAtVYp68PSG7i#TF|[cLp,zfQ:');
define('LOGGED_IN_KEY',    'R[Jj6bMVAk-Yq5fmV,mC-;kC<}(AG|rHa]w|;foCP)n3w KE^6e[s+iv=y-_>fg9');
define('NONCE_KEY',        'wZ.n,A(yLE4,v+}6c+c)/*fp``jr}_t4[I(bQW^1Q/RD^z`Xx(u80m+.9<dfS<l)');
define('AUTH_SALT',        'nPlcW=~%x<5k6KJ{{@ph[t!|ORp+cFl;A&R|-X::~WVi(eX>4AfG=&^3~=hJ8]5b');
define('SECURE_AUTH_SALT', '-+Jx$P<bej2lUv a]d[+t{LoVD:J350:SI)IB#^1+8.l=y8$|w,r~0O2+>:E;,3$');
define('LOGGED_IN_SALT',   'L|-L+S@KXu&xgCO-k&BDQGRsmiTUC(d/G<w|*T]OmuaK[+gAe!g2-|z.|v3E5@;w');
define('NONCE_SALT',       'bl7?W2&64-[NAY{_Yb[+FRe^-{5!}3Tv:K$Pk>WBl41DwC|V;oKfL6w>=(9^#OU)');

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
