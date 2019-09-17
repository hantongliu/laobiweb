<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'giobserv_5cf');

/** MySQL database username */
define('DB_USER', 'giobserv_5cf');

/** MySQL database password */
define('DB_PASSWORD', 'FE34ADBvm2j8k6f0u7i9e1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'w_;{TVg8{NWF]%+5d#kT_Tn<b[Qs%<u^v^`ZbO_!-0BqE~CYkR+Gx}E-]o}8,o+D');
define('SECURE_AUTH_KEY',  '2~2Sk2J1&sEn}bOG.hS~o-*:=v_`_>Bz_ZHW7_oR{ ,~ktG5T:ys{9GFm9]NHVif');
define('LOGGED_IN_KEY',    'MT7hioh|L,R[V4Mf.9BH|aY%w,]((m~geAZ V`zKXk9#Y*_USD3TwNmOz11!+|jm');
define('NONCE_KEY',        'V7.%EYic6=`zK>cd,dHdZeCFQUt3aDH/aU}]]^J5w7Tx,t+!-z.G9%W@}*5SHE.*');
define('AUTH_SALT',        '88TU &N#+9%Nb[p1&N[,n}+ZSWda,U^AU.o<$Jrk3,I)atBmrR=M=b#!}aK|9]-u');
define('SECURE_AUTH_SALT', 'MmTaB&^;_hdM|0n&I&-#G^)~HB[16VF| YEaj+>[t)]RT>U$@23<Yg_bD>b+)m57');
define('LOGGED_IN_SALT',   'tj7TqrpM%(jY>3} V*Z:+C|yOM/!&(K68zEHf ean|aFUbJ+D[q+_H~3PMnS5|/ ');
define('NONCE_SALT',       'cjpUuSKP>O<hjilU%?C[o(kE4<p9CB?D<J?`RI58`LLa<c0R#7C;oJ~6mvx1o Qg');


$table_prefix = '5cf_';





/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
