<?php

require_once './models/Auth.php';

class Controller
{
    protected function redirectToRoute($controllerPrefix, $action, $params = [])
    {
        $url = 'index.php?c=' . urlencode($controllerPrefix) . '&a=' . urlencode($action);
        foreach ($params as $key => $value) {
            $url .= '&' . urlencode($key) . '=' . urlencode($value);
        }
        // Redirect to the URL
        header('Location: ' . $url);
    }

    protected function renderView($controllerPrefix, $viewName, $data = [], $layout = 'boffice')
    {
        extract($data);
        $auth = new auth();
        $viewPath = 'views/' . $controllerPrefix . '/' . $viewName . '.php';
        $layoutPath = 'views/layout/' . $layout . '.php';
        require_once($layoutPath);
    }

    protected function authenticationFilter(){
        $auth = new Auth();

        if(!$auth->IsLoggedIn()){
            header('index.php?'.INVALID_ACCESS_ROUTE);
        }
    }

    protected function authorizationFilter($roles){
        $auth = new Auth();

        if(!$auth->IsLoggedIn($roles)){
            header('index.php?'.INVALID_ACCESS_ROUTE);
        }
    }

    // Obter o valor para uma determinada chave (parâmetro POST)
    protected function getHTTPPostParam($key)
    {
        return $_POST[$key] ?? '';
    }

    // Obter o valor para uma determinada chave (parâmetro GET)
    protected function getHTTPGetParam($key)
    {
        return $_GET[$key] ?? '';
    }

    // Obter o vetor POST
    protected function getHTTPPost()
    {
        return $_POST;
    }

    // Verificar se o parâmetro existe através de uma determinada chave [POST]
    protected function hasHTTPPostParam($key)
    {
        return isset($_POST[$key]);
    }

    // Verificar se o parâmetro existe através de uma determinada chave [GET]
    protected function hasHTTPGetParam($key)
    {
        return isset($_GET[$key]);
    }

    public function gerarpass(){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $pass = '';

        for ($i = 0; $i < 12; $i++) {
            $randomIndex = rand(0, strlen($characters) - 1);
            $pass .= $characters[$randomIndex];
        }

        return $pass;
    }
}