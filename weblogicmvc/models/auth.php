<?php
    require_once 'User.php';
    session_start();


    class Auth{

        public function CheckAuth($username, $password) {

            $user = User::find_by_username_and_password($username, $password);
            if ($user !== null) {
                $_SESSION['username'] = $user->username;
                $_SESSION['password'] = $user->password;
                $_SESSION['role'] = $user->role;
            } else {

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

        public function getUsername(){
            return $_SESSION['username'];
        }

        public function getPassword(){
            return $_SESSION['password'];
        }

        public function getRole(){
            return $_SESSION['role'];
        }
    }
?>