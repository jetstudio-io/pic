<?php

/* @var $router Phalcon\Mvc\Router */
$router = $di->getRouter();

foreach ($application->getModules() as $key => $module) {
    if (isset($module['router'])) {
        $namespace = preg_replace('/Module$/', 'Controllers', $module["className"]);
        // if this module has frontend & backend controller
        if (is_array($module['router'])) {
            if (($backend = $module['router']['backend'])) {
                $namespaceBackend = $namespace . '\Backend';
                $route = $module['router']['backend'];
                $router->add('/adminhtml/'.$route.'/:params', [
                    'namespace' => $namespaceBackend,
                    'module' => $key,
                    'controller' => 'index',
                    'action' => 'index',
                    'params' => 1
                ])->setName($route);
                $router->add('/adminhtml/'.$route.'/:controller/:params', [
                    'namespace' => $namespaceBackend,
                    'module' => $key,
                    'controller' => 1,
                    'action' => 'index',
                    'params' => 2
                ]);
                $router->add('/adminhtml/'.$route.'/:controller/:action/:params', [
                    'namespace' => $namespaceBackend,
                    'module' => $key,
                    'controller' => 1,
                    'action' => 2,
                    'params' => 3
                ]);
            }

            //Add route for frontend
            $route = $module['router']['frontend'];
            $namespace .= '\Frontend';
        } else { // only frontent controller
            $route = $module['router'];
        }

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
