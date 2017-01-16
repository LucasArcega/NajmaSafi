<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 29/12/2016
 * Time: 06:23
 */


    include '../model/sobre.php';



    if(isset($_POST['textoSobre']) && !empty($_POST['textoSobre']) ){
        $sobre = new Sobre();
        $texto = $_POST['textoSobre'];

        echo json_encode($sobre->updateSobre($texto));

    }
    else{

        echo "Houve um erro ao receber seus dados, atualize a página e tente novamente";
    }


