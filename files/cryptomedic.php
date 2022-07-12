<?php

global $myconfig;

$myconfig['security']['admin'] = '🔑{JH_CRYPTOMEDIC_SECURITY_ADMIN}';

$myconfig['database'] = [
    'host'     => 'cryptomekpmain.mysql.db',
    'schema'   => 'cryptomekpmain',
    'username' => '🔑{JH_CRYPTOMEDIC_DATABASE_USER}',
    'password' => '🔑{JH_CRYPTOMEDIC_DATABASE_PASS}',
    'rootpwd'  => ''
  ];

$myconfig['security']['key']  = '🔑{JH_CRYPTOMEDIC_SECURITY_KEY}';
$myconfig['security']['token'] = '🔑{JH_CRYPTOMEDIC_SECURITY_TOKEN}';
$myconfig['randomString'] = '🔑{JH_CRYPTOMEDIC_SECURITY_RANDOM}';

$myconfig['debug'] = true;
