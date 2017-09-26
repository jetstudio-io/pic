<?php

/* @var $router Phalcon\Mvc\Router */
$router = $di->getRouter();

foreach ($application->getModules() as $key => $module) {
    if (isset($module['router'])) {
        $namespace = preg_replace('/Module$/', 'Controllers', $module["className"]);
        $route = $module['router'];
        $router->add('/'.$route.'/:params', [
            'namespace' => $namespace,
            'module' => $key,
            'controller' => 'index',
            'action' => 'index',
            'params' => 1
        ])->setName($route);
        $router->add('/'.$route.'/:controller/:params', [
            'namespace' => $namespace,
            'module' => $key,
            'controller' => 1,
            'action' => 'index',
            'params' => 2
        ]);
        $router->add('/'.$route.'/:controller/:action/:params', [
            'namespace' => $namespace,
            'module' => $key,
            'controller' => 1,
            'action' => 2,
            'params' => 3
        ]);
    }
}
