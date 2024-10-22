<?php

# Ansible managed file, do not edit directly

return array (
  'all' =>
  array (
    'propel' =>
    array (
      'class' => 'sfPropelDatabase',
      'param' =>
      array (
        'encoding' => 'utf8mb4',
        'persistent' => true,
        'pooling' => true,
        'dsn' => 'mysql:dbname=atom;host=127.0.0.1;port=3306',
        'username' => 'atom-user',
        'password' => 'ATOMPASSWORD',
      ),
    ),
  ),
  'dev' =>
  array (
    'propel' =>
    array (
      'param' =>
      array (
        'classname' => 'DebugPDO',
        'debug' =>
        array (
          'realmemoryusage' => true,
          'details' =>
          array (
            'time' =>
            array (
              'enabled' => true,
            ),
            'slow' =>
            array (
              'enabled' => true,
              'threshold' => 0.10000000000000001,
            ),
            'mem' =>
            array (
              'enabled' => true,
            ),
            'mempeak' =>
            array (
              'enabled' => true,
            ),
            'memdelta' =>
            array (
              'enabled' => true,
            ),
          ),
        ),
      ),
    ),
  ),
  'test' =>
  array (
    'propel' =>
    array (
      'param' =>
      array (
        'classname' => 'DebugPDO',
      ),
    ),
  ),
);
