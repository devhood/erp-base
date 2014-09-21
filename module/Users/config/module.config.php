<?php
namespace Users;

return array(
	'router' => array(
		'routes' => array(
			'users_security_login' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/users/security/login',
					'defaults' => array(
						'__NAMESPACE__' => 'Users\Controller',
						'controller'    => 'Security',
						'action'     => 'login',
					),
				),
			),
			'users_api_login' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/users/api/login',
					'defaults' => array(
						'__NAMESPACE__' => 'Users\Controller',
						'controller'    => 'Api',
							'action'     => 'login',
					),
				),
			),
			'users_api_logout' => array(
				'type' => 'Literal',
				'options' => array(
					'route'    => '/users/api/logout',
					'defaults' => array(
						'__NAMESPACE__' => 'Users\Controller',
						'controller'    => 'Api',
						'action'     => 'logout',
					),
				),
			)
		),
	),
	'doctrine' => array(
		'authentication' => array(
			'orm_default' => array(
				'object_manager' => 'Doctrine\ORM\EntityManager',
				'identity_class' => 'Main\Entity\Tblusers',
				'identity_property' => 'strusername',
				'credential_property' => 'strpassword',
			),
		),
	),
	'controllers' => array(
		'invokables' => array(
			'Users\Controller\Security' => 'Users\Controller\SecurityController',
			'Users\Controller\Api' => 'Users\Controller\ApiController',
		),
	),
	'view_manager' => array(
		'template_path_stack' => array(
			__DIR__ . '/../view',
		),
	)
);