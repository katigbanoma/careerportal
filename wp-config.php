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
define('DB_NAME', 'careerportal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'kini419,247');

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
define('AUTH_KEY',         'Ye6[<~^8`0SIJV$T$OF%wHPARa lZ`3QCd]$wI{*`fV00yMh|/M2qd:55~SF@]Of');
define('SECURE_AUTH_KEY',  'ZJuR3}Qgc@_#}F,sjMK^Ph*z2YZULJdW{Rt%^AB|=8&MTL;hBBs)*R,5)z%>OU=-');
define('LOGGED_IN_KEY',    'At]u6sHP`SKY!Z09}#i>4QR<Jxg:4V.L.V%v<$^HiC8b{>xf#tMzYPT;}$y1vS9|');
define('NONCE_KEY',        '$C*I!w/t!|U,7tucJYQjNmE{eZ},(T>dh%:n0y.jcU)iHVxqrvh}lCtjveB_oSp_');
define('AUTH_SALT',        'ah2gd^*F]rM HUN{_S/(?CM!UWi%rYe$dlVL6RK`;80+WtBa#y6CD*$j2b/Lx`JG');
define('SECURE_AUTH_SALT', 'c^;DQB64$qFE>S9Rw.J%c!0d#4cPA*svxIm!=ww;adpW@e%(:G`&!}JaHRfZ,r03');
define('LOGGED_IN_SALT',   'tI1B+.UBtCnpM1k$PMf[FPGRw+)C(5A`!kZXVJ#E/9b&hF3[7tSMuUm{EzaTv*cW');
define('NONCE_SALT',       ']8>^>`o-3a+io_.}-$J? 6nLYNndKM2Cp}qz2=T/q2bsgxCA)8Emx|QP]&:{(!U+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_career';

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
