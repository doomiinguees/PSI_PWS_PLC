<?php

require_once 'controllers/Controller.php';

class FOController extends Controller
{
    public function empresaShow(){
        $empresa = Empresa::First();
        $this->renderView('empresa','index', ['empresa'=>$empresa], 'foffice');
    }

    public function folhaindex(){
        $auth = new Auth();
        $folhas = Folhaobra::find_all_by_id_cliente($auth->getId());

        $this->renderView('folhaobra', 'index', ['folhas'=>$folhas], 'foffice');
    }
}