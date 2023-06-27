<?php
require_once './models/Service.php';
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
        $service = Service::find($id);
        if (is_null($service)){

        } else {
            $this->renderView('service', 'show', ['service'=>$service]);
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
            $this->redirectToRoute('service', 'index');
        } else {
            $this->renderView('service', 'create', ['service'=>$service]);
        }
    }

    public function edit($id){
        $service = Service::find($id);
        $ivas = Iva::All();
        if(is_null($service)){

        } else {
            $this->renderView('service', 'edit', ['service'=>$service, 'ivas'=>$ivas]);
        }
    }

    public function update($id){
        $service = Service::find($id);
        $service->update_attributes($this->getHTTPPost());
        if($service->is_valid()){
            $service->save();
            $this->redirectToRoute('service', 'index');
        } else {
            $this->renderView('service', 'edit', ['service'=>$service]);
        }
    }
}