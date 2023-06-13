<?php

require_once 'Controller.php';
require_once 'models/Empresa.php';
class EmpresaController extends Controller
{
    public function __construct()
    {
        $this->authorizationFilter(['1', '2']);
    }

    public function index(){
        $empresa = Empresa::First();
        $this->renderView('empresa','index', ['empresa'=>$empresa]);
    }

    public function edit(){
        $id = 1;
        $empresa = Empresa::Find($id);
        if (is_null($empresa)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('empresa', 'edit', ['empresa'=>$empresa]);
            //mostrar a vista edit passando os dados por parâmetro
        }
    }

    public function update($id){
        $empresa = Empresa::find($id);
        $empresa->update_attributes($this->getHTTPPost());
        if ($empresa->is_valid()) {
            $empresa->save();
            $this->redirectToRoute('empresa', 'index');
        } else {
            $this->renderView('empresa', 'edit', ['empresa'=>$empresa]);
        }
    }

}