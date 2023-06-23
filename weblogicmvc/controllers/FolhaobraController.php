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

        if ($auth->getRole()!= 3){
            $folhas = Folhaobra::All();
            $this->renderView('folhaobra', 'index', ['folhas'=>$folhas]);
        }else{
            $folhas = Folhaobra::find_all_by_id_cliente($auth->getId());
            $this->renderView('folhaobra', 'index', ['folhas'=>$folhas]);
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
            $this->renderView('folhaobra', 'create', ['cliente'=>$cliente]);
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
        $attr = array('data'=>$dt, 'id_cliente'=>$id, 'id_funcionario'=>$funcionario->id, 'id_empresa'=>1, 'estado'=>'Em Lançamento');
        $folha = new Folhaobra($attr);
      ///  if ($folha->is_valid()){
            $folha->save();
            $this->redirectToRoute('linhaobra', 'create', ['idFolha'=>$folha->id]);
      //  }
    }
}