<?php

class LoginController
{
    public function index()
    {
        $loader = new \Twig\Loader\FilesystemLoader('app/view');
        $twig = new \Twig\Environment($loader, [
            'autoreload' => true,
        ]);

        $template = $twig->load('login.html');
        
        return $template->render();
       
    }

    public function check()
    {
        try {
            //colocar função de realizar sanitização dos dados
            $user = new User;
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $user->validadeLogin();

            header('Location: http://localhost/projetos/login/dashboard');
        } catch (\Exception $e) {
            header('Location: http://localhost/projetos/login/');
        }


    }
}
