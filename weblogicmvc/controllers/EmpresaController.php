<?php

require_once 'Controller.php';
require_once 'models/Empresa.php';
class EmpresaController
{
    public function index(){
        $empresa = Empresa::find();
        $this->renderView('empresa','index', ['book'=>$book]);
    }

}