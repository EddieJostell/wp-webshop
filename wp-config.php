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
define('DB_NAME', 'webshop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         'H~t^v-6E)Qn6?x.=hZ]Kc5LLF5>VZzZtVvk7VGteR6,gK7`(~IgLqyE`Nwy!=wMZ');
define('SECURE_AUTH_KEY',  'CReq>&B#CFFB]7`xVvS!5:AtVH.`.v$D-hBg@Ze&0|z5<3f}Jlfn{e`SgQ1RK+*N');
define('LOGGED_IN_KEY',    'AhIEOz3%T&nd-71c+/gS8!:.%d~N6wDq?vVddj^g44Y;M,79G7D>#:)/Mg3X#V`*');
define('NONCE_KEY',        'f&C,{`}3} #ux~A!`&9-uQk=vtJ9Dq-F& rFZd( ny!NKBh[IAjnJxY7g~z7n^|b');
define('AUTH_SALT',        'S7h5VBML6j E+qx90`p)EQ0j+Zpa]+t<wXt=0orEzgSFFLjyQt8G*rt8u4Y9.Hu+');
define('SECURE_AUTH_SALT', '-u6Pc7+bVro6Ya2 rFTj$JGur,G&Ex9[ ,^MP9Z%>_Bq:ri{%DIlK.]cO8-F_)VH');
define('LOGGED_IN_SALT',   '}O*|^S7i^g)6#CY-RM&#*H$}8@hlt+RyjWPK| H=_qS_;AEyj--2/L+b|aH<@3;>');
define('NONCE_SALT',       'HacYQapM!!BrpHX)GNq  bzWQr25S+eAGM(UME,P]xv] !%<>T8[s+c0To0}o!]t');

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
