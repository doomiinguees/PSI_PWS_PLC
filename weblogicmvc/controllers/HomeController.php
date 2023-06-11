<?php
    require_once 'controllers/Controller.php';
class HomeController extends Controller
{
    public function index(){
        $auth = new Auth();

        if(!$auth->isLoggedIn())
        {
            if ($auth->getRole() == 3){
                $this->renderView('home', 'index', [], 'foffice');
            }else{
                $this->renderView('home', 'index', [], 'boffice');
            }
        }
    }

}