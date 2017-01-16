<?php

/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 29/12/2016
 * Time: 06:08
 */
include "banco.php";
class Sobre extends Banco
{

    function getSobre(){

        return $this->select('*','sobre');

    }

    function updateSobre($texto){

        $sql = "UPDATE sobre SET textoSobre = '{$texto}'";
        return $this->ReturnBanco()->query($sql);

    }

    function updateSobreImagem($imagem){

        $sql = "UPDATE sobre SET imagemSobre = '{$imagem}'";
        return $this->ReturnBanco()->query($sql);

    }




}