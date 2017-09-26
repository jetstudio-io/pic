<?php

use Phalcon\Loader;

$loader = new Loader();

/**
 * Register Namespaces
 */
$loader->registerNamespaces([
    'Pic\Models' => APP_PATH . '/common/models/',
]);

/**
 * Register module classes
 */
$loader->registerClasses([
    'Pic\Modules\Admin\Module' => APP_PATH . '/modules/admin/Module.php',
    'Pic\Modules\Cli\Module' => APP_PATH . '/modules/cli/Module.php'
]);

$loader->register();
