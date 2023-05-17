<?php
    session_start();

    class Auth{

        public function CheckAuth($user, $password) {

            $valid_user = "admin";
            $valid_password = "12345";

            if ($user === $valid_user && $password === $valid_password) {
                $_SESSION['user'] = $user;
                return true;
            } else {
                return false;
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
    }

   /* //CheckAuth
    function CheckAuth($user, $password) {

        $valid_username = "admin";
        $valid_password = "12345";

        if ($user === $valid_username && $password === $valid_password) {
            $_SESSION['user'] = $user;
            return true;
        } else {
            return false;
        }
    }



    function Logout() {
        session_destroy();
    }*/
?>