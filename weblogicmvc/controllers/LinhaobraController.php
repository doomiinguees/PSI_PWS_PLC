<?php
require_once 'Controller.php';
require_once 'models/Linhaobra.php';

class LinhaobraController extends Controller
{

    public function index(){
        $auth = new Auth();

        if ($auth->getRole() !=3){
            $this->renderView('linhaobra', 'create');
        }else{
            $this->redirectToRoute('home', 'index');
        }
    }

    public function show($id){
        $auth = new Auth();
        $folha = Folhaobra::find($id);
     //   $cliente = User::find($folha->id_cliente);
       // $empresa = Empresa::find($folha->id_empresa);
//        $linhas = Linhaobra::find('all',['id_folhaobra'=>$id]);
        $role = $auth->getRole();

            $this->renderView('linhaobra', 'create', [/*'linhas'=>$linhas,*/ 'folha'=>$folha, /*'cliente'=>$cliente, 'empresa'=>$empresa,*/ 'role'=>$role]);
    }

    public function create($id){

        $folha = Folhaobra::find($id);
        $cliente = User::find($folha->id_cliente);
        $empresa = Empresa::find(1);
        $linhas = Linhaobra::find('all',['id_folhaobra'=>$id]);
        $services = Service::all();


            $this->renderView('linhaobra', 'create', ['linhas'=>$linhas, 'folha'=>$folha, 'cliente'=>$cliente, 'empresa'=>$empresa, 'services'=>$services]);

    }

    public function store($id){
        $linha = new Linhaobra($this-> getHTTPPost());
        $servico_selecionado = Service::find($linha->id_service);
        $linha->quantidade = $_POST['quantidade'];
        $linha->valor = $servico_selecionado->precohora * $linha->quantidade;
        $linha->valiva = $linha->valor * $servico_selecionado->iva->valor / 100;
        $linha->id_folhaobra = $id;
        $this->fazcalculos($linha);

        if ($linha->is_valid()){
            $linha->save();
            $this->redirectToRoute('linhaobra', 'create', ['id'=>$linha->id_folhaobra]);
        } else {
            $this->renderView('linhaobra', 'create', ['linha'=>$linha]);
        }
    }

    public function edit($id){
        $linha = Linhaobra::find($id);
        $folha = Folhaobra::find($linha->id_folhaobra);
        $services = Service::all();

        $this->renderView('linhaobra', 'edit', ['linha'=>$linha, 'folha'=>$folha, 'services'=>$services]);
    }

    public function update($id){
        $linha = Linhaobra::find($id);
        $linha->update_attributes($this->getHTTPPost());
        $servico_selecionado = Service::find($linha->id_service);
        $linha->valor = $servico_selecionado->precohora * $linha->quantidade;
        $linha->valiva = $linha->valor * $servico_selecionado->iva->valor / 100;
        $this->fazcalculos($linha);

        if ($linha->is_valid()){
            $linha->save();
            $this->redirectToRoute('linhaobra', 'create', ['id'=>$linha->id_folhaobra]);
        }else{
            $this->renderView('cliente', 'edit', ['linha'=>$linha]);
        }
    }

    public function delete($id){
        $linha = Linhaobra::find($id);
        $linha->delete();
        $this->redirectToRoute('linhaobra', 'create', ['id'=>$linha->id_folhaobra]);
    }

    public function fazcalculos($linha){

        $folha = Folhaobra::find($linha->id_folhaobra);
        $folha->total = $folha->total + $linha->valor;
        $folha->ivatotal = $folha->ivatotal + $linha->valiva;
        $folha->save();

    }
}