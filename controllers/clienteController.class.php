<?php
    class clienteController{
        function inserir(){

        }

        function remover(){

        }

        function editar(){

        }

        // exibindo lista de clientes
        function listaClientes(){
            //  requer 1 vez o arquivo 
            require_once "models/cliente.class.php";
            $cliente = new Cliente();
            // variável de retorno
            $retorno = $cliente -> clientes;
            // inclui 'views' no controller
            require_once "views/lista.php";
        }
    };
?>