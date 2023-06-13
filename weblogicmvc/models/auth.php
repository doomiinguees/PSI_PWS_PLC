<?php
    require_once 'User.php';

    class Auth{

        public function __construct()
        {
            if (!isset($_SESSION)){
                session_start();
            }
        }

        public function CheckAuth($username, $password) {

            $user = User::find_by_username_and_password($username, $password);
            if ($user !== null) {
                $_SESSION['id'] = $user->id;
                $_SESSION['username'] = $user->username;
                $_SESSION['role'] = $user->role;
                return true;
            } else {
                return null;
            }
        }
        public function IsLoggedIn() {
            if (isset($_SESSION['user'])) {
                return true;
            } else {
                return false;
            }
        }
        public  function logout() {
            session_destroy();
        }

        public function isLoggedinAs($roles=[]){
            if (isLoggedIn()){
                $role = $this.$this->getRole();

            }
        }

        public function getUsername(){
            return $_SESSION['username'];
        }

        public function getPassword(){
            return $_SESSION['password'];
        }

        public function getRole(){
            return $_SESSION['role'];
        }

        public function getId(){
            return $_SESSION['id'];
        }
    }
?>