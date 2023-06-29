<?php
    require_once 'controllers/Controller.php';
class HomeController extends Controller
{
    public function index(){
        $auth = new Auth();

        $nservices = Service::count();
        $nusers = User::count();
        $nfolhas = Folhaobra::count();

        if(!$auth->isLoggedIn())
        {
            if ($auth->getRole() == 3){
                $this->renderView('home', 'index', [], 'foffice');
            }else{
                $this->renderView('home', 'index',  ['nservices'=>$nservices, 'nusers'=>$nusers, 'nfolhas'=>$nfolhas], 'boffice');
            }
        }
    }

}