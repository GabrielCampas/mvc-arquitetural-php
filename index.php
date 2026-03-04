<?php
    // se recebendo dados via get
    if($_GET){
        // qualquer controlador passado sera armazenado '$controle'
        $controle = $_GET["controle"];
        // armazenando informaçao na variavel 'metodo'
        $metodo = $_GET["metodo"];
        // criando um require variável
        require_once "controllers/{$controle}.class.php";
        $objeto = new $controle();

        // chamando metodo
        $objeto->$metodo();
    } 
    // senão
    else {
        // incluindo a classe 'inicioController' da pasta "/controllers"
        require_once "controllers/inicioController.class.php"; 
        // Criando objeto usando modelo (classe) 'inicioController' na memória
        $objeto = new inicioController;
        $objeto->inicio();
    }
?>