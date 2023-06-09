<?php
include_once './models/User.php';
require_once 'controllers/Controller.php';

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->authorizationFilter(['1', '2']);
    }

    public function index(){
        $user = User::find();
        $this->renderView('cliente', 'index', ['user'=>$user]);
    }

    public function show($id){
        $user = User::find($id);
        if (is_null($user)){

        } else {
            $this->renderView('cliente', 'show', ['user'=>$user]);
        }
    }

    public function create(){
        $this->renderView('cliente', 'create');
    }

    public function store(){
        $user = new User($this-> getHTTPPost());
        if ($user->is_valid()){
            $user->save();
            $this->redirectToRoute('cliente', 'index');
        } else {
            $this->renderView('cliente', 'create', ['user'=>$user]);
        }
    }

    public function edit($id){
        $user = User::find($id);
        if(is_null($user)){

        } else {
            $this->renderView('cliente', 'edit', ['user'=>$user]);
        }
    }

    public function update($id){
        $user = User::find($id);
        $user->update_attributes($this->getHTTPPost());
        if($user->is_valid()){
            $user->save();
            $this->redirectToRoute('cliente', 'index');
        } else {
            $this->renderView('cliente', 'edit', ['user'=>$user]);
        }
    }

    //Função delete não faz sentido neste contexto
}