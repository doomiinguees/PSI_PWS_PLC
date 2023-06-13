<?php
include_once './models/Service.php';
require_once 'controllers/Controller.php';

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->authorizationFilter(['1', '2']);
    }

    public function index(){
        $services = Service::All();
        $this->renderView('service', 'index', ['services'=>$services]);
    }

    public function show($id){
        $user = User::find($id);
        if (is_null($user)){

        } else {
            $this->renderView('service', 'show', ['user'=>$user]);
        }
    }

    public function create(){
        $ivas = Iva::All();
        $this->renderView('service', 'create', ['ivas'=>$ivas]);
    }

    public function store(){
        $service = new Service($this-> getHTTPPost());
        if ($service->is_valid()){
            $service->save();
            $this->redirectToRoute('iva', 'index');
        } else {
            $this->renderView('iva', 'create', ['service'=>$service]);
        }
    }
}