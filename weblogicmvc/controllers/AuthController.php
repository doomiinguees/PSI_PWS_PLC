<?php
    include_once './models/Auth.php';
    require_once 'controllers/Controller.php';

    class AuthController extends Controller{

        public function __construct(){
            session_start();
        }

        public function index()
        {
            $auth = new Auth();

            if(!$auth->isLoggedIn())
            {
                $this->renderView('auth', 'index', [], 'login');
            }
            else
            {
                $this->redirectToRoute('home', 'index');
            }
        }

        public function login(){
            $user = $_POST['user'];
            $password = $_POST['password'];

            $auth = new Auth();

            if ($auth->CheckAuth($user, $password)) {
                $auth = new Auth();

                if(!$auth->isLoggedIn())
                {
                    if (!$auth->getRole() == 3){
                        $this->renderView('auth', 'index', [], 'login');
                    }else{
                        $this->renderView('auth', 'index', [], 'login');
                    }
                }
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