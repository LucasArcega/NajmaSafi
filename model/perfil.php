<?php

/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 23/01/2017
 * Time: 02:40
 */
include 'banco.php';
class Perfil extends Banco
{

    public  $Usuario;
    public  $Email;
    public  $Senha;
    public  $Nome;

    function __construct()
    {
        parent::__construct();
    }

    public function Update(){

        if(isset($this->Usuario) && isset($this->Email)){
            $sql = "UPDATE usuario SET emailUsuario = '$this->Email', loginUsuario = '$this->Usuario' ";
            if($this->query($sql)){
                return true;
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }

    }

    public function Get(){
        //Procura usando o e-mail como parâmetro de condição
        if(isset($this->Email)){
            $result = $this->selectWhere("nomeUsuario, loginUsuario, emailUsuario", "usuario", "emailUsuario = '$this->Email'");
            return  $result;
        }
        else{
            return $this->ReturnBanco()->error;
        }
    }

}