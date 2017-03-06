<?php

namespace Pic\Modules\Admin\Controllers;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        /* @var $session \Macosxvn\Session\Adapter\Redis */
        $session = $this->getDI()->get('session');
        $session->set('test', 'hello world');
        $this->view->setVar("sessID", $session->getId());
    }

    public function testAction() {
        /* @var $session \Macosxvn\Session\Adapter\Redis */
        $session = $this->getDI()->get('session');
        $this->view->setVar("sessID", $session->get('test'));
    }
}

