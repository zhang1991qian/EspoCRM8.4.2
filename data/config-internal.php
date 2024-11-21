<?php
return [
  'database' => [
    'host' => '127.0.0.1',
    'port' => '',
    'charset' => NULL,
    'dbname' => 'espo_crm',
    'user' => 'payssion',
    'password' => '1234',
    'platform' => 'Mysql'
  ],
  'smtpPassword' => '',
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'rotation' => true,
    'maxFileNumber' => 30,
    'printTrace' => false,
    'databaseHandler' => false
  ],
  'restrictedMode' => false,
  'cleanupAppLog' => true,
  'cleanupAppLogPeriod' => '30 days',
  'webSocketMessager' => 'ZeroMQ',
  'clientSecurityHeadersDisabled' => false,
  'clientCspDisabled' => false,
  'clientCspScriptSourceList' => [
    0 => 'https://maps.googleapis.com'
  ],
  'adminUpgradeDisabled' => false,
  'isInstalled' => true,
  'microtimeInternal' => 1732153321.93382,
  'passwordSalt' => '4198a5dcc7c03387',
  'cryptKey' => 'bbb97ee2647405fd59efbf494cafee1d',
  'hashSecretKey' => '4b0dfaf62afbb1991e8d6cc1ee0f8eb9',
  'defaultPermissions' => [
    'user' => 501,
    'group' => 20
  ],
  'actualDatabaseType' => 'mariadb',
  'actualDatabaseVersion' => '11.3.2',
  'instanceId' => 'fa398add-75e2-4e3a-9850-82458ce38665'
];
