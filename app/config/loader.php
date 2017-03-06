<?php

use Phalcon\Loader;

$loader = new Loader();

/**
 * Register Namespaces
 */
$loader->registerNamespaces([
    'Pic\Models' => APP_PATH . '/common/models/',
    'Macosxvn' => APP_PATH . '/common/library/Macosxvn',
    'Phalcon' => APP_PATH . '/common/library/Phalcon',
]);

/**
 * Register module classes
 */
$loader->registerClasses([
    'Pic\Modules\Frontend\Module' => APP_PATH . '/modules/frontend/Module.php',
    'Pic\Modules\Users\Module' => APP_PATH . '/modules/users/Module.php',
    'Pic\Modules\Admin\Module' => APP_PATH . '/modules/admin/Module.php',
    'Pic\Modules\Cli\Module' => APP_PATH . '/modules/cli/Module.php'
]);

$loader->register();
