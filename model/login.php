<?php

    session_start();
    include 'banco.php';
    class Login extends Banco{


        function Login($usuario, $senha){

            parent::__construct();
            $senha = sha1($senha);
            $query = "SELECT loginUsuario, senhaUsuario FROM usuarios WHERE loginUsuario = '{$usuario}' AND senhaUsuario = '{$senha}' ";
            //$query = "SELECT login, senha FROM Usuarios WHERE login = '{$usuario}' AND senha = MD5('$senha') ";

            if($dados = $this->ReturnBanco()->query($query)){

                if($dados->num_rows == 1){

                    $sessao = $dados->fetch_assoc();
                    $_SESSION["usuario"] = $sessao["loginUsuario"];
                    $_SESSION['logado'] = true;
                    echo 'true';
                }

                else {
                    echo 'false';
                }
            }
            else{
                die($this->ReturnBanco()->error);
            }

        }
    }
?>


	