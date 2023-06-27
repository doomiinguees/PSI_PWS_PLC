<?php
require './mail/mail.send.php';
include_once './models/User.php';
require_once 'controllers/Controller.php';

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->authorizationFilter(['1', '2']);
    }

    public function index(){
        $users = User::find_all_by_role('3');
        $this->renderView('cliente', 'index', ['users'=>$users]);
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
        $user->role = 3;

        $user->password = $this->gerarpass();

        if ($user->is_valid()){
            $user->save();
            sendPassword($user->email, $user->nome, $user->password, $user->username);

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

    public function reporpass($id){
        $user = User::find($id);
        $user->password = $this->gerarpass();
        $user->save();
        sendPassword($user->email, $user->nome, $user->password, $user->username);
        $this->redirectToRoute('cliente', 'index');
    }
}