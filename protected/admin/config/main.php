<?php
$backend = dirname(dirname(__FILE__));
$frontend = dirname($backend);

Yii::setPathOfAlias('backend', $backend);
$frontendArray = require_once($frontend.'/config/main.php');

unset( $frontendArray['components']['urlManager'] );
unset( $frontendArray['modules'] );
unset( $frontendArray['import'] );

$backendArray = array(
	'name'=>'WEB平台管理系统',
	'basePath'=>$frontend,
	'theme' => NULL,
	'controllerPath' => $backend.'/controllers',
	'viewPath' => $backend.'/views',
	'modulePath' => $backend.'/modules',
	//'runtimePath'=>$backend.'/runtime',

	 // path aliases
    'aliases' => array(
        'bootstrap' => realpath(__DIR__ . '/../extensions/bootstrap'), // change this if necessary
    ),

	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.extensions.*',
		'backend.models.*',
		'backend.components.*',
		'backend.extensions.*',
		'backend.modules.rights.*',
		'backend.modules.rights.components.*',
		'bootstrap.helpers.TbHtml',
	),

	'modules' => array(
		'rights' => array(
			'install' => FALSE,
			'enableBizRule' => FALSE,
			'enableBizRuleData' => FALSE,
			'appLayout' => 'backend.views.layouts.main',
			'userClass' => 'Administrator',
		),
		'gii' => array(
			'class'=>'system.gii.GiiModule',
            'generatorPaths' => array('bootstrap.gii'),
            'password'=>'123456',
            'ipFilters'=>array('127.0.0.1','::1'),
        ),
	),

    'components' => array(
    	'format' => array(
    		'class' => 'Formatter',
    	),
    	'bootstrap' => array(
            'class' => 'bootstrap.components.TbApi',   
        ),
		/*'authManager' => array(
			'class' => 'RDbAuthManager',
			'itemTable' => '{{admin_authitem}}',
			'itemChildTable' => '{{admin_authitemchild}}',
			'assignmentTable' => '{{admin_authassignment}}',
			'rightsTable' => '{{admin_rights}}',
		),*/
        'user' => array(
            'class' => 'AdminWebUser',
            'allowAutoLogin' => FLASE,
            'stateKeyPrefix' => 'admin', //session名前缀
            'loginUrl' => array('admin/login'),
            //'guestName' => '游客',
        ),
    ),
);

if (isset($frontendArray['components']['user'])) unset($frontendArray['components']['user']); //unset loginUrl
return CMap::mergeArray($frontendArray, $backendArray);