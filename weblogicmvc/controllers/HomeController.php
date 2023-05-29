<?php
    require_once 'controllers/Controller.php';
class HomeController extends Controller
{
    public function index(){
        $this->renderView('home', 'index');
    }

}