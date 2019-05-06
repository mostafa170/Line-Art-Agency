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
define('DB_NAME', 'Line-Art-Agency_db');

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
define('AUTH_KEY',         '1cL9Rmk3k)}0!wfp@>qB9s5$cd94/+ul(oO<C;eE(:8J*VQ|-{&Ch*7>P=v4]iyc');
define('SECURE_AUTH_KEY',  ']a]xsJcJO6;,.[qYH8CEmU(:tH@S;4tR7SPj`cl+7MOV$>dwo)rR)4q4:uj&i~xv');
define('LOGGED_IN_KEY',    'Od;YW|)J,;m_qJ;fMvxDFR0Jq144rP!yW38y!=kRO^/Y6i0o}urD7v4M1ePAPzAq');
define('NONCE_KEY',        'weSf4^9*!f*Z:luKJpf>U?-]t:``O#DV]r|2Xg@F0|eY<s|<!H8mkr[2p>Reui)6');
define('AUTH_SALT',        'u=s*1y4 ayq?o/6CZ5KC/=zWE|77N/kY<tsQq 7Xz9%[_isI%=,Q%Z2pg(Wi_z<+');
define('SECURE_AUTH_SALT', 'JY#5:ly1et.`xHgx3e{^>9L;%5Xl*SBi4ub|}-%qt%$xDV!wd`g/=|Y|&AO#AG=v');
define('LOGGED_IN_SALT',   'v|+w-p$dqE_v+9i)) [%o[ FW4^XSmI3?8ePzt6o7G 8,l=YF@~n>O]Kg04MWbbx');
define('NONCE_SALT',       '&f{t)t/;}=f]QeumzOH~,7X_Zm2#Ss}0x0ih{}*Z/|ppBE-HpXSs*Y$A;gNc!zq:');

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
