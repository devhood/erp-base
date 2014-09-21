<?php

namespace Users\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class SecurityController extends AbstractActionController
{


    public function loginAction()
    {
    	$this->layout('layout/login');
        return new ViewModel();
    }
}

