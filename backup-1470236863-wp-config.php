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
define('DB_NAME', 'giobserv_wordpress7ca');

/** MySQL database username */
define('DB_USER', 'giobserv_word7ca');

/** MySQL database password */
define('DB_PASSWORD', 'pv10bpQnYacb');

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
define('AUTH_KEY', 'ow$geKS/kEbApvG@F!stVBRb%)b$]|foznC{Dbo||h(*(jW=C-waDh{JY%T;O^yb_!{|]R>yTqxB{?G_kO;u;HC)wrMv)MjlIsUcg//MKRBPn]Lg/mvCSpDscmw*|YK^');
define('SECURE_AUTH_KEY', '$=sA]&sZp+bjPM^ne+LXlWZ_?BHD_kPe{rXDx@$G?Nje&HijBy-q/sXiJB_|j|};zJ=oyYYe_O}F@;_zvGgfECNml-d@D$r!qV-<VjKQlm?XmP]?b^Y*=a=ELCd)nV^E');
define('LOGGED_IN_KEY', 'lKCj|kdkDOJR?<+q<qbXD%Rci@}L@ejS^ZyUC$wT!cqd<N()kY[p/--+IH=|U?ky&qjxU<zo!eZsEwl^idwP([PlyiM{<AgKoJA^c$FF$DE)(Bv-|/qGGF?@*FP*)*/G');
define('NONCE_KEY', 'fc/Z]KmgT<hznos*yyP@h&EoySGHRDqmbB/kGQ}TyXMlNwwVi$p(!aEiJ_*l<{c(bzdPmY@H(j*+%xw-fD$/OEptAZ(&>mHRub->PgJad{$FsN|EGABo|xjz<b%HBXqV');
define('AUTH_SALT', 'ac!yj+i%-csQtOS_Za/-[jP%|_Gonxqk)^R|UZ=Y;lx]YMA_!|v)AFEE_k;Mrs]QUbfyl(P?;{M[l)^&ca=]/]K_PfwS>);MKkQWg@x]C-;=jQDwU*]RDi}tmWl&baSN');
define('SECURE_AUTH_SALT', 'FXZH_qj(O$E-WMje{R}sGDNTTIQymm^Ykf[kO*eFyNj/J;HMRz<TlYRya(-RxAHq-fm=MNOv-yHA_bPLqoVv*&UUoz-S!X?@XZcEh-{}@=TgXmP$|i!JRv/;!Uh(S@<!');
define('LOGGED_IN_SALT', 'Up]qJDaZ<ngB;eA&kE}!XkJy+TR%XFE@nGLYGP(ayA(M/_Lg&Af_-I;t!)ITG%?Lmb$|)qki$=[(O|NJ=mK)tgbUiR;v(&O++>dc&gHY;M]ja}L%)pX%&JAL)pkt[uaJ');
define('NONCE_SALT', '_-rzRr_yb%BFw%&PsQK}=|u!GBLlh@lENzfebY;&!]+HD}=e<=UA)+GLwL][!RIhf^bivP;T^i*WKQ&<%VthK/tJteIF)<nlZZJ([nAa%tAp*WVe(|LiEKMjeEbj}>V>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_tbti_';

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
