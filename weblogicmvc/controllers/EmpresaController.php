<?php

require_once 'Controller.php';
require_once 'models/Empresa.php';
class EmpresaController extends Controller
{
    public function index(){
        $empresa = Empresa::find();
        $this->renderView('empresa','index', ['empresa'=>$empresa]);
    }

    public function edit(){
        $empresa = Empresa::All();
        if (is_null($empresa)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('empresa', 'edit', ['empresa'=>$empresa]);
            //mostrar a vista edit passando os dados por parâmetro
        }
    }

    public function update($id){
        $empresa = Empresa::find($id);
        $empresa ->update_attrbutes($this->grtHTTPPost());

        if ($empresa->is_valid()) {
            $empresa->save();
            $this->redirectToRoute('empresa', 'index');
        } else {
            $this->renderView('empresa', 'edit', ['empresa'=>$empresa]);
        }
    }

}