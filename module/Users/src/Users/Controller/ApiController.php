<?php

namespace Users\Controller;

use Zend\Mvc\Controller\AbstractRestfulController,
    Zend\View\Model\JsonModel;

class ApiController extends AbstractRestfulController
{
	protected $em = null;
	protected $as = null;
	
	public function setEntityManager(\Doctrine\ORM\EntityManager $em)
	{
		$this->em = $em;
	}
	
	public function getEntityManager()
	{
		if (null === $this->em) {
			$this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
		}
		return $this->em;
	}
    public function loginAction()
    {
    	$data = $this->getRequest()->getPost();
    	if($data['username'] && $data['password']){
	    	$authService = $this->getServiceLocator()->get('Zend\Authentication\AuthenticationService');
	    	$adapter = $authService->getAdapter();
	    	$adapter->setIdentityValue($data['username']);
	    	$adapter->setCredentialValue($data['password']);
	    	$authResult = $authService->authenticate();
	    	if($authResult->isValid()){
	    		return new JsonModel(array(
	    			"result" => "success"
	    		));
	    	}
	    	else{
	    		$this->response->setStatusCode(401);
	    		return new JsonModel(array(
	    			"code" => $authResult->getCode(),
	    			"message" => $authResult->getMessages()
	    		));
	    	}
    	}
    	else{
    		$this->response->setStatusCode(401);
    		return new JsonModel(array(
    				"code" => -100,
    				"message" => "Parameters not set"
    		));
    	}
    }
    public function logoutAction(){
    	$auth = $this->getServiceLocator()->get('doctrine.authenticationservice.orm_default');
    	$auth->clearIdentity();
    	return new JsonModel(array(
    			"result" => "success"
    	));
    }


}

