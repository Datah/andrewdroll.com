<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'andreyc9_ss_dbnamebde');

/** MySQL database username */
define('DB_USER', 'andreyc9_ss_dbde');

/** MySQL database password */
define('DB_PASSWORD', 'aaLstR71m64P');

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
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '<f=f;Kr*q|Gwj*WwZn{A/?JGUAJt}^@U;T(bCnQLVW<rgEB*iRa+XgEb}Xb$Zr%u@dCgZ(UDGL|RuqjY>LnQhhp&X!Ki+cSzi>Wtx[X>A|gW^{BdO/cPIiAT}M?pSKa&');
define('SECURE_AUTH_KEY', '|uqA^_sPmov@nXdlJpZCiRea%JE-+&ChwwCxkfDOgtm[atWi={nQC@+-hcOd=ysXd!c}cvvecoqY=jKA=nKG!nr<Cs!eeFM]c$gLS/BOG]&)X|I_WJz!bij+;DUKsK_r');
define('LOGGED_IN_KEY', 'RHxB/BYi}@Z&u!H+m<i&_(K&=_PSO_[QVh@[U^|+}%+n/Gh;t>v!Z_>oU*b*o;rhP=oWvEX[B(E[y%Nule/MUKA|vkdpcgC?tP<QiqeU[Qfxz-wH?P<UAUnZCAKT$oXE');
define('NONCE_KEY', '>*lBWIwGdEZj%bnYEW<XV>UjzaUM+kVCTZ}FoTIiBkrx}Zn[vMWr>V;k=Z|r+J;kr}$XjkRPcm;hneY)|%j*Q+hYYnfppMB^*v/I[PXPzYI*}tPFfQW-b}u/xijS&>ZQ');
define('AUTH_SALT', '&fd&y($P]^;f{q^^-tztAUcom%=t{B(%y)!m^K{??Wdn[|BaR;VELtmUvnk$jjJyuA+*G+_uL%|j!_nK|fPT/nK<vA|xYeouZcigOMmOYaWqXI@!?S-Dfs(GZS%m*PuT');
define('SECURE_AUTH_SALT', 'BAOwb?TF_I^axFVvOw@q%rKYz!kB]SCu|eFYFUwV&QL]RjuARsXEiy@i^+Am$<%GY+bwy%d$W$nFNSsfnL^yQ_-+rQV{?zqh@@|UmUggk+A>GSpC>_$l=fn|r{sunivI');
define('LOGGED_IN_SALT', 'pjd$DWCAJUAlv!+=MZg[TRcdOKCL^h>sOs(vEgXzewj/tJXDQ!zFA)LKUOyUgJXgU(vy!^)E&tCEo/?[CeMnSVSCHB{bH}TvZMy)iD+^Mzon-Ke-;keSD&(MsOeX|+vI');
define('NONCE_SALT', 'ZSCYdAx[^;wYKHe<[e}Py{|XXYt=iW(%gu}rYI(II=X;Rf?->CrM+<kjs_-<o@]n|P}LRKusSwI^DaCrJWP=Ie?EOZj)+W+vSU^u{{El(PW+n*P!DMMRCkkC<v-]TF_a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_sldu_';

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
