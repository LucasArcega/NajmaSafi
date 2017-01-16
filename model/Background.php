<?php

/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 31/10/2016
 * Time: 03:18
 */

require ('banco.php');
class Background extends Banco
{

    function UpdateBackground($backgroundPage, $backgroundUrl){

        $sql = "UPDATE backgrounds SET $backgroundPage = '$backgroundUrl' ";

        if($this->ReturnBanco()->query($sql) ){
            return "Background atualizado com sucesso!";
        }
        else{
            die($this->ReturnBanco()->error);
        }

    }

    function GetBackground($backgroundPage){

        $sql = "SELECT $backgroundPage FROM backgrounds WHERE codigoBackground = 1";
        return $this->ReturnBanco()->query($sql)->fetch_row();

    }

}