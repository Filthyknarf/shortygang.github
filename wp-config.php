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
define( 'DB_NAME', 'shortygang_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'A-5W(/r+n?H{t}QG$PVq9?=cf{?iO?La aXoO4Pm#.u<Dkat~%blEdosy}w!YKdp' );
define( 'SECURE_AUTH_KEY',  'iq/zqg&HH~b-u1&;Tpw_wStzvx!`a}W:zg=A&kfLgA!XYoRlT0(7[N:$LhA2j(Ov' );
define( 'LOGGED_IN_KEY',    'IySG!*b4?gjf-3XmQW%Et>nd9M?Y?CGbk03bkVB|]4V[I&5K,=;ASkN0wfJFR8~U' );
define( 'NONCE_KEY',        'U5*G3_%V5xFQ=0U@^qojK[L:]5>-7hgugxI{>yIN[1P{Pzrgn@)oFeBwsWj6f)53' );
define( 'AUTH_SALT',        '_w=M!nBOFv4uEotcis]w3ejJm&_bBxcU];bTWD>h1719;R~iAHBzptC:OAW}Z?ER' );
define( 'SECURE_AUTH_SALT', 'GocZQTpw=js|V6]F{P6IyZ|{tDr6dTDr$[&]KGVoL3U |b7<)c>C#;a9KhGXQ`6l' );
define( 'LOGGED_IN_SALT',   ' ,u?Od:%~HQ*gP?dJtX:wSEp`Dc&Qm|g6FNkRMsgg#)n@&J#|_8X3xUPaQ5WkFr9' );
define( 'NONCE_SALT',       'ud`Fx_>gysW)~SNC7jpnm9}6wKX/*Tny(gA/T`aLP3X<|!50/bud>!6qW#oHZN_Q' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
