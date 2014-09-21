<?php
namespace Main;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module
{
	public function onBootstrap(MvcEvent $e)
	{
		$eventManager        = $e->getApplication()->getEventManager();
		$eventManager->attach(
	        'route',
		        function($e) {
		            $app = $e->getApplication();
		            $routeMatch = $e->getRouteMatch();
		            $auth = $app->getServiceManager()->get('doctrine.authenticationservice.orm_default');
		            $user = $auth->getIdentity();
		            $whiteList = array("users_security_login","users_api_login");
		            if (!$user && !in_array($routeMatch->getMatchedRouteName(),$whiteList)) {
		                $response = $e->getResponse();
		                if(!$response->getContent()){
		                	$response->getHeaders()->addHeaderLine(
			                    'Location',
			                    $e->getRouter()->assemble(
			                            array(),
			                            array('name' => 'users_security_login')
			                    )
			                );
			                $response->setStatusCode(302);
			                return $response;
		                }
		            }
		        },
		        -100
        );
		$moduleRouteListener = new ModuleRouteListener();
		$moduleRouteListener->attach($eventManager);
	}
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}
