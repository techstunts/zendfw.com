<?php
error_reporting(1);
ini_set('display_errors', 1);

(defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname()) . '/../application'));

(defined('APPLICATION_ENV') || define('APPLICATION_ENV', getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

set_include_path(get_include_path() . ':' . realpath(dirname()) . '/../../ZendFramework-1.11.11-minimal/library');

require_once('Zend/Application.php');

$application = new Zend_Application(APPLICATION_ENV, APPLICATION_PATH . '/configs/application.ini');

$application->bootstrap()->run();
