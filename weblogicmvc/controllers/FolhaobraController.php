<?php
include_once './models/Folhaobra.php';
require_once 'controllers/Controller.php';

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
            $folhas = Folhaobra::find_all_by_id($auth->getId());
            $this->renderView('folhaobra', 'index', ['folhas'=>$folhas]);
        }
    }
}