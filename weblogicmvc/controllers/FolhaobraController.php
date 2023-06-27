<?php /** @noinspection SpellCheckingInspection */
include_once './models/Folhaobra.php';
include_once './models/User.php';
include_once './models/Empresa.php';
require_once 'controllers/Controller.php';
use Carbon\Carbon;

class FolhaobraController extends Controller
{
    public function __construct()
    {
        $this->authorizationFilter(['1', '2', '3']);
    }

    public function index(){
        $auth = new Auth();

        $estados = array('Em lançamento', 'Emitida', 'Paga');
        if ($auth->getRole() == 1){
            $folhas = Folhaobra::find_all_by_estado($estados);
            $this->renderView('folhaobra', 'index', ['folhas'=>$folhas]);
        }elseif ($auth->getRole() == 2){
            $folhas = Folhaobra::find_all_by_estado_and_id_funcionario($estados, $auth->getId());
            $this->renderView('folhaobra', 'index', ['folhas'=>$folhas]);
        }else{
            $folhas = Folhaobra::find_all_by_estado_and_id_cliente($estados, $auth->getId());
            $this->renderView('folhaobra', 'index', ['folhas'=>$folhas]);
        }
    }

    public function show($id){
        $folha = Folhaobra::find($id);
        $linhas = Linhaobra::find_all_by_id_folhaobra($id); /// kpjsad

        if (is_null($folha)){

        }else{
            $this->renderView('folhaobra', 'show', ['folha'=>$folha]);
        }
    }

    public function scliente(){
        $users = User::find_all_by_role('3');
        $this->renderView('folhaobra', 'cliente', ['users'=>$users]);
    }

    public function create($id){
        if ($id){
            $idc = $_GET['id'];
            $cliente = User::find($idc);
            $empresa = Empresa::first();
            $this->renderView('folhaobra', 'create', ['cliente'=>$cliente, 'empresa'=>$empresa]);
        } else{
            $this->renderView('folhaobra', 'create');
        }
    }

    public function store($id){
        ActiveRecord\Connection::$datetime_format = 'Y-m-d H:i:s';
        $auth = new Auth();
        $nome = $auth->getUsername();
        date_default_timezone_set('Europe/Lisbon');
        $dt = date_create('now');
        $funcionario = User::find_by_username($nome);
        $attr = array('data'=>$dt, 'id_cliente'=>$id, 'id_funcionario'=>$funcionario->id, 'id_empresa'=>1, 'estado'=>'Em Lançamento', 'total'=>0, 'ivatotal'=>0);
        $folha = new Folhaobra($attr);
        if ($folha->is_valid()){
            $folha->save();
            $this->redirectToRoute('linhaobra', 'create', ['id'=>$folha->id]);
        }
    }

    public function edit($id){
        $folha = Folhaobra::find($id);
        $cliente = User::find($folha->id_cliente);
        $empresa = Empresa::find($folha->id_empresa);
        $this->renderView('folhaobra', 'edit', ['folha'=>$folha, 'cliente'=>$cliente, 'empresa'=>$empresa]);
    }

    public function emitir($id){
        $folha = Folhaobra::find($id);
        $folha->estado = 'Emitida';
        $folha->save();
        $this->redirectToRoute('folhaobra', 'index');
    }

    public function Anular($id){
        $folha = Folhaobra::find($id);
        $folha->estado = 'Anulada';
        $folha->save();
        $this->redirectToRoute('folhaobra', 'index');
    }

    public function pesquisa(){
        $termo = $_POST['termo'];

        if (User::find_all_by_nome($termo) != null){
            $users = User::find_all_by_nome($termo);
            $this->renderView('folhaobra', 'cliente', ['users'=>$users]);
        }elseif (User::find_all_by_telefone($termo) != null){
            $users = User::find_all_by_telefone($termo);
            $this->renderView('folhaobra', 'cliente', ['users'=>$users]);
        }elseif (User::find_all_by_nif($termo) != null){
            $users = User::find_all_by_nif($termo);
            $this->renderView('folhaobra', 'cliente', ['users'=>$users]);
        }else{
            $this->redirectToRoute('folhaobra', 'scliente');
        }
    }

    public function pay($id){

        $folha = Folhaobra::find($id);
        $folha->estado = 'Paga';
        $folha->save();

        $this->renderView('folhaobra', 'pay');
    }

    public function print($id){
        $folha = Folhaobra::find($id);
        $this->renderView('folhaobra', 'print', ['folha'=>$folha], 'login');


    }
}