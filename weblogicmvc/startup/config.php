<?php
    require './vendor/autoload.php';

    define('APP_NAME', 'HD Services');
  define('INVALID_ACCESS_ROUTE', 'c=auth&a=index');
setlocale(LC_TIME, 'pt_BR');

    ActiveRecord\Config::initialize(function($cfg)
    {

        $cfg->set_model_directory('./models');
        $cfg->set_connections(
            array(
                'development' => 'mysql://root@localhost/hdservices',
            )
        );
    });

?>