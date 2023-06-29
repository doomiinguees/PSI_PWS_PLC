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
        $this->renderView('empresa','index', ['empresa'=>$empresa], 'boffice');
    }

    public function edit(){
        $id = 1;
        $auth = new Auth();
        $empresa = Empresa::Find($id);
        if (is_null($empresa)) {
            //TODO redirect to standard error page
        } else {
            if ($auth->getRole() != 3){
                $this->renderView('empresa', 'edit', ['empresa'=>$empresa]);
            }else{

                $this->renderView('empresa', 'index', ['empresa'=>$empresa]);
            }
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