<?php
    require_once 'controllers/AuthController.php';
    require_once 'controllers/HomeController.php';
    require_once 'controllers/EmpresaController.php';
    require_once 'controllers/ClienteController.php';
    require_once 'controllers/IvaController.php';

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
            'update' => ['POST', 'EmpresaController', 'update']
        ],
        'cliente' =>[
            'index' => ['GET', 'ClienteController', 'index'],
            'show' => ['GET', 'ClienteController', 'show'],
            'create' => ['GET', 'ClienteController', 'update'],
            'store' => ['POST', 'ClienteController', 'store'],
            'edit' => ['GET', 'ClienteController', 'edit'],
            'update' => ['POST', 'ClienteController', 'update']
        ],
        'iva' =>[
            'index' => ['GET', 'IvaController', 'index'],
            'create' => ['GET', 'IvaController', 'update'],
            'store' => ['POST', 'IvaController', 'store'],
            'edit' => ['GET', 'IvaController', 'edit'],
            'update' => ['POST', 'IvaController', 'update'],
            'delete' => ['GET', 'IvaController', 'delete']
        ]
    ];

?>