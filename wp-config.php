<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ryanthigpen_danielnordby');

/** MySQL database username */
define('DB_USER', 'ryanthigpendanie');

/** MySQL database password */
define('DB_PASSWORD', 'NdDtRDYK');

/** MySQL hostname */
define('DB_HOST', 'mysql.ryanthigpen.danielnordby.nyc');

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
define('AUTH_KEY',         '4OcYoCk~wWsS+b2IWkgh@IvYgBC$VwN7Xv|?S|@0OV:kPg9nDzi?p|bTSNTf8!JT');
define('SECURE_AUTH_KEY',  '0_EtW@2;HLE9vk5uOpnEQFH#IQQqJ/voY*YQKb|?CEtI@7$Oe`^v_;Rz0tgGfkjq');
define('LOGGED_IN_KEY',    '4NgGbC4PPP5b$V?QPz^qA%hUTzHjT?doi#^Ht;iR`0"o?#~@WcYI0rU/1hR_zKfd');
define('NONCE_KEY',        'tu/xzb#C@Qs?gG9b929Et2WF/WwQaWdy"XJAt!tG+FWOMUUSa0~74mfY2ux1+h;I');
define('AUTH_SALT',        'bW~Dgk8XvNRMr59Se+P+hUMrq26_6hfvYm8^3jz9ki`|krJW`S!4VR/ulqKuoySw');
define('SECURE_AUTH_SALT', 'rT%|*(AEx/10r*#!T?dh"S+(5D5kOttdEnQtYQ8$QbD;+$scO)$r^)@fBvPrmN06');
define('LOGGED_IN_SALT',   'TuMAj%bM*iF`4F5$hLf4TUM@vWZyo49lmz"jykqaOLBT6#*omw*eKS^vRCAW5v3J');
define('NONCE_SALT',       'dnAzEEhwz&_0GA7sG7)qod/bispuP~KxChU&Xm56E`yU#q!Ja+wTR4tLUpj`KxUW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_icia86_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

