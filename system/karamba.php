<?php

require(SYSTEM_PATH . 'registry.php');
require(SYSTEM_PATH . 'request.php');
require(SYSTEM_PATH . 'router.php');
require(SYSTEM_PATH . 'load.php');
require(SYSTEM_PATH . 'baseController.php');
require(APP_PATH . 'config/config.php');

$registry = Registry::getInstance();
// load in the config to the registry
$registry->config = $config;