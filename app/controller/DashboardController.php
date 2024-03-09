<?php

class DashboardController
{
    public function index()
    {
        
        $loader = new \Twig\Loader\FilesystemLoader('app/view');
        $twig = new \Twig\Environment($loader, [
            'autoreload' => true,
        ]);
        $template = $twig->load('dashboard.html');

        $parameters = array();
        $parameters['user_name'] = $_SESSION['usr']['user_name'];
        return $template->render($parameters);
    }
    public function logout(){
        unset($_SESSION["user"]);
        session_destroy();
        header("Location: http://localhost/projetos/login/login");
    }
}