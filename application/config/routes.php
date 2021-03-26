<?php
#Маршруты и обработчики
return [

	'' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'create' => [
		'controller' => 'main',
		'action' => 'create',
	],
	'edit' => [
		'controller' => 'main',
		'action' => 'edit',
	],

//AdminController
    'admin' => [
        'controller' => 'admin',
        'action' => 'index',
    ],

    'admin/register' => [
        'controller' => 'admin',
        'action' => 'register',
    ],
    'admin/login' => [
        'controller' => 'admin',
        'action' => 'login',
    ],
    'admin/logout' => [
        'controller' => 'admin',
        'action' => 'logout',
    ],
    'admin/creatuser' => [
        'controller' => 'admin',
        'action' => 'creatuser',
    ],
    'admin/edituser/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'edituser',
    ],
    'admin/deletuser/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'deletuser',
    ],
];