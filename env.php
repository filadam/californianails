<?php
$variables = array(
    /**
     * Environment
     * Supported environments:
     * 1. local - developer's desktop/workstation
     * 2. development - development server acting as a sandbox where unit testing may be performed by the developer
     * 3. production - serves end-users/clients
     */
    'WP_ENV' => 'local',

    /**
     * Cache
     */
    'WP_CACHE' => false,

    /**
     * URLs
     */
    'WP_HOME' => 'http://californiabeauty.pl/',
    'WP_SITEURL' => 'http://californiabeauty.pl/',

    /**
     * MySQL Settings - Local DB
     */
    'DB_NAME' => 'server425620_californiabeauty',
    'DB_USER' => 'server425620_californiabeauty',
    'DB_PASSWORD' => 'Yhb74hxxfilip',
    'DB_HOST' => 'mariadb106.server425620.nazwa.pl',
    'DB_CHARSET' => 'utf8',
    'DB_PREFIX' => 'cn9_',

    /**
     * Authentication Unique Keys and Salts.
     * Generate your keys here: https://api.wordpress.org/secret-key/1.1/salt/
     */
    'AUTH_KEY' => 'C-YUNDyE?fe6s@|Pl@^v6;RX k;V%X7|KB77:y@2*+f%z/9hLT%AX<3.}l:noY18',
    'SECURE_AUTH_KEY' => '5n3|N;:p.5g T: p!,Osmt[[oZMM,+Qu U/_X@9(jK<4jHTy^uU>=?y~>*_UcWFB',
    'LOGGED_IN_KEY' => 'e^:0n`u>]8^hsek&Q,zO#@c!:@Xx1!g&eXjY2V!GS9.d*cLU@Ok%.]{P7xS-$UzL',
    'NONCE_KEY' => 'a:~FA][!|>%ZY9.na+`y,3= BwBL4L)ILUCs{.A$ka[2Oig}r}.fKRlXu8H&(rb ',
    'AUTH_SALT' => 'AYh/+cnn:v u1W6zI-9bZ07/x]ZXz6!v3jwQ!yhs)SAou7q_9bguho+^534eunRy',
    'SECURE_AUTH_SALT' => 'NpyDLYuH$W =b`uuHpV[*~jp1*i7W3GGFtEG`)Y8;C|M&S{CT4xhD4{ib>p->4>n',
    'LOGGED_IN_SALT' => 'Sg<>M-9Re~spU9xi KKP$fvMpwlqDV,FyOBF-4[65wvhGS$Lw_OaKb/_00MK1D.N',
    'NONCE_SALT' => ')FIY-09g!Z+b$B%>gsLlB/;9+^9x<D$YZKWqZy?EY,NeX9A}<3W32Y?-W9=Zs/_a',

    /**
     * WordPress debugging mode
     */
    'WP_DEBUG' => 'false',
    'WP_DEBUG_LOG' => 'false',
    'WP_DEBUG_DISPLAY' => 'false',
);

foreach ($variables as $key => $value) {
    $value = json_encode($value);
    putenv("$key=$value");
}
