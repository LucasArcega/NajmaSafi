<?php

/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 08/01/2017
 * Time: 17:09
 */
include 'banco.php';
class Endereco extends Banco
{

    public function __construct()
    {
        parent::__construc();
    }


    public function listar()
    {
        return $this->select('*', 'endereco');
    }


    public function atualizar($placeId, $link){

        $sql = "UPDATE endereco SET linkEndereco = '$link', placeIdEndereco = $placeId WHERE codigoEndereco = 1" ;

         if($this->ReturnBanco()->query($sql)){

             return true;
         }
         else{
             return $this->ReturnBanco()->error;
         }

    }
}