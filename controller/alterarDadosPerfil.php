<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 23/01/2017
 * Time: 03:09
 */

    require ('verificarLogado.php');
    require ('../model/perfil.php');

    $perfil = new Perfil();

    if(isset($_POST["usuario"]) && isset($_POST["email"])){
        $perfil->Usuario = $_POST["usuario"];
        $perfil->Email = $_POST["email"];

        if ($perfil->Update()){
            echo 'true';
        }
        else{
            echo $perfil->ReturnBanco()->error;
        }

    }

