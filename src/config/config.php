<?php

$configs = [];

if (!empty(getenv('COCKPIT_SESSION_NAME'))){
  $configs['session.name'] = getenv('COCKPIT_SESSION_NAME');
}

if (!empty(getenv('COCKPIT_SALT'))){
  $configs['sec-key'] = getenv('COCKPIT_SALT');
}

if (!empty(getenv('COCKPIT_I18N'))){
  $configs['i18n'] = getenv('COCKPIT_I18N');
}

if (!empty(getenv('COCKPIT_DATABASE_SERVER'))){
  $configs['database'] = [
    "server"  => getenv('COCKPIT_DATABASE_SERVER'),
    "options" => ["db" => getenv('COCKPIT_DATABASE_NAME')]
  ];
}



$configs['groups'] = [
    'author' => [
        '$admin' => false,
        'collections' => [
            'manage' => true
        ],
        'cockpit' => [
            'backend' => true,
            'finder' => true
        ],
        '$vars' => [
            'finder.path' => '/storage/upload'
        ]
    ]
];

$configs['languages'] = [
    'tr' => 'Turkish',
    'en' => 'English'
];

$configs['cors'] = [
  'allowedHeaders' => 'X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding, Cockpit-Token',
  'allowedMethods' => 'PUT, POST, GET, OPTIONS, DELETE',
  'allowedOrigins' => '*',
  'maxAge' => '1000',
  'allowCredentials' => 'true',
  'exposedHeaders' => 'true',
];

if (!empty(getenv('COCKPIT_MAILER_FROM'))){
  $configs['mailer'] = [
      "from"      => getenv('COCKPIT_MAILER_FROM'),
      "transport" => getenv('COCKPIT_MAILER_TRANSPORT'),
      "host"      => getenv('COCKPIT_MAILER_HOST'),
      "user"      => getenv('COCKPIT_MAILER_USER'),
      "password"  => getenv('COCKPIT_MAILER_PASSWORD'),
      "port"      => getenv('COCKPIT_MAILER_PORT'),
      "auth"      => getenv('COCKPIT_MAILER_AUTH'),
      "encryption"=> getenv('COCKPIT_MAILER_ENCRYPTION')
  ];
}

return $configs;
