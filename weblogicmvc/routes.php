<?php
    require_once 'controllers/AuthController.php';
    require_once 'controllers/HomeController.php';
    require_once 'controllers/EmpresaController.php';

    return [
        'defaultRoute' => ['GET', 'AuthController', 'index'],
        'auth' => [
            'index' => ['GET', 'AuthController', 'index'],
            'login' => ['POST', 'AuthController', 'login'],
            'logout' => ['GET', 'AuthController', 'logout']
        ],
        'home' =>[
            'index' => ['GET', 'HomeController', 'index']
        ],
        'empresa' =>[
            'index' => ['GET', 'EmpresaController', 'index'],
            'edit' => ['GET', 'EmpresaController', 'edit'],
            'update' => ['POST', 'EmpresaController', 'update'],
        ]
    ];

?>