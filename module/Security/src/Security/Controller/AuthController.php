<?php

namespace Security\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AuthController extends AbstractActionController
{

    public function LoginAction()
    {
    	$this->layout('layout/login');
        return new ViewModel();
    }


}

