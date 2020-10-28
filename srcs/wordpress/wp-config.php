<?php

define( 'DB_NAME', 'nofloren' );

define( 'DB_USER', 'nofloren' );

define( 'DB_PASSWORD', '12345' );

define( 'DB_HOST', 'mysql:3306' );
define( 'WP_HOME', 'http://192.168.99.205:5050/' );
define( 'WP_SITEURL', 'http://192.168.99.205:5050/' );

define( 'DB_CHARSET', 'utf8' );

define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

define('AUTH_KEY',         '>/-CuvhaJ-9(3;F,fSfR-w3zw@5K`xV5K-tRocLrtk.,e^s~x+-1-e#P]Rie7whW');
define('SECURE_AUTH_KEY',  'l1h4kb-g2.B-]=r`0?PY-A!kB+h<1xB-8;<~.BTZ |f 6)d 3G1H2pF|.3fr7*rD');
define('LOGGED_IN_KEY',    'k,$wTK3{nd5j-4zAanh(0qyd:=)]|dJKTc}:;)&~ODOJ`+w@yae$u(lZP&TDTX z');
define('NONCE_KEY',        'kN4fo`V<.M5G*g ]{-h`4TO:YZZZ2n,q@ywIlJFWd(|dh7Asgt28W>8+hC[7mdmG');
define('AUTH_SALT',        '[}F1CU{H41f:V<^Ni*mXbbwYx(k,XO0R6sJn!+j?g+:16S!n9=<ZH]c{IMi]KPPA');
define('SECURE_AUTH_SALT', 'jG^|UJ|jU1)f=w4@^}B;a0~U#6b:8`{Ti/CR<.+Bso6/U%jWlwJZR[->1qkol+b=');
define('LOGGED_IN_SALT',   'PwC-m.{?-2o{?im?`:Xfg,.Cn(!?r-_0AHrw>dcW a]L]|AEu{%x|}0[T/(ya;@W');
define('NONCE_SALT',       'x|KrsRF/+^|{}{#/OQ2,`o*/e0~6+T+EXoZ?cXV9s%nm{sXX?t?@c/-SqH&lBgF3');

$table_prefix = 'wp_';

define( 'WP_DEBUG', true );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';