<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
	'doctrine' => array(
		'driver' => array(
			'Security_driver' => array(
				'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
				'cache' => 'array',
				'paths' => array(
					__DIR__ . '/../../module/Main/src/Main/Entity',
				)
			),
			'orm_default' => array(
				'drivers' => array(
					'Main\Entity' => 'Security_driver'
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
	'view_manager' => array(
		'display_not_found_reason' => true,
		'display_exceptions'       => true,
		'doctype'                  => 'HTML5',
		'not_found_template'       => 'error/404',
		'exception_template'       => 'error/index',
		'template_map' => array(
			'layout/layout'           => __DIR__ . '/../../module/Main/view/layout/layout.phtml',
			'error/404'               => __DIR__ . '/../../module/Main/view/error/404.phtml',
			'error/index'             => __DIR__ . '/../../module/Main/view/error/index.phtml',
		),
		'strategies' => array(
			'ViewJsonStrategy',
		),
	)
);
