<?php
    include_once './models/Auth.php';
    require_once 'controllers/Controller.php';

    class AuthController extends Controller{
/*
        public function __construct(){
            session_start();
        }*/

        public function index()
        {
            $auth = new Auth();

            if(!$auth->isLoggedIn())
            {
                if ($auth->getRole() == 1 || $auth->getRole() == 2){
                    $this->renderView('auth', 'index', [''], 'boffice');2
                }
            }
            else
            {
                $this->redirectToRoute('home', 'index');
            }
        }

        public function login(){
            $user = $_POST['user'];
            $password = "password";

            $auth = new Auth();

            if ($auth -> CheckAuth($user, $password) == true) {
                header("Location: index.php?c=home&a=index");
            } else {
                require_once './views/auth/index.php';
            }
        }

        public function logout(){
            $auth = new Auth();
            $auth -> logout();
            require_once './views/auth/index.php';
        }
    }



   /* if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user = $_POST['user'];
        $password = $_POST['pass'];


        if (CheckAuth($user, $password)) {
            header("Location: PlanoController.php");
        } else {
            header("Location: ../views/login.php");
        }

        exit();
    }else{
        require_once '../views/login.php';
    }*/

?>