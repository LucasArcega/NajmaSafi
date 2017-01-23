<?php
/**
 * Created by PhpStorm.
 * User: Lucas Arcega
 * Date: 23/01/2017
 * Time: 03:01
 * Verifica se há um usuário logado antes de desempenhar funções administrativas
 */


session_start();
if(!isset($_SESSION['usuario']) && $_SESSION['logado']!=true ){
    header("Location: ../Home/");
}