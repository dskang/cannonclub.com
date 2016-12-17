<?php
  /**
   * The base configurations of the WordPress.
   *
   * This file has the following configurations: MySQL settings, Table
   * Prefix,
   * Secret Keys, WordPress Language, and ABSPATH. You can find more
   * information
   * by visiting {@link
   * http://codex.wordpress.org/Editing_wp-config.php Editing
   * wp-config.php} Codex page. You can get the MySQL settings from
   * your web host.
   *
   * This file is used by the wp-config.php creation script during the
   * installation. You don't have to use the web site, you can just
   * copy this file
   * to "wp-config.php" and fill in the values.
   *
   * @package WordPress
   */

  // ** MySQL settings - You can get this info from your web host ** //
  /** The name of the database for WordPress */
define('DB_NAME', 'cannonclub');

  /** MySQL database username */
define('DB_USER', 'cannonclub');

  /** MySQL database password */
define('DB_PASSWORD', 'cannondialelm14');

  /** MySQL hostname */
define('DB_HOST', 'localhost');

  /** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

  /** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

  /**#@+
   * Authentication Unique Keys and Salts.
   *
   * Change these to different unique phrases!
   * You can generate these using the {@link
   * https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
   * secret-key service}
   * You can change these at any point in time to invalidate all
   * existing cookies. This will force all users to have to log in
   * again.
   *
   * @since 2.6.0
   */
define('AUTH_KEY',         'fog|,XpX+xY SB(J.TkUS->T+uY9s8 &u]>Z4fXsTc`Zd*u%>j%l-m >aroMC0N7');
define('SECURE_AUTH_KEY',  'F&*IY7_rApCgaa gmPuj.#O(^XdqC{Pi?eUx;[3~f|n|KOZbMpS=JTF=|flMllWl');
define('LOGGED_IN_KEY',    '>,|Px>S8uIJJ8DZJfF0;@E7J*/${Ty/;/?+`FRw4C8g^T?[fzQ`i/?+Z?Uv}~2u<');
define('NONCE_KEY',        '|tQ[j<ZlRM=;k&?+*S*kBpe}B_U=%VGuqyHe9@IetvgL&f+9lGuxa,+K=c2NK#-s');
define('AUTH_SALT',        '+e5R4{}NGt-,i?L596))w7Jh10[8]rSC2_qz$/98K{?`G>.|wMO0{@ve#ao 2h%V');
define('SECURE_AUTH_SALT', 'oLU<_:,_s-$E-Tw0>=V7{pAxO`L:FV/24All,]acpF:.ZV$-p}~0~3XpTtSzBtCy');
define('LOGGED_IN_SALT',   '+>,WM6+s9M|C,P=%-l|9<XlE<vTWIXoG7HqJ-Ai`Sras:B6uW<1t(m/-:pR|y-*$');
define('NONCE_SALT',       'KSQ7o=w|ftK{dQ*KPI@+Zz-m.w9$k,UtQUh[+$+ UI!Z;m`5J_aFgLw}M!mE+U|&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give
 * each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the
 * chosen
 * language must be installed to wp-content/languages. For example,
 * install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to
 * enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during
 * development.
 * It is strongly recommended that plugin and theme developers use
 * WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 * Update using direct file I/O
 */
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
