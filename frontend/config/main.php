<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);
use yii\web\Request;

$baseUrl = str_replace('/frontend/web', '', (new Request)->getBaseUrl());
return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
     'modules' => [
        'admin' => [
            'basePath' => '@app/modules/admin',
            'class' => 'frontend\modules\admin\user',
        ],
        'gii' => [
            'class' => 'yii\gii\Module',
        ],
    ],
     'defaultRoute' => '/admin/site/index',
    'components' => [
        'request' => [
            'cookieValidationKey' => '[RANDOM KEY HERE]',
            'csrfParam' => '_csrf-frontend',
             'baseUrl' => $baseUrl,
        ],
        'user' => [
             'class' => 'yii\web\User',
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
             'returnUrl' => array('/admin/default/index'),
            'loginUrl' => array('/admin/site/login'),
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
       
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => true,
            'rules' => [
                '/' => 'admin/site/index',
                'login' => 'admin/site/login',
                'logout' => 'admin/site/logout',
                'about' => 'admin/site/about',
                'signup' => 'admin/site/signup', 
                 'contact' => 'admin/site/contact',
                 'request-password-reset' => 'admin/site/request-password-reset',
                 'reset-password' => 'admin/site/reset-password',
                 'faq/bookotp' => 'admin/faq/bookotp',
                 'faq/ajaxbookotp' => 'admin/faq/ajaxbookotp',
                
                
            ],
        ],
        
    ],
    'params' => $params,
];
