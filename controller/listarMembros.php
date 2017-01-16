<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 31/10/2016
 * Time: 00:26
 */

    require ('../model/membro.php');

    $membro = new Membro();
    echo json_encode($membro->ListMembros());
?>