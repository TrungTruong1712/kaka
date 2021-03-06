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
define('DB_NAME', '#db_name#');

/** MySQL database username */
define('DB_USER', '#db_user#');

/** MySQL database password */
define('DB_PASSWORD', '#db_pass#');

/** MySQL hostname */
define('DB_HOST', '#db_host#');

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
define('AUTH_KEY',         '4z#(}hAYeeaKiVsz=e|a0I:Z!gsroB+[C,yc)Om3iCrz)=D_,&?qKM)r$Rgg}v[h');
define('SECURE_AUTH_KEY',  'f0mDd;Hr`8IW3h?[=N F[:Y,l qWefL.>V}%dRAf,vxA~jbT7(-g^XoiVmkO-Le^');
define('LOGGED_IN_KEY',    '$L1|:4=7ye;0[=_dkJ)9WNKbI.6!}! s_WSMHrHlzjbAtJRwCe|$c*CJWL~#!:YX');
define('NONCE_KEY',        'd2g57F2YqTaPm`~ViC?FZSS,=lu:K3=mfuF0,~<63|>|,*;[FW>ly,1C7BRJ=JEM');
define('AUTH_SALT',        'r6M!6zD&`5-.&C=sJdp#ikG!jxd;>r7p2ID=T7RkR#I`0H]I[K{?EgqVyVK8>~Dc');
define('SECURE_AUTH_SALT', 'r6gMj@<!~}L+h;wI9mNrVgz==R-t2wB</OGj9)ugP:`i&:]#q_QjM]sM;m)EOkn(');
define('LOGGED_IN_SALT',   'ST<vl ziQWu4i]KhbL [6Cu5.Ey>2tQVMzIF=5hq;?^)L4)H%O<;<,7a_Mi|q~7&');
define('NONCE_SALT',       'Rc,e(Qp<#is[lw6*uhePq+.6+VM5vJ@|j_sFJS)X|G!k*/05DG&u90`h39jG&4aD');

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
