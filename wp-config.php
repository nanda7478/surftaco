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
define('DB_NAME', 'trimurty_surftaco');

/** MySQL database username */
define('DB_USER', 'trimurty_dev');

/** MySQL database password */
define('DB_PASSWORD', '6TP%8~m(QDUEsses');

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
define('AUTH_KEY',         '4pF.EIC Zq=#cFSfbV#{s(G=]MTc:%dh[U=k9SF>gT3?|>7{wJZl|$?m$H9Q8gZ5');
define('SECURE_AUTH_KEY',  'esJh,9DDM6;V)29Ci=|pOM-V!~u@$!LQ{<sgYmrPBmQ9C{,6j}8$?kab`>So&jB[');
define('LOGGED_IN_KEY',    '@V+;BxG3wkAG69nHzAu*mp4@=iMshZKRxvNXNNfI[NgF [)WzykY</O^hrX$@)*b');
define('NONCE_KEY',        '3lBil:zzbmP2W-Tgfj:Ph5)&G>SUkd{JMOWu}r{uwvPsmMUcZi[Fg$731opXm/,@');
define('AUTH_SALT',        'VjhAt.wPT,yF88K&*0&q?/[iksGJU#(x.>L|Ad#e6(-YC Z{02_G!K1p! :FHl}p');
define('SECURE_AUTH_SALT', 'bsS5kYY7{5T,/NXfo8Z?ABwJ[qJE#1AWhlsn3f:v:(-Pg ?[s,eKWlG|#~6|6%ti');
define('LOGGED_IN_SALT',   'z@vg9![]*CLgV{je4|4h$Qn_,>eE8H)=^6X.cw3k: YjqUQSa!{wUC}nv;1tasE*');
define('NONCE_SALT',       'GdFueiN8Z]7Z>Nh)`Z-5Uc/-`>#S^&{*i-0$uq$C1twpR{AMQaoOQj+rbmJ8nhYu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpsf_';

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


define('WP_MEMORY_LIMIT', '256M');