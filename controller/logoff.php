<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 03/01/2017
 * Time: 04:08
 */
    session_start();
    unset($_SESSION['usuario']);
    unset($_SESSION['logado']);
    session_destroy();

    header("Location: ../view/index.php");