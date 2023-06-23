<?php
require_once 'Controller.php';
require_once 'models/Linhaobra.php';

class LinhaobraController extends Controller
{

    public function index(){
        $auth = new Auth();

        if ($auth->role !=3){

            $this->makeView('linhaobra', 'create');
        }else{
            $this->redirectToRoute('home', 'index');
        }
    }

    public function show($idFolha){
        $auth = new Auth();
        $folha = Folhaobra::find($idFolha);
        $cliente = User::find($folha->id_cliente);
        $empresa = Empresa::find($folha->empresa_id);
        $linhas = Linhaobra::find('all',['id_folhaobra'=>$idFolha]);
        $role = $auth->getRole();

            $this->renderView('linhaobra', 'create', ['linhas'=>$linhas, 'folha'=>$folha, 'cliente'=>$cliente, 'empresa'=>$empresa, 'role'=>$role]);
    }

    public function create($idFolha){

        $folha = Folhaobra::find($idFolha);
        $cliente = User::find($folha->id_cliente);
        $empresa = Empresa::find(1);
        $linhas = Linhaobra::find('all',['id_folhaobra'=>$idFolha]);
        $services = Service::all();


            $this->renderView('linhaobra', 'create', ['linhas'=>$linhas, 'folha'=>$folha, 'cliente'=>$cliente, 'empresa'=>$empresa, 'services'=>$services]);

            /*$idService = $_GET['idService'];
            $service = Service::find($idService);
            $this->renderView('linhaobra', 'create', ['linhas'=>$linhas, 'folha'=>$folha, 'cliente'=>$cliente, 'empresa'=>$empresa, 'service'=>$service]);*/
    }

    public function store($id){
        $linha = new Linhaobra($this-> getHTTPPost());
        $servico_selecionado = Service::find($linha->id_service);
        $linha->quantidade = $_POST['quantidade'];
        $linha->valor = $servico_selecionado->precohora * $linha->quantidade;
        var_dump($linha->valor);
        $linha->valiva = $linha->valor * $servico_selecionado->iva->valor / 100;
        $linha->id_folhaobra = $id;

        if ($linha->is_valid()){
            $linha->save();
            $this->redirectToRoute('folhaobra', 'create', ['idFolha'=>$linha->id_folhaobra]);
        } else {
            $this->renderView('linhaobra', 'create', ['iva'=>$linha]);
        }
    }
}