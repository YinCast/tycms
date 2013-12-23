<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath' => dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name' => 'TyCMS',
    'language' => 'zh_cn',
    'sourceLanguage' => 'zh_cn',
    'timeZone' => 'Asia/Shanghai',
    'charset' => 'utf-8',

	// preloading 'log' component
	'preload' => array('log'),

	// autoloading model and component classes
	'import' => array(
		'application.models.*',
		'application.components.*',
		'application.extensions.*',
		'application.modules.rights.*',
		'application.modules.rights.components.*',
	),

	'modules' => array(
		// uncomment the following to enable the Gii tool
		/*
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'Enter Your Password Here',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		*/
	),

	// application components
	'components' => array(
		'user' => array(
			'class' => 'WebUser', //这个WebUser是继承CwebUser，稍后给出它的代码
			// enable cookie-based authentication
			'stateKeyPrefix' => 'user', //这个是设置前台session的前缀
			'allowAutoLogin' => true, //这里设置允许cookie保存登录信息，以便下次自动登录
			//'guestname' => '游客',
        ),
		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
		'db' => require(dirname(__FILE__).'/database.php'),
		'request' => array(  
			'enableCsrfValidation' => true, //防止post跨站攻击  
			'enableCookieValidation' => true, //防止Cookie攻击  
		),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
		'urlManager' => array(
			'urlFormat' => 'path',
			'showScriptName' => false, //隐藏index.php  
			'urlSuffix' => '.html', //后缀  
			'caseSensitive' => true, //设置对大小写不敏感
			'rules' => array(
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			),
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log' => array(
			'class' => 'CLogRouter',
			'routes' => array(
				array(
					'class' => 'CFileLogRoute',
					'levels' => 'error, warning',
				),
				//开启debug
				/*array(
					//注释了YiiDebugToolbar.php文件186行
					'class' => 'ext.yii-debug-toolbar.YiiDebugToolbarRoute',
					'ipFilters' => array('127.0.0.1','192.168.1.215'),
				),*/
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
		/*'phpMailer' => array(
            'class' => 'application.extensions.yiimailer.CPhpMailer',
            'host' => 'smtp.qq.com',
            'port' => 25,
            'from' => '472559561@qq.com',
            'fromName' => '记忆碎片',
            'user' => '472559561@qq.com',
            'pass' => '123456.',
        ),*/
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params' => require(dirname(__FILE__) . '/params.php'),
);