<?php

class HomeController
{

    public function index()
    {
        //echo 'Home'
        try {
            $colecPostagens = Postagem::selecionaTodos();
            
            $loader = new \Twig\Loader\FilesystemLoader('app/View');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('home.html');
            //twig serve para alterar o html sem usar php no codigo. ou seja
            //não mistura .php na file home.html.

            $parametros = array();
            $parametros['postagens'] = $colecPostagens;

            $conteudo = $template->render($parametros);
            //renderizar a View.
            echo $conteudo;
            //mostrar html.
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
