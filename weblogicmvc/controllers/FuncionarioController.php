<?php
include_once './models/User.php';
require_once 'controllers/Controller.php';

class FuncionarioController extends Controller
{
    public function __construct()
    {
        $this->authorizationFilter(['1', '2']);
    }

    public function index(){
        $users = User::All();
        $this->renderView('funcionario', 'index', ['users'=>$users]);
    }

    public function show($id){
        $user = User::find($id);
        if (is_null($user)){

        } else {
            $this->renderView('funcionario', 'show', ['user'=>$user]);
        }
    }

    public function create(){
        $this->renderView('funcionario', 'create');
    }

    public function store(){
        $user = new User($this-> getHTTPPost());
        if ($user->is_valid()){
            $user->save();
            $this->redirectToRoute('funcionario', 'index');
        } else {
            $this->renderView('funcionario', 'create', ['user'=>$user]);
        }
    }

    public function edit($id){
        $user = User::find($id);
        if(is_null($user)){

        } else {
            $this->renderView('funcionario', 'edit', ['user'=>$user]);
        }
    }

    public function update($id){
        $user = User::find($id);
        $user->update_attributes($this->getHTTPPost());
        if($user->is_valid()){
            $user->save();
            $this->redirectToRoute('funcionario', 'index');
        } else {
            $this->renderView('funcionario', 'edit', ['user'=>$user]);
        }
    }

}