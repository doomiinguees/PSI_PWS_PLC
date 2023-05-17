<?php
    require_once 'controllers/AuthController.php';
    return [
        'defaultRoute' => ['GET', 'AuthController', 'index'],
        'auth' => [
            'index' => ['GET', 'AuthController', 'index'],
            'login' => ['POST', 'AuthController', 'login'],
            'logout' => ['GET', 'AuthController', 'logout']
        ],
        'book' => [
            'index' => ['GET', 'BookController', 'index'],
            'show' => ['GET', 'BookController', 'show']
        ]
    ];

?>