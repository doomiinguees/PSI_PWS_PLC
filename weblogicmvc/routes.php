<?php
    require_once 'controllers/AuthController.php';
    require_once 'controllers/HomeController.php';
    require_once 'controllers/EmpresaController.php';
    require_once 'controllers/ClienteController.php';
    require_once 'controllers/IvaController.php';
    require_once 'controllers/FuncionarioController.php';
    require_once 'controllers/ServiceController.php';
    require_once 'controllers/FolhaobraController.php';
    require_once 'controllers/LinhaobraController.php';

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
            'create' => ['GET', 'ClienteController', 'create'],
            'store' => ['POST', 'ClienteController', 'store'],
            'edit' => ['GET', 'ClienteController', 'edit'],
            'update' => ['POST', 'ClienteController', 'update'],
            'reporpass' => ['GET', 'ClienteController', 'reporpass']
        ],
        'funcionario' =>[
            'index' => ['GET', 'FuncionarioController', 'index'],
            'show' => ['GET', 'FuncionarioController', 'show'],
            'create' => ['GET', 'FuncionarioController', 'create'],
            'store' => ['POST', 'FuncionarioController', 'store'],
            'edit' => ['GET', 'FuncionarioController', 'edit'],
            'update' => ['POST', 'FuncionarioController', 'update']
        ],
        'iva' =>[
            'index' => ['GET', 'IvaController', 'index'],
            'create' => ['GET', 'IvaController', 'create'],
            'store' => ['POST', 'IvaController', 'store'],
            'edit' => ['GET', 'IvaController', 'edit'],
            'update' => ['POST', 'IvaController', 'update'],
            'mudaestado' => ['GET', 'IvaController', 'mudaestado'],
            'delete' => ['GET', 'IvaController', 'delete']
        ],
        'service' =>[
            'index' => ['GET', 'ServiceController', 'index'],
            'show' => ['GET', 'ServiceController', 'show'],
            'create' => ['GET', 'ServiceController', 'create'],
            'store' => ['POST', 'ServiceController', 'store'],
            'edit' => ['GET', 'ServiceController', 'edit'],
            'update' => ['POST', 'ServiceController', 'update']
        ],
        'folhaobra' =>[
            'index' => ['GET', 'FolhaobraController', 'index'],
            'show' => ['GET', 'FolhaobraController', 'show'],
            'create' => ['GET', 'FolhaobraController', 'create'],
            'store' => ['GET', 'FolhaobraController', 'store'],
            'edit' => ['GET', 'FolhaobraController', 'edit'],
            'update' => ['POST', 'FolhaobraController', 'update'],
            'scliente' => ['GET', 'FolhaobraController', 'scliente']
        ],
        'linhaobra' =>[
            'index' => ['GET', 'LinhaobraController', 'index'],
            'show' => ['GET', 'LinhaobraController', 'show'],
            'create' => ['GET', 'LinhaobraController', 'create'],
            'store' => ['POST', 'LinhaobraController', 'store'],
            'edit' => ['GET', 'LinhaobraController', 'edit'],
            'update' => ['POST', 'LinhaobraController', 'update'],
            'scliente' => ['GET', 'LinhaobraController', 'scliente']
        ]
    ];

?>