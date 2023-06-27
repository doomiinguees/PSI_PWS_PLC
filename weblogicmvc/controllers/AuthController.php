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
                $user = User::All(array('group' => 'role', 'role' => 'role = 3'));
                if ($auth->getRole() == 3){
                    $this->renderView('home', 'index');
                }else{
                    $this->renderView('home', 'index');
                }
            }
        }

        public function login(){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $auth = new Auth();

            if ($auth->CheckAuth($username, $password)) {
                $auth = new Auth();

                if(!$auth->isLoggedIn())
                {
                    if ($auth->getRole() == 3){
                        $this->redirectToRoute('foffice', 'empresaShow');
                    }else{
                        $this->redirectToRoute('home', 'index');
                    }
                }
            } else {
                $this->renderView('auth', 'index', [], 'login');
            }
        }

        public function logout(){
            $auth = new Auth();
            $auth -> logout();
            $this->redirectToRoute('auth', 'index');

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