<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    protected function _initRoutes()
    {
        $router = Zend_Controller_Front::getInstance()->getRouter();
        $route = new Zend_Controller_Router_Route_Regex(
            'aba/(\d+)',
            array(
                'controller' => 'aba',
                'action'     => 'show'
            ),
            array(
                1 => 'routingnum'
            )
        );

        $router->addRoute('aba', $route);

        $route = new Zend_Controller_Router_Route_Regex(
            'zip/(\d+)',
            array(
                'controller' => 'zip',
                'action'     => 'show'
            ),
            array(
                1 => 'zip'
            )
        );

        $router->addRoute('zip', $route);
    }


}

