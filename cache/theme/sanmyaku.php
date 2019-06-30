<?php return Vanilla\Addon::__set_state(array(
   'info' => 
  array (
    'name' => 'Sanmyaku',
    'description' => 'A theme featuring mountains using Zurb Foundation 5',
    'version' => '1.0.5',
    'license' => 'MIT',
    'options' => 
    array (
      'styles' => 
      array (
        'light' => '%s',
        'dark' => '%s_dark',
      ),
    ),
    'key' => 'sanmyaku',
    'type' => 'theme',
    'priority' => 1000,
    'authors' => 
    array (
      0 => 
      array (
        'name' => 'Ryan Jordan',
        'email' => 'ryjordan@gmail.com',
        'homepage' => 'https://github.com/codesequence',
      ),
      1 => 
      array (
        'name' => 'Sam Hilson',
      ),
    ),
    'require' => 
    array (
      'vanilla' => '>=2.6',
    ),
    'Issues' => 
    array (
    ),
  ),
   'classes' => 
  array (
    'sanmyakuthemehooks' => 
    array (
      0 => 
      array (
        'namespace' => '',
        'className' => 'SanmyakuThemeHooks',
        'path' => '/class.sanmyakuthemehooks.php',
      ),
    ),
  ),
   'subdir' => '/themes/sanmyaku',
   'translations' => 
  array (
    'en' => 
    array (
      0 => '/locale/en.php',
    ),
  ),
   'special' => 
  array (
    'plugin' => 'SanmyakuThemeHooks',
  ),
));
