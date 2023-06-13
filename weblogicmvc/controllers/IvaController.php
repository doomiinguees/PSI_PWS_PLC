<?php

require_once 'controllers/Controller.php';
require_once 'models/Iva.php';
class IvaController extends Controller
{
    public function __construct()
    {
        $this->authorizationFilter(['1', '2']);
    }

    public function index(){
        $ivas = Iva::All();
        $this->renderView('iva', 'index', ['ivas'=>$ivas], 'boffice');
    }

   /* public function show($id){
        $iva = Iva::find($id);
        if (is_null($iva)){

        } else {
            $this->renderView('iva', 'show', ['iva'=>$iva]);
        }
    }*/

    public function create(){
        $this->renderView('iva', 'create');
    }

    public function store(){
        $iva = new Iva($this-> getHTTPPost());
        if ($iva->is_valid()){
            $iva->save();
            $this->redirectToRoute('iva', 'index');
        } else {
            $this->renderView('iva', 'create', ['iva'=>$iva]);
        }
    }

    public function edit($id){
        $iva = Iva::find($id);
        if (is_null($iva)){

        } else {
            $this->renderView('iva', 'edit', ['iva'=>$iva]);
        }
    }

    public function update($id){
        $iva = Iva::find($id);
        $user->update_attributes($this->getHTTPPost());
        if($user->is_valid()){
            $user->save();
            $this->redirectToRoute('iva', 'index');
        } else {
            $this->renderView('iva', 'edit', ['iva'=>$iva]);
        }
    }

    public function mudaestado($id){
        $iva = Iva::find($id);
        if ($iva) {
            $estadoAtual = $iva->estado;

            if ($estadoAtual == 'Ativo') {
                $iva->estado = 'Inativo';
            } elseif ($estadoAtual == 'Inativo') {
                $iva->estado = 'Ativo';
            }
            $iva->save();
            $this->redirectToRoute('iva', 'index');
        }
    }

    public function delete($id){
        $iva = Iva::find($id);
        $iva->delete();
        $this->redirectToRoute('iva', 'index');
    }
}