<?php

require_once 'app/Core/Core.php';
require_once 'app/Controller/HomeController.php';
require_once 'app/Controller/ErroController.php';

$template = file_get_contents('app/template/estrutura.html');

ob_start();
$core = new Core;
$core->start($_GET);
$saida = ob_get_contents();
//pega o conteúdo e joga na variável saída.
ob_end_clean();

 $templatePronto = str_replace('{{area_dinamica}}',$saida, $template);
//carregar o conteúdo da variável template, ou seja
//estou buscando o html do projeto.
echo $templatePronto;
