<?php
// auto-generated by sfSecurityConfigHandler
// date: 2024/10/19 17:39:53
$this->security = array (
  'create' => 
  array (
    'credentials' => 'administrator',
    'is_secure' => true,
  ),
  'delete' => 
  array (
    'credentials' => 'administrator',
    'is_secure' => true,
  ),
  'edit' => 
  array (
    'credentials' => 
    array (
      0 => 
      array (
        0 => 'administrator',
        1 => 'translator',
      ),
    ),
    'is_secure' => true,
  ),
  'index' => 
  array (
    'credentials' => 
    array (
      0 => 
      array (
        0 => 'researcher',
        1 => 'contributor',
        2 => 'editor',
        3 => 'administrator',
        4 => 'translator',
        5 => 'authenticated',
      ),
    ),
    'is_secure' => true,
  ),
  'list' => 
  array (
    'credentials' => 'administrator',
    'is_secure' => true,
  ),
  'passwordedit' => 
  array (
    'credentials' => 
    array (
      0 => 
      array (
        0 => 'researcher',
        1 => 'contributor',
        2 => 'editor',
        3 => 'administrator',
        4 => 'translator',
        5 => 'authenticated',
      ),
    ),
    'is_secure' => true,
  ),
  'update' => 
  array (
    'credentials' => 'administrator',
    'is_secure' => true,
  ),
  'indextermacl' => 
  array (
    'is_secure' => true,
  ),
  'indexrepositoryacl' => 
  array (
    'is_secure' => true,
  ),
  'editactoracl' => 
  array (
    'credentials' => 'administrator',
    'is_secure' => true,
  ),
  'editinformationobjectacl' => 
  array (
    'credentials' => 'administrator',
    'is_secure' => true,
  ),
  'editrepositoryacl' => 
  array (
    'credentials' => 'administrator',
    'is_secure' => true,
  ),
  'edittermacl' => 
  array (
    'credentials' => 'administrator',
    'is_secure' => true,
  ),
  'all' => 
  array (
    'is_secure' => false,
  ),
);
