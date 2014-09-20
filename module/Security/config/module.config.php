<?php

return array(
	'doctrine' => array(
			'driver' => array(
					'Security_driver' => array(
							'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
							'cache' => 'array',
							'paths' => array(
									__DIR__ . '/../src/Security/Entity',
							)
					),
					'orm_default' => array(
							'drivers' => array(
									'Security\Entity' => 'Security_driver'
							)
					)
			),
			'configuration' => array(
					'orm_default' => array(
							'metadata_cache' => 'array',
							'query_cache' => 'array',
							'result_cache' => 'array',
							'hydration_cache' => 'array',
							'generate_proxies' => true,
							'proxy_dir' => 'data/DoctrineORMModule/Proxy',
							'proxy_namespace' => 'DoctrineORMModule\Proxy',
					),
			),
			'authentication' => array(
					'orm_default' => array(
							'object_manager' => 'Doctrine\ORM\EntityManager',
							'identity_class' => 'Security\Entity\Tbluser',
							'identity_property' => 'strusername',
							'credential_property' => 'strpassword',
					),
			),
	),
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Security\Controller',
                        'controller'    => 'Auth',
                        'action'     => 'login',
                    ),
                ),
            )
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Security\Controller\Auth' => 'Security\Controller\AuthController'
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'security/index/index' => __DIR__ . '/../view/security/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    )
);
