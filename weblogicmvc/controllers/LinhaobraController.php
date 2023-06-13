<?php
require_once 'Controller.php';
require_once 'models/Linhaobra.php';

class LinhaobraController extends Controller
{
    public function create(){
        $this->renderView('linhaobra', 'create');
    }

    public function store(){
        $linha = new Linhaobra($this-> getHTTPPost());
        $servico_selecionado = Service::find($linha->id_service);
        $linha->valor = $servico_selecionado->precohora * $linha->quantidade;
        $linha->valiva = $servico_selecionado->precohora * $servico_selecionado->iva->valor;


        if ($linha->is_valid()){
            $linha->save();
            $this->redirectToRoute('iva', 'index');
        } else {
            $this->renderView('linhaobra', 'create', ['iva'=>$linha]);
        }
    }
}